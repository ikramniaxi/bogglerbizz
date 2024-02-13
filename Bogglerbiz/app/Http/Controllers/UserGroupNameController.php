<?php

namespace App\Http\Controllers;

use App\UserGroupName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use Illuminate\Validation\Rule;
use App\User;
class UserGroupNameController extends Controller{
    protected $user_id;
    protected $user_role;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->user_id = Auth::user()->id;
            $this->user_role = Auth::user()->role;
            return $next($request);
        });
    }
        public function index(){
            $page = 'user-groups';
            $groups = UserGroupName::join('users', 'user_group_names.user_id', 'users.id')->select('user_group_names.*','users.name as creator')->get();
            $users = User::where('role', 3)->get();
            return view('admin.user-groups', compact('page', 'groups', 'users'));
        }

        public function store(Request $request){
             $validator = Validator::make($request->all(), [
                    'group_name' => 'required|min:3|max:50|unique:user_group_names',
                    'app_name' => 'required|min:3|max:50',
                    'app_logo' => 'nullable|mimes:jpg,png,jpeg',
                ]);
                    
                if ($validator->fails()) {
                    $res = ['error'=>$validator->errors()->all()];           
                }else{

                    if (!empty($request->file)) {
                          $file = request()->file('app_logo'); 
                    
                        $originalName = $file->getClientOriginalName(); 
                        $slugName = \Illuminate\Support\Str::slug($originalName); 
                        $fileName = $slugName.'.'.$file->getClientOriginalExtension();

                        request()->app_logo->move(public_path('logo'), $fileName);
                    }else{
                        $fileName = 'default.png';
                    }
                  
                    
                    $store = ['user_id' => $this->user_id,  'group_name' => $request->group_name, 'app_name' => $request->app_name, 'app_logo' => $fileName];

                    UserGroupName::create($store);
                    if ($store) {
                        $res = ['success'=>'You have successfully created a user group.'];                        
                    }else{
                        $res = ['error'=>'Something went wrong to create the group.'];
                    }
                   
                }

                return response()->json($res);   
        }

public function update(Request $request){
        $validator = Validator::make($request->all(), [
                    'group_name' => ['required','min:3', 'max:50', Rule::unique('user_group_names')->ignore($request->group_id)],
                    'app_name' => 'required|min:3|max:50',
                    'app_logo' => 'nullable|mimes:jpg,png,jpeg',
                    'is_updating' => 'required|min:1|max:1',
                    'group_id' => 'required|min:1',
                ]);
                    
                if ($validator->fails()) {
                    $res = ['error'=>$validator->errors()->all()];           
                }else{

                    $group = UserGroupName::where('id', $request->group_id)->first();
                    if (!empty($group)) {
                    
                    $group->group_name = $request->group_name;     
                    $group->app_name = $request->app_name;          

                    if (!empty($input->app_logo)) {
                        $file = request()->file('app_logo'); 

                        $originalName = $file->getClientOriginalName(); 
                        $slugName = \Illuminate\Support\Str::slug($originalName); 
                        $fileName = $slugName.'.'.$file->getClientOriginalExtension();

                        request()->app_logo->move(public_path('logo'), $fileName);

                    }

                    if ($group->save()) {
                        $res = ['success' => ['updated']];
                    }else{

                    }

                    }else{
                        $res = ['error' => ['No group found with the requested credentials.']];
                    }

                
                   
                }

                return response()->json($res);  
    }

    public function delete(Request $request){
        $group_id = $request->group_id;
        $group = UserGroupName::where('id', $request->group_id)->first();
        if (!empty($group)) {
            if ($group->delete()) {
                $res = ['success' => ['deleted']];
            }else{
                $res = ['error' => ['Something went wrong to delete the requested group.']];
            }
        }else{
                $res = ['error' => ['We could not find the group with the requested identifier.']];
        }

        return response()->json($res);
    }

    public function edit(Request $request){
        $group = UserGroupName::where('id', $request->group_id)->first();
        if (!empty($group)) {
            $res = ['status' => 200, 'group_name' => $group->group_name, 'app_name' => $group->app_name, 'bg_color' => $group->bg_color, 'text_color' => $group->text_color, 'voice_gender' => $group->voice_gender, 'bot_name' => $group->bot_name];
        }else{
            $res = ['status' => 'error', 'msg' => 'Record not found!'];
        }

        return json_encode($res);
    }
}
