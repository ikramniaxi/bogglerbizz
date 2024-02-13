<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscription_plan;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function show(subscription_plan $plan,Request $request){
       $plan=subscription_plan::where('id',5)->first();
        $user=Auth::user();
        $intent= $user->createSetupIntent();
        return view('pages.payment.subscription',compact('plan','intent'));
    }
}
