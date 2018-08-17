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
       dd($_POST);
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
