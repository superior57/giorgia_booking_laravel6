<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Contactmethod;

class ContactController extends Controller
{
    public function index(){
        $heroImage = Heroimage::all();
        $contactMethods = Contactmethod::all();
        return view('contact',['heroImage'=>$heroImage,'contactMethods'=>$contactMethods]);
    }
}
