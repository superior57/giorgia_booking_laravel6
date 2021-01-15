<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Experiencetext;
use App\Food;
use App\Toy;
use App\Destination;

class ExperienceController extends Controller
{
    public function index(){
        $heroImage = Heroimage::all();
        $texts = Experiencetext::all();
        $foods = Food::all();
        $toys = Toy::all();
        $destinations=Destination::all();
        return view('experience',['heroImage'=>$heroImage,'texts'=>$texts,'foods'=>$foods,'toys'=>$toys,'destinations'=>$destinations]);
    }
}
