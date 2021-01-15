<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Specification extends Model
{
    protected $fillable = ['length', 'beam', 'draft', 'built', 'builder', 'engines', 'flag', 'hull', 'hull_type', 'cabins', 'guests', 'crew', 'speed', 'range'];

    public static function saveSpecification($data,$flagname,$id) {
        DB::table('specifications')
            ->where('id', $id)
            ->update(['length' => $data['length'],
                    'beam' => $data['beam'],
                    'draft' => $data['draft'],
                    'built' => $data['built'],
                    'builder' => $data['builder'],
                    'engines' => $data['engines'],
                    'flag' => $flagname,
                    'hull' => $data['hull'],
                    'hull_type' => $data['hull_type'],
                    'cabins' => $data['cabins'],
                    'guests' => $data['guests'],
                    'crew' => $data['crew'],
                    'speed' => $data['speed'],
                    'range' => $data['range']]);

        return 'success';
    }
}
