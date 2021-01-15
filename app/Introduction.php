<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Introduction extends Model
{
    protected $fillable = ['title', 'subtitle', 'text', 'food', 'toy', 'location', 'crewtitle','bookingtitle','addimage'];

    public static function saveIntroduction($introduction,$id) {
        DB::table('introductions')
            ->where('id', $id)
            ->update(['text' => $introduction]);

        return 'success';
    }

    public static function updateFoodImage($filename,$id) {

        DB::table('introductions')
            ->where('id', $id)
            ->update(['food' => $filename]);

        return 'success';
    }

    public static function updateToyImage($filename,$id) {

        DB::table('introductions')
            ->where('id', $id)
            ->update(['toy' => $filename]);

        return 'success';
    }

    public static function updateLocationImage($filename,$id) {

        DB::table('introductions')
            ->where('id', $id)
            ->update(['location' => $filename]);

        return 'success';
    }
}
