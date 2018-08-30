<?php
namespace App\Http\Controllers;
use App\Traits\NavGeneratorTrait;
use Illuminate\Http\Request;
use App\Model\Reference;
use App\Model\ReferenceTypes;
use App\Model\TypeOfTable;
use App\Http\Requests;
use App\Model\Accomodation_modal;
use DB;

class AdminAttributesController extends Controller
{
    /*
     * Группы контроллеров для управления значениями атрибутов
     */
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

    public function modal()
    {
        $menu = NavGeneratorTrait::navGenerate();
        $modals = Accomodation_modal::all();

        return view('admin.modal',[
            'menu' => $menu,
            'modals' => $modals
        ]);
    }

    public function setAttribute()
    {
        Reference::insert([
            'name' => $_POST['name'],
            'type_id' => $_POST['type_id'],
            'table_id' => $_POST['table_id']
        ]);
    }
    public function removeAttribute()
    {
        Reference::destroy(
            $_POST['attr_id']
        );
    }

    public function setHelp()
    {
        DB::update('update reference_types set help=? where id=?',[$_POST['help'], $_POST['element']]);
    }
    public function setSlug()
    {
        DB::update('update reference_types set slug=? where id=?',[$_POST['slug'], $_POST['element']]);
    }

    public function setModal()
    {

        $label = $_POST['label'];
        $labelNorm = mb_strtolower($label);
        $needls = [',','.','/','"',"'", ' '];
        $labelNorm = str_replace($needls,"_", $labelNorm);

        Accomodation_modal::insert(['label' => $label, 'label_norm' => $labelNorm]);

    }
    public function removeModal()
    {
        Accomodation_modal::destroy(
            $_POST['attr_id']
        );
    }
}