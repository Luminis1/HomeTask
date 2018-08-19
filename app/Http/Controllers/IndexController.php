<?php

namespace App\Http\Controllers;

use App\Traits\NavGeneratorTrait;
use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;
use App\Model\Added_treat;
use Illuminate\Support\Facades\Auth;

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


       return view('treats.addtreat',
       [
           'menu' => $menu,
           'attributes' => $attributes,
           'tables' => $tables,
           'refTypes' => $refTypes
       ]);
   }

   public function object()
   {
       $arr = $_POST;
       $object = (object)$arr;
       Added_treat::insert(['treat_object' =>  json_encode($object), 'user_id' => Auth::user()->id ]);
   }
   public function treatList()
   {
       $menu = null;
        return view('treats.treatList',
            [
                'menu' => $menu
            ]);
   }

}
