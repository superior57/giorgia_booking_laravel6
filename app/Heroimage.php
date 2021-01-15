<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Heroimage extends Model
{
    protected $fillable = ['image'];


    public static function updateHeroImage($filename,$id) {

        DB::table('heroimages')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }
}
