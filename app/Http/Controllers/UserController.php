<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori;

class UserController extends Controller
{
    public function index()
    {
    	$kategori = kategori::all();
    	$limitnew = artikel::latest()->get()->random(2);
    	$allnew = artikel::latest()->limit(6)->get();
    	$getmost = artikel::where('most','IYA')->get()->random(1);
    	$getmostall = artikel::where('most','IYA')->limit(6)->get();
    	$getallartikel = artikel::latest()->get()->random(4);
    	return view('user.dasboard',compact('kategori','limitnew','allnew','getmost','getmostall','getallartikel')) ;
    }
}
