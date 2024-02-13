<?php

namespace App\Http\Controllers\portal;

use App\Models\subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscripController extends Controller
{
    public function index()
    {
        $subscription=subscription::all();
        return view('portal.subscription.index',compact('subscription'));
    }
}
