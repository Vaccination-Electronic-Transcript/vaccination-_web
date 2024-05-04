<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Check if the user is authenticated

        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('admins.adminhome');
            }
            else if($usertype=='Admin')
            {
                return view('dashboard');
            }
            else
            {
                return redirect()->back();
            }

        }
    }
}
