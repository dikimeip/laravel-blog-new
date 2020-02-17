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
    	return view('user.dasboard',compact('kategori','limitnew')) ;
    }
}
