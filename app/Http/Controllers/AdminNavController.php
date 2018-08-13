<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminNavController extends Controller
{
   public function index()
   {
       return view('admin.navbar');
   }
}
