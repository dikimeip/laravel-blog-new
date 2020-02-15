<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori;
use App\Http\Requests\ArtikelRequest;
use Session;

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
        $data=kategori::all();
    	return view('admin.addartikel',compact('data'));
    }

    public function store(ArtikelRequest $request)
    {
    	$gambar = $request->file('foto');
        $org = $gambar->getClientOriginalName();
        $path = "image";
        $gambar->move($path,$org);

        artikel::create([
            'judul' => $request->judul,
            'body' => $request->body,
            'gambar' => $org,
            'tanggal' => date('Y-m-d'),
            'recent' => "no",
            'most' => $request->most,
            'kategori_id' => $request->kategori,
        ]);

        Session::flash('success','Berhasil Tambah Data');
        return redirect()->route('artikelPage');
    }
}
