<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AskAiController extends Controller
{
    public function index()
    {
        return view('portal.askAi.index');
    }
    public function feedback(){
        $feedbacks=Feedback::latest()->limit(100)->get();
        return view('portal.askAi.feedback',compact('feedbacks'));
    }

}
