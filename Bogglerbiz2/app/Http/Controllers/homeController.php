<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\myPlans;
use App\Models\payment;
use Illuminate\Support\Str;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\subscription_plan;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index()
    {
        $subscriptionPackages = subscription_plan::all();

        return view('frontend.index', ['subscriptionPackages' => $subscriptionPackages]);
    }
    public function checkout($id)
    {
        $subscriptionPackages = subscription_plan::find($id);
        $user = Auth::user();
        $checkout = $user->newSubscription('default', $subscriptionPackages->stripe_plan)->trialDays(7)
        ->checkout([
            'success_url' => route('checkout-success',['subscriptionplan'=>$subscriptionPackages->id]),
            'cancel_url' => route('checkout-cancel'),
        ]);
        return view('frontend.checkout', ['subscriptionPackages' => $subscriptionPackages, 'checkout' => $checkout]);
    }
    /**
     * Handle checkout session completed.
     *
     * @param  array  $payload
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handleCheckoutSessionCompleted($payload)
    {
        $user = User::where('stripe_id', $payload['data']['object']['customer'])->first();

        if ($user) {
            \Log::error($payload);
            // Save a record to the database
            payment::create([
                'user_id' => $user->id,
                'amount' => $payload['data']['object']['amount_total'],
                // Add any other fields you need
            ]);
        }

        return new Response('Webhook Handled', 200);
    }

    public function checkoutSuccess(Request $request){
        $plan=subscription_plan::find($request->subscriptionplan);

        $user = Auth::user();
      
        myPlans::updateOrCreate(['user_id'=>$user->id],
            [
                'user_id' => $user->id,
                'subscription_plans_id' => $plan->id,
                'status' => 0,
                'end_at' => $plan->type == 0 ? now()->addDay(30) : now()->addDay('365')

            ]
        );
        $subscription=subscription::create([
            'user_id'=>Auth::id(),
            'name'=>$plan->name,
            'stripe_id'=>Str::random(7),
            'stripe_price'=>$plan->amount,
            'quantity'=>1,
            'trial_ends_at'=>now()->addDays(7),
            'ends_at'=>$plan->type==0?now()->adddays(30):now()->adddays(365),
            'subscriptionPlan_id'=>$plan->id,
            'stripe_status'=>'active'
        ]);

        payment::create([
            'amount'=>$plan->price,
            'subscription_id'=>$subscription->id,
            'user_id'=>Auth::id()
        ]);
        $checkoutSession = $request->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));
 
    }
    public function checkoutCancel(Request $request){
       return "payment Failed";
    }
}
