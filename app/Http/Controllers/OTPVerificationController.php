<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Facades\Google2FA;
use Illuminate\Support\Facades\Session;

class OTPVerificationController extends Controller
{
    //

    public function loginotpverify()
    {

        return view("auth.otp-verify");
    }
    public function otpverifycheck(Request $request)
    {
        $resultotp = implode('', $request->otp);
        $storedOTP = Session::get('otp');
        $expiretime = Session::get('expiry');
        $currenttime = now();


        if ($currenttime <= $expiretime) {

            if ($resultotp == $storedOTP) {
                Session::put('user_email', Session::get('e'));
                Session::forget(['otp', 'e', 'expiry']);
                return redirect()->route('userprofile')->with('success', 'Successfully Logined!');
            } else {
                // return view("auth.otp-verify")->with('Error','Incorrect OTP.');
                return redirect()->back()->with('message', 'Incorrect OTP.');
            }

        } else {
            return redirect()->back()->with('message', 'Your OTP time expired please resend OTP for login!.');
        }


    }
}
