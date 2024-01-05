<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    
    protected function guard()
    {
        return auth()->guard('web');
    }

    public function __construct()
    {
        $this->middleware('web')->except('postLogout');
        $this->loginRoute = route('admin.login');
    }

    public function index(){
        

        return view("adminlogin/login");    
    }

    public function postLogin(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'The username field is required.',
            'password.required' => 'The password field is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = AdminUser::where('username',$request->input('username'))->first();
        if(!$user){
            return redirect()->back()->withErrors(['username' => 'Invalid Username']);
        }
        if($user->password == $request->input('password')){
            if (Auth::user()) {
                // User is authenticated
                return redirect()->intended(('admin.dashboard'));
            }
               
          
        }
        else
        {
            return redirect()->back()->withErrors(['password' => 'Invalid Password']);
        }
    }

}
