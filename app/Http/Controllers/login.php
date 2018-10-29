<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class login extends CoreController
{
    function loginindex()
    {
    	return view('login');
    }

    function registerindex()
    {
    	return view('register');
    }

    function setusers(Request $request)
    {

    	$name= $request->name;
    	$email= $request->email;
    	$password= md5($request->password);
    	$role= $request->role;


    	$query= $this->InsertData("INSERT INTO users (role, name,  email, password) VALUES ('".$role."', '".$name."', '". $email."', '".$password."')");

    	if ($query)
    	{
    		return redirect('/');
    		Session::flash('message', 'Users Add Sucessfully!'); 
    	}
    	else
    	{
    		echo 'Error!';
    	}
    }

    function setlogin(Request $request)
    {
    	$email= $request->email;
    	$password= md5($request->password);

    	$rows= $this->NumRow("SELECT id FROM users WHERE email='".$email."' AND password='".$password."'");

    	if ($rows>0)
    	{
    		$data= $this->SelectData("SELECT id FROM users WHERE email='".$email."' AND password='".$password."'");
    		$request->session()->put('sessionData',$data[0]->id);
    		return redirect('/');
    	}
    	else
    	{
    		Session::flash('message', 'Invalid Username or password!'); 
    		return redirect('/login');

    	}
    }

    function logout(Request $request)
    {
    	$request->session()->forget('sessionData');
    	return redirect('/');
    }

    function emailexist(Request $request)
    {
    	$email= $request->email;
    	$data= $this->NumRow("SELECT * FROM users WHERE email= '".$email."'");
    	if ($data>0)
    	{
    		return 1;
    	}
    	else
    	{
    		return 0;
    	}
    }
}
