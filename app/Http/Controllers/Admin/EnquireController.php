<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Heroimage;


class EnquireController extends Controller
{
    public function index(){
        $heroImage = Heroimage::all();
        return view('admin.enquire',['heroImage'=>$heroImage]);
    }

    public function saveHeroImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Heroimage::updateHeroImage($filename,5);
        
        return response()->json($result);
    }
}
