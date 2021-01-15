<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Homeheroimage;
use App\Introduction;
use App\Interior;
use App\Exterior;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $heroImages = Homeheroimage::all();
        $introduction = Introduction::all();
        $interiors = Interior::all();
        $exteriors = Exterior::all();
        return view('admin.dashboard',['heroImages'=>$heroImages,'introduction'=>$introduction,'interiors'=>$interiors,'exteriors'=>$exteriors]);
    }

    public function saveHeroImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $id=$request->num;
        $filename = substr($path,7);
        
        $result = Homeheroimage::updateHeroImage($filename,$id);
        
        return response()->json($result);
    }

    public function addHero(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Homeheroimage::addHeroImage($filename);
        return response()->json($result);
    }
 
    public function saveIntroduction(Request $request) {
        $introduction = $request->input('introduction');
        $result = Introduction::saveIntroduction($introduction,1);
        
        return response()->json($result);
    }

    public function saveInterior(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $id=$request->num;
        $filename = substr($path,7);

        $result = Interior::updateInteriorImage($filename,$id);
        
        return response()->json($result);
    }

    public function addInterior(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Interior::addInteriorImage($filename);
        return response()->json($result);
    }

    public function saveExterior(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $id=$request->num;
        $filename = substr($path,7);

        $result = Exterior::updateExteriorImage($filename,$id);
        
        return response()->json($result);
    }


    public function addExterior(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Exterior::addExteriorImage($filename);
        return response()->json($result);
    }
    
    public function saveFoodImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Introduction::updateFoodImage($filename,1);
        
        return response()->json($result);
    }

    public function saveToyImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Introduction::updateToyImage($filename,1);
        
        return response()->json($result);
    }

    public function saveLocationImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Introduction::updateLocationImage($filename,1);
        
        return response()->json($result);
    }
}