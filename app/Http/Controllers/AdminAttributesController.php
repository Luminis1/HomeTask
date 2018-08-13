<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;

use App\Http\Requests;

class AdminAttributesController extends Controller
{
    public function basics()
    {
        $tableType = $_GET['table'];
        $tableType_id = TypeOfTable::where('name', $tableType)->first();
        $basicsViewParams = ReferenceTypes::where('table_type', $tableType_id->id)->get();
        $attributes = Reference::where('table_id', $tableType_id->id)->get();

        return view('admin.index',[
            'basicsViewParams' => $basicsViewParams,
            'attributes' => $attributes,
            'table_id' => $tableType_id->id

        ]);

    }
}
