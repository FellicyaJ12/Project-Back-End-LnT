<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function createWebsite(){
        return view('create');
    }

    public function website(Request $request){
        Website::create([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'NoTelp' => $request->NoTelp,
        ]);

        

        return redirect('/');
    }

    public function show(){
        $website = Website::all();
        return view('welcome', compact('website'));
    }
}
