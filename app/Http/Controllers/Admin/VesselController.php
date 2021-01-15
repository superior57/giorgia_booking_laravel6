<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Heroimage;
use App\Vesseltext;
use App\Specification;
use App\Deck;


class VesselController extends Controller
{
    public function index(){
        $heroImage = Heroimage::all();
        $texts = Vesseltext::all();
        $specification = Specification::find(1);
        $decks = Deck::all();
        return view('admin.vessel',['heroImage'=>$heroImage, 'text'=>$texts, 'specification'=>$specification, 'decks'=>$decks]);
    }

    public function saveHeroImage(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Heroimage::updateHeroImage($filename,2);
        
        return response()->json($result);
    }

    public function saveIntroduction(Request $request) {
        $introduction = $request->input('introduction');
        $result = Vesseltext::saveIntroduction($introduction,1);
        
        return response()->json($result);
    }

    public function saveInteriortext(Request $request) {
        $introduction = $request->input('introduction');
        $result = Vesseltext::saveInteriortext($introduction,1);
        
        return response()->json($result);
    }

    public function saveExteriortext(Request $request) {
        $introduction = $request->input('introduction');
        $result = Vesseltext::saveExteriortext($introduction,1);
        
        return response()->json($result);
    }

    public function saveSpecification(Request $request){
        $data = $request->all();
        $file = $data['file'];
        $filename = 'man_flag.png';
        if(request()->hasFile('file')){
            $path = Storage::putFile('public', $file);
            $filename = substr($path,7); 
        }
        
        
        $result = Specification::saveSpecification($data, $filename, 1);
        
        // $result = Heroimage::updateHeroImage($filename,2);
        
        return response()->json('success');
    }

    public function saveDeck1(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Deck::updateDeckImage($filename,1);
        
        return response()->json($result);
    }

    public function saveDeck2(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Deck::updateDeckImage($filename,2);
        
        return response()->json($result);
    }

    public function saveDeck3(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Deck::updateDeckImage($filename,3);
        
        return response()->json($result);
    }

    public function saveDeck4(Request $request){
        $file = $request->file('file');
        $path = Storage::putFile('public', $file);
        $filename = substr($path,7);
        
        $result = Deck::updateDeckImage($filename,4);
        
        return response()->json($result);
    }
}
