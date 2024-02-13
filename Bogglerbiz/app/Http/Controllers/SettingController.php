<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Validator,Redirect,Response;

class SettingController extends Controller{
    
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
        $page = 'settings';
        $settings = Setting::where('is_admin', 1)->get();
        return view('admin.settings', compact('page', 'settings'));
    }

    public function updAppName(Request $request){   
        $appName = $request->app_name;
        $appname = Setting::where('key_name', 'app_name')->first();
        if (!empty($appname)) {
            Cache::forget('app_name');
            Cache::put('app_name', $appName);
            $appname->key_value = $appName;
            $appname->save();
            $res = ['status' => 200, 'msg' => 'appname updated.'];
        }else{
            $res = ['status' => 'error', 'msg' => 'App name key value was not found.'];
        }
        return json_encode($res);
    }

     public function store(Request $request){
         $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpg,png,jpeg, gif',
        ]);
            
        if ($validator->fails()) {
            $res = ['error'=>$validator->errors()->all()];           
        }else{

            $file = request()->file('file'); 
            
            $originalName = $file->getClientOriginalName(); 
            $slugName = \Illuminate\Support\Str::slug($originalName); 
            $fileName = $slugName.'.'.$file->getClientOriginalExtension();

            request()->file->move(public_path('logo'), $fileName);
                
            Setting::where('key_name', 'app_logo')->update([
                        'key_value' => $fileName
                ]);
            cache::forget('site_logo');
            cache::put('site_logo', $fileName);

            $res = ['success'=>'You have successfully uploaded file.'];
           
        }

        return response()->json($res);    
  }

  public function updateBgColor(Request $request){
    $color = $request->color;
    if ($this->user_role == 1) {
        $acolor = Setting::where('key_name', 'bg_color')->first();
        cache::forget('bg_color');
        cache::put('bg_color', $color);
        $acolor->key_value = $color;
        $acolor->save();
        return 200;
    }
  }

  public function updTxtColor(Request $request){
    $txtColor = $request->txtcolor;
     if ($this->user_role == 1) {
        $tColor = Setting::where('key_name', 'text_color')->first();
        cache::forget('txt_color');
        cache::put('txt_color', $txtColor);
        $tColor->key_value = $txtColor;
        $tColor->save();
        return 200;
    }
  }

    public function voiceGender(Request $request){
    $gender = $request->gender;
     if ($this->user_role == 1) {
        $dbGender = Setting::where('key_name', 'voice_gender')->first();
        cache::forget('voice_gender');
        cache::put('voice_gender', $gender);
        $dbGender->key_value = $gender;
        $dbGender->save();
        return 200;
    }
  }
}
