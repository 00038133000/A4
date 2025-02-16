<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {

        // Check if the user has a welcome cookie
        if (!$request->cookie('visited_welcome')) {
            // Set a welcome cookie to indicate that the user has visited the welcome page
            // if request has mulai button create cookie
            if ($request->has('mulai')) {
                $cookie = cookie('visited_welcome', true, 60 * 24 * 365);
                return redirect()->route('login')->withcookie($cookie);
            } else {
                return response()->view('welcome');
            }

        } else if ($request->cookie('visited_welcome') ) {
            return redirect()->route('index');
        }

    }

}

