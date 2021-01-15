<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contactmethod extends Model
{
    protected $fillable = ['address', 'phone','email','twitter','facebook','instagram'];

    public static function contactSave($data) {
        DB::table('contactmethods')
            ->where('id', 1)
            ->update(['address' => $data['address'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'facebook' => $data['facebook'],
                    'twitter' => $data['twitter'],
                    'instagram' => $data['instagram']
                    ]);

        return 'success';
    }
}
