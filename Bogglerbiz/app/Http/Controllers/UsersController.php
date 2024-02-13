<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Cache;
use App\Subscription;
use App\Payment;
use App\UserGroup;
use App\GptSession;
use App\Feedback;
use App\ChatGpt;
use Carbon\Carbon;
class UsersController extends Controller{
   private $uid;
   private $role;
   public  function __construct(){
        $this->middleware(function ($request, $next) {
             $this->uid   = Auth::user()->id;
             $this->role   = Auth::user()->role;
            return $next($request);
        });
     }   

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // loading users page in the admin panel
        $page = 'users';       
        $users = User::get(['name', 'id']);
        return view('admin.users', compact('page','users'));
    }

    public function getUsers(Request $request){  
        // sleep(20);
        // loading all the users to display for admin area, that how many users we have got registered so far and how many users are active, and who was active last time etc.
         $draw = $request->get('draw');
         $start = $request->get("start");
         $rowperpage = $request->get("length"); // Rows display per page
         
         $columnIndex_arr = $request->get('order');
         $columnName_arr = $request->get('columns');
         $order_arr = $request->get('order');
         $search_arr = $request->get('search');
         $columnIndex = $columnIndex_arr[0]['column']; // Column index
         $columnName  = $columnName_arr[$columnIndex]['data']; // Column name
         $columnSortOrder = $order_arr[0]['dir']; // asc or desc
         $searchValue = $search_arr['value']; // Search value
              
     // Total records
         $totalRecords = User::select('count(*) as allcount')->count();
         $totalRecordswithFilter = User::select('count(*) as allcount');
         // Fetch records
         $records = User::orderBy($columnName,$columnSortOrder);
         if (isset($searchValue)) {
             $records->where('users.name', 'like', '%' .$searchValue . '%');
             $totalRecordswithFilter->where('name', 'like', '%' .$searchValue . '%');
         }
         if ($request->type != 44) {                     
             $records->where('type', $request->type);
             $totalRecordswithFilter->where('type', $request->type);
         }
    
        $totalRecordswithFilter = $totalRecordswithFilter->count();
        $records = $records->select('users.*')->skip($start)->take($rowperpage)->get();                              
         $data_arr = array();

         foreach($records as $record){ 
         
            $btns = '<button type="button" class="btn btn-outline-success btn-xs viewUser" data-backdrop="false" data-keyboard="false" data-toggle="modal" data-target="#deletedUser" uid="'.$record['id'].'"><i class="fa fa-eye"></i></button><button type="button" class="btn btn-outline-info btn-xs editUser" data-toggle="modal" data-target="#editUser" data-backdrop="false" data-keyboard="false" uid="'.$record['id'].'"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-outline-danger btn-xs dropUser" name="'.$record['name'].'" uid="'.$record['id'].'"><i class="fa fa-trash"></i></button>
            ';
            if (Cache::has('user-is-online-' . $record->id)){
                $isActive =  '<span class="badge badge-pill badge-success" data-toggle="tooltip" title="User is Online"><i class="fa fa-wifi"></i></span>';
            }else{
                $isActive =  '<span class="badge badge-pill badge-danger" data-toggle="tooltip" title="User is Offline"><i class="fa fa-eye-slash"></i></span>';                
            }

            $tokens = ChatGpt::where('user_id', $record->id)
                ->selectRaw('SUM(prompt_tokens + completion_tokens) as total_tokens')
                ->pluck('total_tokens')
                ->first() ?? 0;

            $queries =  ChatGpt::where('user_id', $record->id)->whereDate('created_at', '>=', now()->subDays(30))->count();
            $data_arr[] = array(
              "id" =>    $record['id'],
              "name" => $record['name'],
              "email" => $record['email'],
              "role" => userRole($record['role']),
              "assistant_name" => $record['assistant_name'],
              "assistant_avatar" => '<img src="'.asset('avatars/'.$record['assistant_avatar']).'" width="30px">',
              "queries" =>'<span class="badge badge-success">'. $queries.'</span>',
              "created_at" => fTimeConvert($record['created_at']),
              "last_seen" => (!empty($record->last_seen)) ? '<span class="badge badge-pill badge-primary" data-toggle="tooltip" title="last seen '.fTimeConvert($record->last_seen).'">'.timeElapsed($record->last_seen).'</span>' : '<span class="badge badge-pill badge-danger">Never</span>' ,
              'status'=> $isActive,
              "operations" => $btns,
            );
          }        

         $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );

         echo json_encode($response);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // admin storing a new user in the database, admin can create new admin or a simple user

        if(Auth::user()->role == 1){
        $validator = Validator::make($request->all(), [
            'email' => 'required|required|unique:users',
            'name' => 'required|max:20',
            'password'=>'required|min:6|confirmed',
            'role'=>'required|numeric|min:1|max:3',
        ]);
             
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);           
        }else{
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password);
            $data['role']     = $request->role;
            $data['ref']      = Auth::user()->id;
            $data['dec_key']  = 'azee-'.Str::random(10);
            $data['email_verified_at'] = Carbon::now();
            if(User::create($data)){
                return response()->json(['success'=>'Added new records.']);
            }else{
                return response()->json(['error'=>'Something went wrong to add the new user']);
            }
            
        }   
     }else{
        return 0; 
     }
 }

public function updmyPassword(Request $request){
    // updating password if required for admin or user
    $pass  = $request->pass;
    $cpass = $request->cpass;
    if (!empty($pass) && !empty($cpass)) {
        if (strlen($pass) > 5 && strlen($cpass) > 5) {
            if ($pass == $cpass) {
                $user = User::find($this->uid);
                if (!empty($user)) {
                    $user['password'] = Hash::make($pass);
                    $user->save();
                    return 1;
                }else{
                    return "Invalid user identifier.";
                }
            }else{
                return "Confirm password mismatched.";
            }
        }else{
            return "Password length must be greater than 5 characters.";
        }
    }else{
        return "Password and confirm password must not be empty.";
    }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

//getting users for dropdown
    public function getnameid(){
        $users = User::get(['id','name']);
        if (count($users) > 0) {          
            $response = ' 
                  <label>Select User</label><select name="userid" id="userid" class="form-control">
                  <option value="0">Select User</option>
                  ';
            foreach ($users as $user) {
              $response .= '<option value='.$user['id'].'>'.ucfirst($user['name']).'</option>';
            }
            $response .= '</select>';
        }else{
          $response = 'No Users found...';
        }
        return $response;
    }

//get one user to view
    public function getUserview(Request $request){
        // getting a single user for admin to view it on a modal popup
         $role = Auth::user()->role;
        if ($role == 1) {
             $user = User::where('id', $request->id)->first();
             if (!empty($user)) {
                 $response = '
                 <table class="table table-striped">
                    <tr><th>Name</th><th>Email</th></tr>
                    <tr><td>'.$user['name'].'</td><td>'.$user['email'].'</td></tr>
                    <tr><th>Created By</th><th>Total Domains</th></tr>
                    <tr><td>'.$this->name($user['ref']).'</td><td>0</td></tr>
                    <tr><th>Created at</th><th>Updated At</th></tr>
                    <tr><td>'.fTimeConvert($user['created_at']).'</td><td>'.fTimeConvert($user['updated_at']).'</td></tr>  
                    <tr><th>User Role</th><td>'.userRole($user['role']).'</td></tr>               
                 </div>';                  
             }else{
                $response = "You requested an invalid user identifier.";
             }
        }else{
            $response = "Access Denied...";
        }
        return $response;
    }


    public function destroy(Request $request){
        //deleting a user
       if(Auth::user()->role == 1){       
            $user = User::find($request->id);
            if ($user->delete()) { 
                Payment::where('user_id', $request->id)->delete();              
                Subscription::where('user_id', $request->id)->delete();              
                return 1;
            }else{
                echo "Something went wrong to delete the user.";
            }
    
       }else{
           echo "Only an admin can delete users";
       }
    } 

  

 public function name($id){
     $name = User::where('id', $id)->first();
     return @$name['name'];
    }
   
//get one user data to edit
    public function getOneuser(Request $req){
        $user = User::find($req->id);
        if (!empty($user)) {
            return   json_encode(['status'=>1, 'name'=>$user['name'], 'email'=> $user['email'], 'id'=> $user['id'], 'assistant_name' => $user->assistant_name]);
        }else{
            return json_encode(['status'=>'You requested an invalid user identifier, please refresh the page and try again. If the problem still persists then contact the developer.']);
        }     
    }

//submit updation of user
    public function upduser(Request $request){
         if(Auth::user()->role == 1){
        $validator = Validator::make($request->all(), [
            'email' =>['required',Rule::unique('users')->ignore($request->uid)],
            'name' => 'required|max:20',
            'password'=>'nullable|min:6|confirmed',
            'role'=>'nullable|min:1|max:3',
            'newaname' => 'required',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif'
        ]);
             
        if ($validator->fails()) {
            $res = ['error'=>$validator->errors()->all()];           
        }else{
            $user = User::find($request->uid);            
            if (!empty($user)) {            
                $user['name']  = $request->name;
                $user['email'] = $request->email;
                $user['assistant_name'] = $request->newaname; 
                if (isset($request->password)) {
                    $user['password'] = Hash::make($request->password);
                }
                if (!empty($request->file)) {
                    $file = request()->file('file'); 
                    $originalName = $file->getClientOriginalName(); 
                    $slugName = \Illuminate\Support\Str::slug($originalName); 
                    $fileName = $slugName.'.'.$file->getClientOriginalExtension();
                    request()->file->move(public_path('avatars'), $fileName);
                    $user['assistant_avatar'] = $fileName;
                }
                if (isset($request->role)) {
                    $user['role'] = $request->role;
               }                                
                if($user->save()){
                    $res = ['success' => ['User updated']];                    
                }else{
                    $res = ['error'=> ['Something went wrong to add the new user']];
                }

            }else{
                $res = ['error' => ['you requested an invalid user identifier.']];
            }
            
        }   
     }else{
        $res = ['error'=> ['Only an admin can update a user']];
     }

     return response()->json($res);
    }

    
    public function getUserDecKey($uid){
        $user = User::where('id', $uid)->first();
        return $user->dec_key;
    }

    public function validateUser($uid){
        $user = User::where('id', $uid)->first();
        if(!empty($user)){
            return 'ok';
        }else{
            return 'false';
        }
    }

    public function allotTokens(Request $request){
        $user = User::where('id', $request->user_id)->first();
        $tokens = $request->tokens;
        if (!empty($user)) {
            if ($tokens > 0) {
                $user->available_tokens = $user->available_tokens + $tokens;
                $user->save();
                $res = ['success' => ['updated']];
            }else{
                $res = ['error' => ['Please enter some valid tokens to assign to the user.']];
            }
        }else{
            $res = ['error' => ['We could not find the requested user :(']];
        }

        return response()->json($res);
    }

    public function updAssistant(Request $request){
        $validator = Validator::make($request->all(), [
            'newaname' => 'required',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif',
            'myavatar' => 'nullable|mimes:jpg,png,jpeg,gif'
        ]);
        if ($validator->fails()) {
            $res = ['error'=>$validator->errors()->all()];           
        }else{
            $user = User::where('id', $this->uid)->first();
            $user->assistant_name = $request->newaname;
            if (!empty($request->file)) {
                    $file = request()->file('file'); 
                    $originalName = $file->getClientOriginalName(); 
                    $slugName = \Illuminate\Support\Str::slug($originalName); 
                    $fileName = $slugName.'.'.$file->getClientOriginalExtension();
                    request()->file->move(public_path('avatars'), $fileName);
                    $user->assistant_avatar = $fileName;
            } 

            if (!empty($request->myavatar)) {
                    $file = request()->file('myavatar'); 
                    $originalName = $file->getClientOriginalName(); 
                    $slugName = \Illuminate\Support\Str::slug($originalName); 
                    $fileName = $slugName.'.'.$file->getClientOriginalExtension();
                    request()->myavatar->move(public_path('avatars'), $fileName);
                    $user->my_avatar = $fileName;
            }

            $user->save();
            $res = ['success' => ['Done']];
        }

        return response()->json($res);
    }

    public function mySettings(){
        return view('admin.my-settings');
    }
    public function updateProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1|max:30',
            'file' => 'nullable|mimes:jpg,png,jpeg,gif',
        ]);
        if ($validator->fails()) {
            $res = ['error'=>$validator->errors()->all()];           
        }else{
            $user = User::where('id', $this->uid)->first();
            $user->name = $request->name;

            if (!empty($request->file)) {
                    $file = request()->file('file'); 
                    $originalName = $file->getClientOriginalName(); 
                    $slugName = \Illuminate\Support\Str::slug($originalName); 
                    $fileName = $slugName.'.'.$file->getClientOriginalExtension();
                    request()->file->move(public_path('avatars'), $fileName);
                    $user->my_avatar = $fileName;
            }

            $user->save();
            $res = ['success' => ['Done']];
        }

        return response()->json($res);
    }

    public function delMyAcc(){
        if ($this->role == 1) {
           $res = ['status' => 'error', 'msg' => 'You can not delete your account, because youre an administrator'];
        }else{
            UserGroup::where('user_id', $this->uid)->delete();
            ChatGpt::where('user_id', $this->uid)->delete();
            GptSession::where('user_id', $this->uid)->delete();
            Feedback::where('user_id', $this->uid)->delete();
            User::where('id', $this->uid)->delete();
            $res = ['status' => 200];
        }

        return json_encode($res);
    }
}
