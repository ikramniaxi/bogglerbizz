<?php

namespace App\Http\Controllers\portal;

use App\Models\ChatGpt;
use App\Models\Feedback;
use App\Models\GPTAccount;
use App\Models\GptSession;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AskAiController extends Controller
{
    protected $user_id;
    protected $user_role;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user_id = Auth::user()->id;
            $this->user_role = Auth::user()->role;
            return $next($request);
        });
    }


    public function index(Request $request)
    {
        // it loads the main writer page
        $page = 'chat-now';
       $sessions = GptSession::where('user_id', Auth::user()->id)->get();
        return view('portal.askAi.index', compact('page', 'sessions'));
    }

    public function chatNow(Request $r){
        $account = GPTAccount::where('status', 1)->inRandomOrder()->first();
        $session_id = $r->sess_id;
      
        if (empty($account)) {
            return json_encode(['status' => 201, 'msg' => 'We could not find any active APIs to fulfill your request.']);
        }
     
            $msg         = $r->msg;

            if (empty($session_id) || $session_id < 1) {
                // $SName = getFiveWordsFromString($msg);
                $SName = Str::limit($msg, 20, '...');
                $store = ['user_id' => $this->user_id, 'session_name'=> $SName];
                $create = GptSession::create($store);
                $session_id = $create->id;
                }else{
                    $validate = GptSession::where([
                        ['id', $session_id],
                        ['user_id', $this->user_id]
                    ])->first();
                    if (empty($validate)) {
                        return json_encode(['status' => 201, 'msg' => 'Ownership failed for the selected session.']);
                }
            }

     
            $aiModel = $r->aimodel;

            $open_ai_key = $account->api_key;

            // text model
        if ($aiModel == 'text') {
            $open_ai     = new OpenAi($open_ai_key);
            $recent = ChatGpt::where('session_id', $session_id)->latest()->first();
            $userQuery = $recent->query ?? '';
            $responseai  = $recent->response ?? '';
           
            $openaiApiKey = $open_ai_key;

            $input = array(
              'model' => 'gpt-3.5-turbo-0301',
              'messages' => array(
                array(
                    'role' => 'user',
                    'content' => $userQuery
                ),
                array(
                    'role' => 'assistant',
                    'content' => $responseai
                ),
                array(
                  'role' => 'user',
                  'content' => $msg,
                )
              )
            );

            $data_string = json_encode($input);

            $ch = curl_init('https://api.openai.com/v1/chat/completions');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $openaiApiKey,
                'Content-Length: ' . strlen($data_string)
            ));

            $data = curl_exec($ch);

            // print_r($data);
            // exit;

            $data = json_decode($data);
            $text = @nl2br(ltrim(remove_ai_prefix($data->choices[0]->message->content))) ?? '<span class="text-danger">No response from the API server.</span>';
            $finish_reason = @$data->choices[0]->finish_reason ?? '';
            $prompt_tokens = @$data->usage->prompt_tokens ?? '';
            $completion_tokens = @$data->usage->completion_tokens ?? '';

            if (!empty(@$data->choices[0]->message->content)) {
                $account->increment('success_requests');
                $status = 200;
            } else {
                $status = 300;
            }
        }else{ // text model

            // starting image model
            $open_ai = new OpenAi($open_ai_key);
            $imgRes = $open_ai->image([
               "prompt" => $msg,
               "n" => 1,
               "size" => "256x256",
               "response_format" => "url",
            ]);



            $Imgdata = json_decode($imgRes);
            $imgUrl = $Imgdata->data[0]->url ?? 'no-photo.png';
            $prompt_tokens = 0;
            $completion_tokens = 0;
            if ($imgUrl != 'no-photo.png') {
                $filename = uniqid().'.jpg';
                $text = $filename;
                $path = public_path('/aiphotos/' . $filename);
                file_put_contents($path, file_get_contents($imgUrl));
                $status = 200;
            } else {
                $text = 'no image could be generated with the given query, please try again.';
                $status = 300;
            }
        }
            

            $account->increment('requests');
            $account->save();

            $store = ['user_id' => $this->user_id, 'session_id' => $session_id, 'account_id' => $account->id, 'query' => $msg, 'response' => $text, 'status' => $status, 'model' => $aiModel, 'prompt_tokens' => $prompt_tokens, 'completion_tokens' => $completion_tokens];
            $tokens = $completion_tokens + $prompt_tokens;
            $create = ChatGpt::create($store);
            if ($create) {
                // $details = '<small class="opacity-6">
                //                 <button class="p-0 feedback" action="positive" cid="'.$create->id.'"><i class="fa fa-thumbs-up mr-1"></i></button>
                //             </small>

                //               <small class="opacity-6">
                //                 <button class=" p-0 feedback" action="negative" cid="'.$create->id.'"><i class="fa fa-thumbs-down mr-1"></i></button>
                //             </small>

                //               <small class="opacity-6">
                //                 <button class=" p-0"><i class="fa fa-certificate"></i> '.$tokens.'</button>
                //             </small>';

                $details = '<div class="chat-box-wrapper" style="padding-top:3px;">
                        <div>
                          <div class="avatar-icon-wrapper mr-1">
                            <div class="avatar-icon avatar-icon-lg rounded">
                              <img src="' . asset('avatars/'.Auth::user()->assistant_avatar) . '" alt="" />
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="chat-box"><span>Did you find this info useful ?</span>

                          </div>
                         <div class="float-right mt-1 chatFeedback">
                            
                             <span class="">
                                <button class="p-0 feedback" action="positive" cid="'.$create->id.'"><i class="fa fa-thumbs-up mr-1"></i> Yes</button>
                            </span>

                              <span class="">
                                <button class=" p-0 feedback" action="negative" cid="'.$create->id.'"><i class="fa fa-thumbs-down mr-1"></i> No</button>
                            </span>
                            
                         </div>
                        </div>
                      </div>';


                      $share = '<div class="float-right mt-1 chatFeedback">
                            
                                 <span class="">
                                    <button class="p-0 source" cid="'.$create->id.'"><i class="fa fa-book-open mr-1"></i> Source</button>
                                </span>

                                  <span class="">
                                    <button class=" p-0 share" cid="'.$create->id.'"><i class="fa fa-share mr-1"></i> Share</button>
                                </span>
                                
                             </div>';


                if ($status == 200 && $aiModel == 'image') {
                    $img = '<img src='.asset('aiphotos/'.$text).' width="100%">';
                    $response = ['msg' => $img, 'status' => $status, 'aimodel' => $aiModel, 'session_id' => $session_id, 'details' => $details, 'share' => ''];
                }else{
                    $response = ['msg' => $text, 'status' => $status, 'aimodel' => $aiModel, 'details' => $details, 'session_id' => $session_id, 'share' => $share];
                }
            } else {
                $response = ['status' => 201, 'msg' => $text, 'aimodel' => $aiModel];
            }
        

        echo json_encode($response);

    }

    public function loadOldConvo(Request $request)
    {
        // loading old convesation
        $session_id = $request->session_id;
        $validateSession = GptSession::where('id', $session_id)->count();
        $id = $request->last_id;
        $page = $request->page;
        $data = '';
        $last_id = 0;
        if ($validateSession > 0) {
            if ($id > 0) {
                $chats = ChatGpt::where([
                    ['session_id', $session_id],
                    ['id', '<', $id],
                ])->orderBy('id', 'desc')->take(3)->get();
            } else {
                $chats = ChatGpt::where('session_id', $session_id)->orderBy('id', 'desc')->take(3)->get();
            }
                for ($i = count($chats) - 1; $i >= 0; $i--) {
                    $chat = $chats[$i];
                    $key = $i;
                    $data .= '
                  <div class="float-right">
                        <div class="chat-box-wrapper chat-box-wrapper-right">
                          <div>
                            <div class="chat-box">' . $chat->query . '</div>
                           
                          </div>
                          <div>
                            <div class="avatar-icon-wrapper ml-1">
                              <div class="avatar-icon avatar-icon-lg rounded">
                                <img src="' . asset('avatars/'.Auth::user()->my_avatar) . '" alt="" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>';

                    if ($chat->status == 200 && $chat->model == 'image') {
                        $txtImg = '<img src='.asset('aiphotos/'.$chat->response).' width="100%">';
                    }else{
                        $txtImg = nl2br(removeExtraSpacesAndLineBreaks($chat->response));
                    }
                    $tokens = $chat->prompt_tokens + $chat->completion_tokens;
                    $data .= '
                  <div class="chat-box-wrapper">
                        <div>
                          <div class="avatar-icon-wrapper mr-1">
                            <div class="avatar-icon avatar-icon-lg rounded">
                              <img src="' . asset('avatars/'.Auth::user()->assistant_avatar) . '" alt="" />
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="chat-box"><span>' . $txtImg . '</span>

                          </div>
                            
                              <div class="float-right mt-1 chatFeedback">
                            
                                 <span class="">
                                    <button class="p-0 source" cid="'.$chat->id.'"><i class="fa fa-book-open mr-1"></i> Source</button>
                                </span>

                                  <span class="">
                                    <button class=" p-0 share" cid="'.$chat->id.'"><i class="fa fa-share mr-1"></i> Share</button>
                                </span>
                                
                             </div>

                        </div>
                      </div>
                   
                  ';
                    $last_id = $chat->id;
                }

                $res = ['status' => 200, 'data' => $data, 'last_id' => $last_id];
        } else {
            $res = ['status' => 'error', 'msg' => 'You selected an invalid session.', 'last_id' => $last_id];
        }

        if ($last_id == 0) {
            $res = ['status' => '300', 'msg' => 'All record have been loaded.', 'last_id' => $last_id];
        }

        return json_encode($res);
    }

    










   
    public function feedback(){
        $feedbacks=Feedback::latest()->limit(100)->get();
        return view('portal.askAi.feedback',compact('feedbacks'));
    }

}
