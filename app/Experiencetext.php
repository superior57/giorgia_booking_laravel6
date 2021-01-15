<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Experiencetext extends Model
{
    protected $fillable = ['food', 'toy','fooddescription', 'toydescription', 'destination'];

    public static function saveFoodDescription($description,$id) {
        DB::table('experiencetexts')
            ->where('id', $id)
            ->update(['fooddescription' => $description]);

        return 'success';
    }

    public static function saveToyDescription($description,$id) {
        DB::table('experiencetexts')
            ->where('id', $id)
            ->update(['toydescription' => $description]);

        return 'success';
    }
}
