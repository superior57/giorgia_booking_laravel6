<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Heroimage;
use App\Contactmethod;

class ContactController extends Controller
{
    public function index(){
        $heroImage = Heroimage::all();
        $contactmethod = Contactmethod::all();
        return view('admin.contact',['heroImage'=>$heroImage,'contactmethod'=>$contactmethod]);
    }

    public function contactSave(Request $request) {
        $data = $request->all();
        $result = Contactmethod::contactSave($data);
        return response()->json($result);
    }
}
