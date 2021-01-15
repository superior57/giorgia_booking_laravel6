<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Crewmember extends Model
{
    protected $fillable = ['name', 'position','image', 'text', 'backgroundcolor'];

    public static function saveCrew($data,$filename,$id) {
        DB::table('crewmembers')
            ->where('id', $id)
            ->update(['name' => $data['name'],
                    'position' => $data['position'],
                    'image' => $filename,
                    'text' => $data['text'],
                    'backgroundcolor' => $data['color']
                    ]);

        return 'success';
    }

    public static function addCrew($data, $filename) {
        $newdata['name'] = $data['name'];
        $newdata['position'] = $data['position'];
        $newdata['image'] = $filename;
        $newdata['text'] = $data['text'];
        $newdata['backgroundcolor'] = $data['color'];
        DB::table('crewmembers')->insert($newdata);
        return 'success';
    }
}
