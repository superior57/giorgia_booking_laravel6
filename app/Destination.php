<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    protected $fillable = ['image'];

    public static function updateDestinationImage($filename,$id) {

        DB::table('destinations')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }

    public static function addDestinationImage($filename) {
        $data['image'] = $filename;
        DB::table('destinations')->insert($data);
        return 'success';
    }
}
