<?php

namespace App\Http\Controllers;

use App\Traits\NavGeneratorTrait;
use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;

use App\Http\Requests;

class IndexController extends Controller
{
    use NavGeneratorTrait;
   public function addTreat()
   {

       echo 1111;
       $attributes = Reference::getAllRetreatInfo();
       echo 2222;
       $refTypes = ReferenceTypes::all();
       echo 3333;
       $menu = NavGeneratorTrait::navGenerate();
       echo 44444;
       $tables = TypeOfTable::all();
       echo 555555;


       return view('treats.addTreat',
       [
           'menu' => $menu,
           'attributes' => $attributes,
           'tables' => $tables,
           'refTypes' => $refTypes
       ]);
   }

   public function object()
   {
       dd($_POST);
   }
}
