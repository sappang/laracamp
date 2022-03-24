<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Mail;
Use App\Mail\Checkout\Paid;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout){

        
        $checkout->payment_status = 'Paid';
        $checkout->save();


        // send Email
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "Checkout With ID {$checkout->id} has been updated!");
        return redirect(route('admin.dashboard'));
    }
}
