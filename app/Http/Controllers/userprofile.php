<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userprofile extends CoreController
{
    function index()
    {
    	return view('coachprofile');
    }

    
}
