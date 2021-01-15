<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Interior;
use App\Exterior;
use App\Vesseltext;
use App\Specification;
use App\Deck;

class VesselController extends Controller
{
    public function index() {
        $heroImage = Heroimage::all();
        $interiors = Interior::all();
        $exteriors = Exterior::all();
        $texts = Vesseltext::all();
        $specification = Specification::find(1);
        $decks = Deck::all();
        return view('vessel',['heroImage'=>$heroImage, 'interiors'=>$interiors, 'exteriors'=>$exteriors, 'text'=>$texts, 'specification'=>$specification, 'decks'=>$decks]);
    }
}
