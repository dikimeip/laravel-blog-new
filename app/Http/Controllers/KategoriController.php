<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class KategoriController extends Controller
{
    public function index()
    {
    	$data = kategori::all();
    	return view('admin.kategori',compact('data'));
    }

    public function add(Request $request)
    {
    	dd($request);
    }
}
