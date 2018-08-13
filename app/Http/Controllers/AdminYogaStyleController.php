<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminYogaStyleController extends Controller
{
    public function YogaStyle()
    {
        $tableType = 'YogaStyle';
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
