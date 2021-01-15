<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Toy extends Model
{
    protected $fillable = ['image'];

    public static function updateToyImage($filename,$id) {

        DB::table('toys')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }

    public static function addToyImage($filename) {
        $data['image'] = $filename;
        DB::table('toys')->insert($data);
        return 'success';
    }
}
