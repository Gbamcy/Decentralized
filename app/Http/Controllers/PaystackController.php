<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaystackController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'amount' => 'required|numeric'
        ]);
        $amount = floatval($request->get('amount')) * 100;
        $request->merge(['amount' => $amount, 'reference' => 'rhema-church'.Str::random(10)]);
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return redirect()->back()->with('error', 'payment failed to initialize');
        }
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
