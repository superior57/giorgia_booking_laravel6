<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Introduction;
use App\Interior;
use App\Exterior;
use App\Specification;

class WelcomeController extends Controller
{
    public function index() {
        $heroImage = Heroimage::all();
        $introduction = Introduction::all();
        $interiors = Interior::all();
        $exteriors = Exterior::all();
        $specification = Specification::find(1);
        return view('welcome',['heroImage'=>$heroImage, 'introduction'=>$introduction, 'interiors'=>$interiors, 'exteriors'=>$exteriors, 'specification'=>$specification]);
    }
}
