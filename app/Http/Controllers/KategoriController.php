<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KategoriRequest;
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
    	kategori::create([
    		'nama_kategori' => $request->nama,
    		'slug' => $request->slug
    	]);
    	return redirect()->back();
    }

    public function remove($id)
    {
    	$data = kategori::find($id);
    	$data->delete();
    	return redirect()->back();
    }
}
