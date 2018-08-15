<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Reference extends Model
{
    public static function getAllRetreatInfo(){
        $result = DB::table('references')
            ->join('reference_types', 'references.type_id', '=', 'reference_types.id')
            ->select('references.*', 'reference_types.*')
            ->get();

        return $result;

    }
}
