<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatGptController extends Controller
{
    public function index()
    {
        return view('portal.ask-ai');
    }
}
