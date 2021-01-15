<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Exterior extends Model
{
    protected $fillable = ['image'];

    public static function updateExteriorImage($filename,$id) {

        DB::table('exteriors')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }

    public static function addExteriorImage($filename) {
        $data['image'] = $filename;
        DB::table('exteriors')->insert($data);
        return 'success';
    }
}
