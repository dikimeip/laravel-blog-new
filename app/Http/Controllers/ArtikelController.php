<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;

class ArtikelController extends Controller
{
    public function index()
    {
    	$data = artikel::all();
    	//dd($data);
    	return view('admin.artikel',compact('data')) ;
    }
}
