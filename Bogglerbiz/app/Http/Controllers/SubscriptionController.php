<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\myPlans;
use App\Models\payment;
use Illuminate\Support\Str;
use App\Models\subscription;
use Illuminate\Http\Request;
use App\Models\subscription_plan;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function payments($id){
        $payments=subscription::find($id)->payments;
        return view('portal.subscription.payments',compact('payments'));
    }
    public function create(Request $request, $id)
    {
        $plan = subscription_plan::find($id);



        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' =>$plan->name
                        ],
                        'unit_amount' => $plan->price * 100,
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => url('stripe/success/' . $plan->id),
            'cancel_url' => url('customer/bookings'),
        ]);
        return redirect()->away($session->url);


        // if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
        //     return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        // }
        // $plan = subscription_plan::findOrFail($request->get('plan'));

        // $request->user()
        //     ->newSubscription('default', 'price_1OBxUzFWLM2dH4jVIyb2FqPy')
        //     ->create($request->stripeToken);

        // return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
    }

    public function subscribed($id)
    {
        $plan = subscription_plan::find($id);
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

        return redirect()->route('home');
    }
}
