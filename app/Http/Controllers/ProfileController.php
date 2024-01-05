<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Userdata;
use App\Models\Contactus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use PragmaRX\Google2FALaravel\Traits\Google2FAUser;
use App\Mail\YourMailClass;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view("profile.profile");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function userMessage(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);
        $products = Contactus::create($data);

        if ($products) {
            return redirect()->back()->with('success', 'We received your enquiry and we will reach you soon:)');
        } else {
            return redirect()->back()->with('error', 'Failed to sent enquiry:(');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function profileedit(Request $request)
    {


        $dataa = DB::selectOne("SELECT * FROM users where id=$request->id");

        return view('profile.edit-profile', ['user' => $dataa]);
    }
    public function otpverify(Request $request)
    {

        //    $email=$request->email;
//    $ciphering = "AES-128-CTR";
//    $iv_length = openssl_cipher_iv_length($ciphering);
//    $options = 0;
//    $encryption_iv = '1234567891011121';
//    $encryption_key = "JayamWebSolution";
//    $encrytemail = openssl_encrypt($email, $ciphering,
//                $encryption_key, $options, $encryption_iv);

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
        else
            $url = "http://";
        $url .= $_SERVER['HTTP_HOST'];
        $basurl = $url;
        $simple_string = "/verify_email";
        $url .= $simple_string;
        $body = '
<h4><b>Click the button link to verify your mail: </b></h4>
<a href=' . '' . $url . '/' . $request->email . '>
        <button class="GFG">
            Click To Verify
        </button>
    </a><br>
 The link generater by ' . $basurl . '';
        // dd($request->all());exit;

        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users',
            // 'password' => 'required|min:8',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',

        ]);

        if ($validator->fails()) {


            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $hashedPassword = Hash::make($request->input('password'));
        echo \App\Http\Controllers\SmtpMailer::sent($request->email, "Email verification:", $body);


        $user = Userdata::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => "",
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),

        ]);


        if ($user) {
            // Successful registration
            return redirect()->route('login')->with('success', 'Registration successful. Please check your inbox to verify email!.');
        } else {
            // Unsuccessful registration
            return redirect()->route('Signup')->with('error', 'Registration failed. Please try again.');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function verify_email(Request $request)
    {

        // echo $request->email;exit;
        $verified = DB::select("select * from users  WHERE email='$request->email'");
        $array = json_decode(json_encode($verified), true);
        if (sizeof($array) == NULL) {
            return redirect()->route('Signup')->with('message', 'Your account is\'t there please register first!');
        } else {
            $verified = DB::select("select email_verified_at from users  WHERE email='$request->email'");
            $array = json_decode(json_encode($verified), true);
            if ($array[0]['email_verified_at'] == 1) {
                return redirect()->route('login')->with('message', 'Your email Id is already verified!');
                // print_r($array);exit;
            } else {
                // print_r($array);exit;
                DB::update("UPDATE users SET email_verified_at='1' WHERE email='$request->email'");
                return redirect()->route('login')->with('message', 'Successfully Verified!');
            }
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function profileeditsave(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',

        ]);
        DB::update("UPDATE users SET fname='" . $data['fname'] . "',lname='" . $data['lname'] . "',phone='" . $data['phone'] . "',email='" . $data['email'] . "',dob='" . $data['dob'] . "',gender='" . $data['gender'] . "'  WHERE id='" . $data['id'] . "'");

        return redirect()->route('userprofile')->with('success', 'Successfully updated!');

    }

    public function orders()
    {

        return view("profile.orders");
    }

    public function address()
    {

        return view("profile.address");
    }

    public function addAddress()
    {

        return view("profile.add-address");
    }

    public function register()
    {


        return view("profile.register");
    }
    public function login()
    {


        return view("profile.login");
    }
    public function userprofile()
    {


        if (session()->has('user_email')) {
            $user = DB::selectOne("select * from users  WHERE email='" . Session::get('user_email') . "'");
            Session::put('user_name', $user->fname . ' ' . $user->lname);
            return view("profile.profile", ['user' => $user]);
        } else {
            return redirect()->route('login');
        }

    }
    public function userlogout()
    {

        session()->flush();
        Auth::logout();
        return redirect()->route('login');

    }
    public function Signup()
    {


        return view("profile.signup");
    }
    public function Forgetpassword()
    {


        return view("profile.forgetpassword");
    }

    public function verifyLogin(Request $request)
    {



        $request->validate([
            'email' => 'required|email',
            // 'password' => 'required',
        ]);

        $verified = DB::select("select * from users  WHERE email='$request->email'");
        $array = json_decode(json_encode($verified), true);
        if (sizeof($array) == NULL) {
            return redirect()->route('login')->with('message', 'Incorrect Email Id!');
        }
        if ($array[0]['email_verified_at'] == 0) {
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                $url = "https://";
            else
                $url = "http://";
            $url .= $_SERVER['HTTP_HOST'];
            $basurl = $url;
            $simple_string = "/verify_email";
            $url .= $simple_string;
            $body = '
<h4><b>Click the button link to verify your mail: </b></h4>
<a href=' . '' . $url . '/' . $request->email . '>
        <button class="GFG">
            Click To Verify
        </button>
    </a><br>
 The link generater by ' . $basurl . '';
            echo \App\Http\Controllers\SmtpMailer::sent($request->email, "Email verification:", $body);
            return redirect()->route('login')->with('message', 'Your email Id is not verified!, please check your inbox!');

        }

        // $credentials = $request->only('email');
        // Auth::attempt($credentials
        if ($array[0]['email_verified_at'] == 1) {

            $otp = rand(1111, 9999);
            $expiry = now()->addMinutes(5);
            Session::put('otp', $otp);
            Session::put('expiry', $expiry);

            $body = '<h4><b>One Time Password: </b></h4>
<h3>' . $otp . '</h3>
          <br>
         The link generater by..';
            echo \App\Http\Controllers\SmtpMailer::sent($request->email, "Email OTP verification:", $body);
            Session::put('e', $request->email);
            return redirect()->route('loginotpverify');
        }
        //  else {

        //     return redirect()->route('login')->with('message','Incorrect password.');
        // }

    }

}
