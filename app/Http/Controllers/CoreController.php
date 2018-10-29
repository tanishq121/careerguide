<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CoreController extends Controller
{
   function InsertData($query)
   {

   		$data= DB::insert($query);
   		return $data;
   }

   function SelectData($query)
   {
   		$data= DB::select($query);
   		return $data;
   }

   function NumRow($query)
   {
   		$data= DB::select($query);

   		$row= sizeof($data);

   		return $row;
   }

}
