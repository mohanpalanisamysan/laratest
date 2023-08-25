<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Hash;
use Auth;
use Mail;
use Str;

class AuthController extends Controller
{

// Register Route Controller

    public function register()
    {
        if(!empty(Auth::check()))
            {
                return redirect('/');
            }
        return view('auth.register');
    }

    
    public function AuthRegister(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
        
        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->password = $request->password;
        $save->save();

        return view('auth.login')->with('success', "Your Account has been Created");
    }

// Login Route Controller

    public function login()
    {
            if(!empty(Auth::check()))
                {
                    return redirect('/');
                }
        return view('auth.login');
    }

// Get user input from Login Page

    public function AuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ], $remember))
        {
            return redirect('/');
        }
        else{
            return redirect()->back()->with('error', 'Incorrect Username/password, please try again');
        }
    }

// Route for forgot password page

    public function forgotpassword()
    {
        return view('auth.forgotpassword');
    }

// Get user input from Forgot Password Page

    public function PostForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if (!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', "Check your mailbox for password reset link");
        }
        else
        {
            return redirect()->back()->with('error', "No such Email address Found in our system");
        }

    }

//Password Reset for User from Email Link

    public function reset($remember_token)
    {
        $user = User::getTokenSingle($remember_token);
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset', $data);
        }
        else{
            abort(404);
        }
    }

    public function PostReset($token, Request $request)
        {
            if($request->password == $request->confirmpassword)
            {
                $user = User::getTokenSingle($token);
                $user->password = Hash::make($request->password);
                $user->remember_token = Str::random(30);
                $user->save();

                return redirect(url(''))->with('success',"Password successfully changed");
            }
            else{
                return redirect()->back()->with('error', "Password and Confirm Password does not Match");
            }
        }

// User logout        

    public function logout()
    {
        Auth::logout();
        return redirect( url(''));
    }
}