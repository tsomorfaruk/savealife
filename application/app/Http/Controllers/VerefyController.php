<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Auth;
use App\User;

class VerefyController extends Controller
{

    public function verification(Request $request){

        if ( Auth::user()->otp == $request->get('fa')) {

			auth()->user()->update(['otp' => null]);			
            return redirect('/home');

        }else{

            return redirect('/verification')->with('fail','Wrong OTP! Please try again...');
        }
    }


    public function resend(){

    	$twf = rand(100000, 999999);
        Mail::to(Auth::user()->email)->send(new SendMail($twf));
        auth()->user()->update(['otp' => $twf]);

        return redirect('/verification')->with('success', 'OTP has been resend! Try Again');


    }
}
