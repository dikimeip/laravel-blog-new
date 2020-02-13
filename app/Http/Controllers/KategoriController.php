<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KategoriRequest;
use App\kategori;
use Session;

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
    	Session::flash('success','Success Tambah data');
    	return redirect()->back();
    }

    public function remove($id)
    {
    	$data = kategori::find($id);
    	$data->delete();
    	Session::flash('success','Success Hapus data');
    	return redirect()->back();
    }
}
