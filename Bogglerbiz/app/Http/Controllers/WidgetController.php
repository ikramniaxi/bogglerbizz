<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Widget;
use App\Models\ChatGpt;
use App\Models\GPTAccount;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
use Illuminate\Support\Facades\Auth;
class WidgetController extends Controller{
    
 

    public function index(Request $request){
        $page = 'widget-code';
        $user_id = $request->uid;
        $user_id = (!empty($user_id)) ? $user_id : Auth::user()->id; 

        $widget = Widget::where('user_id', $user_id)->first();
        $users = User::get();
        if (empty($widget)) {
            $key = 'azee-'.Str::random(8);
            $store = ['user_id' => $user_id, 'key' => $key];
            widget::create($store);
        }else{
            $key     = $widget->key;
        }

        $code = $this->generateCode($key);

        return view('portal.widget.index', compact('page', 'code', 'users', 'request'));
    }

    private function generateCode($key){
         $endpoint = url('api/chat-now/'.Auth::user()->id.'/'.$key);
 $html = '          <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="'.asset('widget/style.css').'">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                    </head>
                    <body>
                        <div class="container">
                            <aside id="sidebar_secondary" class="tabbed_sidebar ng-scope chat_sidebar popup-box-on">
                                <div class="popup-head">
                                    <div class="popup-head-left pull-left">
                                        <img class="md-user-image" src="'.asset('avatars/default.gif').'">
                                        <h1>NANO.ai</h1>
                                    </div>
                                    <button class="pull-right closeChat"><i class="fa fa-minus-circle"></i></button>
                                </div>
                                <div id="chat" class="chat_box_wrapper chat_box_small chat_box_active">
                                    <div class="chat_box touchscroll chat_box_colors_a" id="chatList">
                                        <div class="chat_message_wrapper">
                                            <span class="starter">Ask me Anything</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_submit_box">
                                    <div class="uk-input-group">
                                        <div class="gurdeep-chat-box">
                                            <form action="'.$endpoint.'" method="post" id="chatForm">
                                                <input type="text" placeholder="Type a message" id="msg" name="msg" class="md-input" autocomplete="off">
                                                    <div class="controls">
                                                       <div class="leftControls">
                                                            <button type="button" mtype="text" class="selectModel active">Text</button>
                                                            <button type="button" mtype="image" class="selectModel">Image</button>
                                                       </div>
                                                       <div class="rightControls">
                                                           <button type="submit" class="float-right">Ask</button>
                                                       </div>
                                                    </div>
                                                    <input type="hidden" id="aimodel" value="text">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="oChatcont hide">
                            <button class="openChat"><i class="fa fa-comment"></i> Chat Now</button>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="'.asset('widget/script.js').'"></script>
                    </body>
                    </html>';
          return htmlspecialchars($html);
    }

    public function chatNow(Request $request){
        // sleep(3);
        $user_id   = $request->user_id;
        $api_key   = $request->api_key;
        $msg       = "“You're an advanced, intelligent assistant. In a fun conversational manner provide a concise answer to the request. Begin your response with 'Here is what I found' and then pause. 
        At the end of your response pause and with gravitas and confidence say,
         'This, is connected.info, ...the info YOU need , when, and where YOU need it. and the query is:".$request->msg;

        $account = GPTAccount::where('status', 1)->inRandomOrder()->first();
      
        if (empty($account)) {
            return json_encode(['status' => 'error', 'msg' => 'We could not find any active OpenAi API to fulfill your request.']);
        }

        $validate  = widget::where([
            ['user_id', $user_id],
            ['key', $api_key]
        ])->first();

        if (!empty($validate)) {

            $aiModel = $request->aimodel;

            if ($aiModel == 'text') {
                $recent = ChatGpt::where('is_widget', 1)->latest()->first();
                $userQuery = $recent->query ?? '';
                $responseai  = $recent->response ?? '';

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
                    'Authorization: Bearer ' . $account->api_key,
                    'Content-Length: ' . strlen($data_string)
                ));

                $data = curl_exec($ch);


                // print_r($data);
                // exit;
                $data = json_decode($data);

                $text = @nl2br(ltrim(remove_ai_prefix($data->choices[0]->message->content))) ?? '<span class="text-danger">No response from the API server.</span>';
                // $finish_reason = @$data->choices[0]->finish_reason ?? '';
                $prompt_tokens     = @$data->usage->prompt_tokens ?? '';
                $completion_tokens = @$data->usage->completion_tokens ?? '';

                 if (!empty(@$data->choices[0]->message->content)) {
                    $account->increment('success_requests');
                    $status = 200;
                } else {
                    $status = 300;
                }
            }else{
                // image
                 // starting image model
                $open_ai = new OpenAi($account->api_key);
                $imgRes = $open_ai->image([
                   "prompt" => $request->msg,
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

             $store = ['user_id' => $user_id, 'account_id' => $account->id, 'query' => $msg, 'response' => $text, 'status' => $status, 'is_widget' => 1, 'prompt_tokens' => $prompt_tokens, 'completion_tokens' => $completion_tokens,'model' => $aiModel];

             if (ChatGpt::create($store)) {
                 if ($status == 200 && $aiModel == 'image') {
                    $img = '<img src='.asset('aiphotos/'.$text).' width="100%">';
                    $response = ['msg' => $img, 'status' => $status, 'aimodel' => $aiModel];
                }else{
                    $response = ['msg' => $text, 'status' => $status, 'aimodel' => $aiModel];
                }
            } else {
                $response = ['status' => 'error', 'msg' => 'Something went wrong to store the chat history'];
            }

        }else{
            $response = ['status' => 'error', 'msg' => 'Your api key seems to be invalid.'];
        }

        return json_encode($response);
    }
}
