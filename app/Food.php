<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Food extends Model
{
    protected $table = "foods";
    protected $fillable = ['image'];

    public static function updateFoodImage($filename,$id) {

        DB::table('foods')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }

    public static function addFoodImage($filename) {
        $data['image'] = $filename;
        DB::table('foods')->insert($data);
        return 'success';
    }
}
