<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vesseltext extends Model
{
    protected $fillable = ['title', 'intro','interiortitle', 'interior','exteriortitle', 'exterior', 'specification'];

    public static function saveIntroduction($introduction,$id) {
        DB::table('vesseltexts')
            ->where('id', $id)
            ->update(['intro' => $introduction]);

        return 'success';
    }

    public static function saveInteriortext($introduction,$id) {
        DB::table('vesseltexts')
            ->where('id', $id)
            ->update(['interior' => $introduction]);

        return 'success';
    }

    public static function saveExteriortext($introduction,$id) {
        DB::table('vesseltexts')
            ->where('id', $id)
            ->update(['exterior' => $introduction]);

        return 'success';
    }
}
