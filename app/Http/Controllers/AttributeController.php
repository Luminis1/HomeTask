<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reference;

use App\Http\Requests;

class AttributeController extends Controller
{
    public function setAttribute()
    {
        Reference::insert(['name' => $_POST['name'], 'type_id' => $_POST['type_id'], 'table_id' => $_POST['table_id']]);
    }
    public function removeAttribute()
    {
        Reference::destroy($_POST['attr_id']);
    }
}
