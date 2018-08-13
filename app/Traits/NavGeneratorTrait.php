<?php


namespace App\Traits;
use App\Model\TypeOfTable;


trait NavGeneratorTrait
{
    public static function navGenerate()
    {
        return TypeOfTable::all();
    }
}