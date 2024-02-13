<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\GPTAccount;
class GPTAccountController extends Controller{
    public function index(){
        $page = 'manage-gpt-accounts';
        return view('admin.manage-gpt-accounts', compact('page'));
    }

    public function getAccounts(Request $request){
        // this function loads all the APIs account of OPENAI on the admin area where the admin can add any account or disable any account
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
         $totalRecords = GPTAccount::select('count(*) as allcount')->count();
         $totalRecordswithFilter = GPTAccount::select('count(*) as allcount');
         // Fetch records
         $records = GPTAccount::orderBy($columnName,$columnSortOrder);
         if (isset($searchValue)) {
             $records->where('account_email', 'like', '%' .$searchValue . '%');
             $totalRecordswithFilter->where('account_email', 'like', '%' .$searchValue . '%');
         }

        $totalRecordswithFilter = $totalRecordswithFilter->count();
        $records = $records->select('g_p_t_accounts.*')->skip($start)->take($rowperpage)->get();                              
        $data_arr = array();

         foreach($records as $record){ 
            $btns = '<button class="btn btn-outline-primary btn-xs updstatus" aid="'.$record->id.'"><i class="fa fa-shield-alt"></i></button>
            <button class="btn btn-outline-danger btn-xs delAcc" aid="'.$record->id.'"><i class="fa fa-trash-alt"></i></button>';
            
            $data_arr[] = array(
              "id" =>    $record->id,
              "account_email" => $record->account_email,
              "requests" => $record->requests,
              "success_requests" => $record->success_requests,
              "failed" => $record->requests - $record->success_requests,
              "status" => ($record->status == 1) ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>',
              "created_at" => fTimeConvert($record->created_at),
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

    public function store(Request $request){
        // storing a new API account in the database
         $validator = Validator::make($request->all(), [
            'account_email' => 'required|email|unique:g_p_t_accounts',
            'api_key'       => 'required|min:51|max:51|unique:g_p_t_accounts'
        ]);
             
        if ($validator->fails()) {
            $response = ['error'=>$validator->errors()->all()];           
        }else{
            $store  = ['account_email' => $request->account_email, 'api_key' => $request->api_key];

            if (GPTAccount::create($store)) {
                $response = ['success' => 'Record inserted successfully.'];
            }

        }

        return response()->json($response);
    }

    public function updStatus(Request $request){
        //updating an account status, enable account or disable account 1 is for enable and 0 is for disable if the account status is 0 then it will not be used to request the openAI api server
     $s = GPTAccount::where('id', $request->id)->first();
        if (!empty($s)) {
            if ($s->status == 1) {
                $s->status = 0;
                $s->update();
                $response = ['status' => 200 , 'message' => 'The requested account has been disabled successfully. <b>'.$s->account_email.'</b>. '];
            }else{
                $s->status = 1;
                $s->update();
                $response = ['status' => 200 , 'message' => 'The requested account has been enabled successfully. <b>'.$s->account_email.'</b>. '];
            }
        }else{
                $response = ['status' => 201 , 'message' => 'Invalid account identifier.'];
        }

        return json_encode($response);
    }

    public function delAccount(Request $request){
        $aid = $request->aid;
        $account = GPTAccount::where('id', $aid)->first();
        if (!empty($account)) {
            $account->delete();
            $res = ['status' => 200];
        }else{
            $res = ['status' => 'error', 'msg' => 'You requested an invalid account identifier.'];
        }

        return json_encode($res);
    }
}
