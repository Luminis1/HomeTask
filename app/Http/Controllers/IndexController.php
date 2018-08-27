<?php

namespace App\Http\Controllers;

use App\Traits\NavGeneratorTrait;
use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;
use App\Model\Added_treat;
use Illuminate\Support\Facades\Auth;
use App\Model\Accomodation_modal;
use App\User;
use DB;
use App\Http\Requests;

class IndexController extends Controller
{
    use NavGeneratorTrait;
   public function addTreat()
   {
       $attributes = Reference::getAllRetreatInfo();
       $refTypes = ReferenceTypes::all();
       $menu = NavGeneratorTrait::navGenerate();
       $tables = TypeOfTable::all();
       $modal = Accomodation_modal::all();



       return view('treats.addtreat',
       [
           'menu' => $menu,
           'attributes' => $attributes,
           'tables' => $tables,
           'refTypes' => $refTypes,
           'modal' => $modal
       ]);
   }
   public function object()
   {
       $arr = $_POST;
       $object =  $arr;



       Added_treat::insert(['treat_object' =>  json_encode($object), 'user_id' => Auth::user()->id ]);
       return redirect('/treatList');
   }
   public function treatList()
   {

       $treats = Added_treat::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
       $obj = [];

       foreach ($treats as $k => $v)
       {
           $obj[] = json_decode($v->treat_object);
       }
       $menu = null;
        return view('treats.treatList',
            [
                'menu' => $menu,
                'obj' => $obj
            ]);
   }
   public function emailVerify($token)
    {
        $email = session($token);
        if(!empty($email)){
            DB::update('update users set isActive=? where email=?', [1, $email]);
            return redirect('/login')->with(['status' => 'Email verified. Please login']);
        }else{
            return redirect('/login')->with(['status' => 'Email verify is unsuccess. Register now and verify your email not longer than 24 hour']);
        }
    }
}
