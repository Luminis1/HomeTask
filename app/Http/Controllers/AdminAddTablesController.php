<?php

namespace App\Http\Controllers;

use App\Traits\NavGeneratorTrait;
use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;
use App\Http\Requests;

class AdminAddTablesController extends Controller
{
    /*
     * Группы методов для управления елементами блоков
     * Наполнение или удаление атрибутов
     */
    use NavGeneratorTrait;
    public function index()
    {
        $menu = NavGeneratorTrait::navGenerate();
        $tables = TypeOfTable::all();

        return view('admin.tablesAdd',[
            'tables' => $tables,
            'menu' => $menu
        ]);
    }
    public function addTable()
    {
        TypeOfTable::insert(['name' => $_POST['name']]);
    }
    public function removeTable()
    {
        TypeOfTable::destroy(['id' => $_POST['id']]);
    }
    public function addReferenceTypes()
    {
        ReferenceTypes::insert(
            ['type' => $_POST['attr_name'],
                'table_type' => $_POST['table_id'],
                'element_type' => $_POST['etype'],
                'help' => $_POST['attr_help'],
                'slug' => $_POST['attr_slug'],
                'required' => $_POST['required']
            ]);
    }
    public function removeAttrType()
    {
        ReferenceTypes::destroy(['id' => $_POST['id']]);
    }
}
