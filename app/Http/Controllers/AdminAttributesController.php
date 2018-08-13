<?php
namespace App\Http\Controllers;
use App\Traits\NavGeneratorTrait;
use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;
use App\Http\Requests;
class AdminAttributesController extends Controller
{
    use NavGeneratorTrait;
    public function basics()
    {
        $menu = NavGeneratorTrait::navGenerate();
        $tableType = $_GET['table'];
        $tableType_id = TypeOfTable::where('name', $tableType)->first();
        $basicsViewParams = ReferenceTypes::where('table_type', $tableType_id->id)->get();
        $attributes = Reference::where('table_id', $tableType_id->id)->get();
        return view('admin.index',[
            'basicsViewParams' => $basicsViewParams,
            'attributes' => $attributes,
            'table_id' => $tableType_id->id,
            'menu' => $menu
        ]);
    }

    public function setAttribute()
    {
        Reference::insert(['name' => $_POST['name'], 'type_id' => $_POST['type_id'], 'table_id' => $_POST['table_id']]);
    }
    public function removeAttribute()
    {
        Reference::destroy($_POST['attr_id']);
    }
}