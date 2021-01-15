<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Introduction;
use App\Crewmember;

class CrewController extends Controller
{
    public function index() {
        $heroImage = Heroimage::all();
        $crewtext = Introduction::all();
        $crewmembers = Crewmember::all();
        return view('crew',['heroImage'=>$heroImage, 'crewtext'=>$crewtext, 'crewmembers'=>$crewmembers]);
    }
}
