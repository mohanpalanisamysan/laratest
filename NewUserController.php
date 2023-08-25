<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class NewUserController extends Controller
{
    public function NewUserSetup()
    {
        if(!empty(Auth::check()))
        {
            if (Auth::user()->user_type == 0)
            {
                return view('newuser');
            }
            else if (Auth::user()->user_type == "Admin")
            {
                return redirect('/');
            }
            else if (Auth::user()->user_type == "SchoolStudent")
            {
                return redirect('/');
            }
        }
        return redirect('/');
    }

    public function NewUserSetupFormValue(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);
        {
            $user->user_type = $request->user_type;
            $user->save();
            return redirect('/');
        }

    }


}