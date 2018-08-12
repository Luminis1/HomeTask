<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
   public function addTreat()
   {
       return view('treats.addTreat');
   }
}
