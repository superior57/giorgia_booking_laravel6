<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Heroimage;
use App\Introduction;
use App\Crewmember;

class CrewController extends Controller
{
    public function index() {
        $heroImage = Heroimage::all();
        $introduction = Introduction::all();
        $crewmembers = Crewmember::all();
        return view('admin.crew',['heroImage'=>$heroImage, 'crewmembers'=>$crewmembers, 'introduction'=>$introduction]);
    }

    public function saveHeroImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Heroimage::updateHeroImage($filename,4);
        
        return response()->json($result);
    }

    public function saveCrew(Request $request){
        $data = $request->all();
        $file = $data['file'];
        $filename = $data['filename'];
        $id=$data['num'];
        if(request()->hasFile('file')){
            $path = Storage::putFile('public', $file);
            $filename = substr($path,7); 
        }
        
        $result = Crewmember::saveCrew($data, $filename, $id);
        
        // $result = Heroimage::updateHeroImage($filename,2);
        
        return response()->json('success');
    }

    public function addCrew(Request $request) {
        $data = $request->all();
        $file = $data['file'];
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Crewmember::addCrew($data,$filename);
        return response()->json($result);
    }
}
