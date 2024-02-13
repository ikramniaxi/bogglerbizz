<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ChatGpt;

class FeedbackController extends Controller{

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
        $page = 'feedbacks';
        return view('admin.feedbacks', compact('page'));
    }

    public function store(Request $request){
        $cid    = $request->cid;
        $action = $request->action;
        $validateChat = ChatGpt::where([
            ['id', $cid],
            ['user_id', $this->user_id]
        ])->first();

        if (!empty($validateChat)) {
            $validateFeedback = Feedback::where([
                ['user_id', $this->user_id],
                ['chat_id', $cid]
            ])->first();
            if (empty($validateFeedback)) {
                if ($action == 'positive') {
                    Feedback::create(['user_id' => $this->user_id, 'chat_id' => $cid, 'feedback' => 'positive']);
                }elseif($action == 'negative'){
                    Feedback::create(['user_id' => $this->user_id, 'chat_id' => $cid, 'feedback' => 'negative']);
                }else{
                    $res = ['status' => 'error', 'msg' => 'Invalid feedback type.'];
                }
                $res = ['status' => 200, 'msg' => 'Feedback recorded'];
            }else{
                $res = ['status' => 'error', 'msg' => 'Feedback recorded already.'];
            }
        }else{
            $res = ['status' => 'error', 'msg' => 'We could not find the requested chat to record your feedback.'];
        }

        return json_encode($res);
    }

    public function fetchAll(Request $request){
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
         $totalRecords = Feedback::select('count(*) as allcount')->count();
         $totalRecordswithFilter = Feedback::join('chat_gpts', 'feedback.chat_id','=','chat_gpts.id')
         ->join('users', 'feedback.user_id', '=', 'users.id')->select('count(*) as allcount');
         // Fetch records
         $feedbacks = Feedback::join('chat_gpts', 'feedback.chat_id','=','chat_gpts.id')
         ->join('users', 'feedback.user_id', '=', 'users.id')
         ->orderBy($columnName,$columnSortOrder);
         if (isset($searchValue)) {
             $feedbacks->where('chat_gpts.query', 'like', '%' .$searchValue . '%');
             $totalRecordswithFilter->where('chat_gpts.query', 'like', '%' .$searchValue . '%');
         }
      
    
        $totalRecordswithFilter = $totalRecordswithFilter->count();
        $feedbacks = $feedbacks->select('users.name', 'chat_gpts.query', 'chat_gpts.response','chat_gpts.model', 'feedback.feedback', 'feedback.id', 'feedback.created_at')->skip($start)->take($rowperpage)->get();                              
         $data_arr = array();

         foreach($feedbacks as $feedback){ 
         
           if ($feedback->model == 'text') {
               $resp = $feedback->response;
           }else{
            $resp = '<div class="rounded"><img src="'.asset('aiphotos/'.$feedback->response).'" width="50px"></div>';
           }

            $data_arr[] = array(
              "id" =>    $feedback->id,
              "name" =>    $feedback->name,
              "query" =>    $feedback->query,
              "response" =>    $resp,
              "feedback" =>    ($feedback->feedback == 'positive') ? '<span class="badge badge-success">Helpful</span>' : '<span class="badge badge-danger">Not Helpful</span>',
              'created_at' => fTimeConvert($feedback->created_at)
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
}
