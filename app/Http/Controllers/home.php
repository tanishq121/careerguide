<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends CoreController
{
    function index()
    {
    	return view('home');
    }
}
