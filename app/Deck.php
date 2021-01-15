<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Deck extends Model
{
    protected $fillable = ['image'];

    public static function updateDeckImage($filename, $id) {
        DB::table('decks')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return 'success';
    }
}
