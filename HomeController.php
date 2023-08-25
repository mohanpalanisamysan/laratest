<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function home()
    {
        //Check if there is any user authentication is in place when try to access home page
        if(!empty(Auth::check()))
        {
            // Child-1) Get New user page if the authenticated user is not set
            if (Auth::user()->user_type == 0)
            {
                return redirect('newuser');
            }

            // Child-2) To check if the authenticated user is "Admin"
            else if (Auth::user()->user_type == "Admin")
            {
                // Get Admin dashboard if the authenticated user is "Admin"
                return view('admin.dashboard.index');
            }
            
            // Child-3) To check if the authenticated user is "Student"
            else if (Auth::user()->user_type == "SchoolStudent")
            {
                
                // Sub-Child-1) To check if school is set or not for "Student"
                if((Auth::user()->school == 0))
                {
                    // Get new user controller, if School is not set for "Student"
                    return redirect('/newuser-student');
                }

                // To return to student home page if School is set for "Student"
                if((Auth::user()->user_status == "Approved"))
                {
                return redirect('/student/home/');
                }

                else {
                    return view('home.index');
                }
            }

        }

        // Get non authenticated home page
        return view('home.index');
    }

}