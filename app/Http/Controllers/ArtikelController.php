<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\Http\Requests\ArtikelRequest;

class ArtikelController extends Controller
{
    public function index()
    {
    	$data = artikel::all();
    	//dd($data);
    	return view('admin.artikel',compact('data')) ;
    }

    public function add()
    {
    	return view('admin.addartikel');
    }

    public function store(ArtikelRequest $request)
    {
    	dd($request);
    }
}
