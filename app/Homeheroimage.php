<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Homeheroimage extends Model
{
    protected $fillable = ['image'];

    public static function updateHeroImage($filename,$id) {

        DB::table('homeheroimages')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }

    public static function addHeroImage($filename) {
        $data['image'] = $filename;
        DB::table('homeheroimages')->insert($data);
        return 'success';
    }
}
