<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Interior extends Model
{
    protected $fillable = ['image'];

    public static function updateInteriorImage($filename,$id) {

        DB::table('interiors')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }

    public static function addInteriorImage($filename) {
        $data['image'] = $filename;
        DB::table('interiors')->insert($data);
        return 'success';
    }
}
