<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroimage;
use App\Introduction;

class BookingController extends Controller
{
    public function index(){
        $heroImage = Heroimage::all();
        $bookingtitle = Introduction::all();
        return view('booking',['heroImage'=>$heroImage,'bookingtitle'=>$bookingtitle]);
    }
}
