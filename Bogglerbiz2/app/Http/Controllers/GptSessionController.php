<?php

namespace App\Http\Controllers;

use App\Models\GptSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatGpt;
class GptSessionController extends Controller{
   protected $user_id;
   protected $user_role;

   public  function __construct(){
        $this->middleware(function ($request, $next) {
             $this->user_id     = Auth::user()->id;
             $this->user_role   = Auth::user()->role;

            return $next($request);
        });
     } 
  public function create(Request $r){
    // creating a new session to start a conversation 
    $session_name  = $r->session_name;
    if (strlen($session_name) > 3) {
        
    $validate     = GptSession::where([
        ['session_name', $session_name],
        ['user_id', Auth::user()->id]
    ])->first();
    if (empty($validate)) {
        $store  = ['user_id' => Auth::user()->id, 'session_name'=> $session_name];
        if (GptSession::create($store)) {
            $res  = ['status' => 200];
        }else{
            $res  = ['status' => 'error', 'msg' => 'Something went wrong to create the new conversation.'];            
        }
    }else{
        $res = ['status' => 'error', 'msg' => 'you have already created the requested conversation name.'];
     }
   }else{
    $res = ['status' => 'error', 'msg' => 'Session name must not be less than 3 characters.'];
   }


    return json_encode($res);
  }

  public function loadSessions(Request $request){
    $session_name = $request->session_name;
    $sessions     = GptSession::orderBy('id', 'desc')->where('user_id', $this->user_id);
    if (strlen($session_name) > 3) {
        $sessions->where('session_name', 'LIKE', '%'.$session_name.'%');
    }
    $sessions = $sessions->get();
    $html = '';
    if (sizeof($sessions) > 0) {
        foreach ($sessions as $key => $session) {
            $html .='<li class="nav-item session" sid="'.$session->id.'">
                      <button type="button" tabindex="0" class="dropdown-item">
                        <div class="widget-content p-0">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-3">
                              <div class="avatar-icon-wrapper">
                                <div class="avatar-icon">
                                  <img src="'.asset('avatars/'.Auth::user()->assistant_avatar).'"/>
                                </div>
                              </div>
                            </div>
                            <div class="widget-content-left">
                            
                              <div class="widget-subheading">
                                '.ucfirst($session->session_name).' 
                              </div>
                            </div>
                            <div class="widget-content-right">
                               <span class="btn btn-default btn-xs delSess" sid="'.$session->id.'"><i class="fa fa-times"></i></span>
                            </div>

                          </div>
                        </div>
                      </button>
                    </li>';
        }
    }else{
        $html = '<div class="alert alert-danger">
                  <i class="fa fa-times-circle"></i>  No Conversations Found!
                 </div>';
    }

    return $html;

  }

  public function delete(Request $request){
    $sid = $request->sess_id;
    $session = GptSession::where([
        ['user_id', $this->user_id],
        ['id', $sid]
    ])->first();

    if (!empty($session)) {
        ChatGpt::where('session_id', $sid)->delete();
        $session->delete();
        $res = ['success' => ['Deleted.']];
    }else{
        $res = ['error' => ['We could not find a conversation with the requested identifier.']];
    }

    return response()->json($res);
  }
}
