<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Heroimage;
use App\Food;
use App\Toy;
use App\Introduction;
use App\Experiencetext;
use App\Destination;

class ExperienceController extends Controller
{
    public function index() {
        $heroImage = Heroimage::all();
        $foods = Food::all();
        $toys = Toy::all();
        $introduction = Introduction::all();
        $experiencetext = Experiencetext::all();
        $destinations = Destination::all();
        return view('admin.experience',['heroImage'=>$heroImage,'foods'=>$foods,'toys'=>$toys,'introduction'=>$introduction,'experiencetext'=>$experiencetext,'destinations'=>$destinations]);
    }

    public function saveHeroImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Heroimage::updateHeroImage($filename,3);
        
        return response()->json($result);
    }

    public function saveFood(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $id=$request->num;
        $filename = substr($path,7);

        $result = Food::updateFoodImage($filename,$id);
        
        return response()->json($result);
    }

    public function addFood(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Food::addFoodImage($filename);
        return response()->json($result);
    }

    public function saveFoodDescription(Request $request) {
        $food_description = $request->input('food_description');
        $result = Experiencetext::saveFoodDescription($food_description,1);
        
        return response()->json($result);
    }

    public function saveToy(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $id=$request->num;
        $filename = substr($path,7);

        $result = Toy::updateToyImage($filename,$id);
        
        return response()->json($result);
    }

    public function addToy(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Toy::addToyImage($filename);
        return response()->json($result);
    }

    public function saveToyDescription(Request $request) {
        $toy_description = $request->input('toy_description');
        $result = Experiencetext::saveToyDescription($toy_description,1);
        
        return response()->json($result);
    }

    public function saveDestination(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $id=$request->num;
        $filename = substr($path,7);

        $result = Destination::updateDestinationImage($filename,$id);
        
        return response()->json($result);
    }

    public function addDestination(Request $request) {
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        $result = Destination::addDestinationImage($filename);
        return response()->json($result);
    }
}
