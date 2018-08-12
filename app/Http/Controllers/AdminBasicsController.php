<?php

namespace App\Http\Controllers;

use App\Models\Basics\Language_list;
use App\Models\Basics\Country;
use App\Models\Basics\TreatFor;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminBasicsController extends Controller
{
    public function index()
    {
        $languages = Language_list::all('id', 'name');
        $country = Country::all('id', 'countryName');
        $treat = TreatFor::all('id', 'name');


        return view('admin.index',[
            'languages' => $languages,
            'country' => $country,
            'treat' => $treat
        ]);

    }
    public function setLanguage()
    {
        Language_list::insert(['name' => $_POST['lang']]);
    }
    public function removeLanguage()
    {
        Language_list::destroy($_POST['lang_id']);
    }
    public function setCountry()
    {
        Country::insert(['countryName' => $_POST['country']]);
    }
    public function removeCountry()
    {
        Country::destroy($_POST['country_id']);
    }
    public function setTreat()
    {
        TreatFor::insert(['Name' => $_POST['treat']]);
    }
    public function removeTreat()
    {
        TreatFor::destroy($_POST['treat_id']);
    }
}
