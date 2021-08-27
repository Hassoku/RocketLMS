<?php

namespace App\Http\Controllers\web;

use Stripe\Charge;

use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\PaymentChannels\Drivers\Stripe\Channel;

class StripePaymentController extends Controller
{


    public function index(){
        return view('web.default.payment.index');
    }
    public function stripePost(Request $request)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));

       $charge = Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from mojavilms."
        ]);


       $session =  Session::flash('success', 'Payment successful!');

        return back();
    }
}
