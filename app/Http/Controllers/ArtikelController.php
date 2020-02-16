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

    public function cari(Request $request)
    {
        $key = $request->cari;
        $data = artikel::where('judul','LIKE','%'.$key.'%')->get();
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

    public function detail($id)
    {
        $data = artikel::find($id);
        return view('admin.detailArtikel',compact('data')) ;
    }

    public function update($id)
    {
        $artikel = artikel::find($id);
        $data=kategori::all();
        return view('admin.editArtikel',compact('data','artikel'));
    }

    public function changeArtikel(ArtikelRequest $request,$id)
    {
        $gambar = $request->file('foto');
        if (!$gambar) {
           $data = artikel::find($id);
           $data->update([
            'judul' => $request->judul,
            'body' => $request->body,
            'most' => $request->most,
            'kategori_id' => $request->kategori,
           ]);
           Session::flash('success','Berhasil Ubah Data');
           return redirect()->route('artikelPage') ;
        } else {
            $gambar = $request->file('foto');
            $org = $gambar->getClientOriginalName();
            $path = "image";
            $gambar->move($path,$org);
            $data = artikel::find($id);
            $data->update([
             'judul' => $request->judul,
             'body' => $request->body,
             'gambar' => $org,
             'most' => $request->most,
             'kategori_id' => $request->kategori,
            ]);
            Session::flash('success','Berhasil Ubah Data');
            return redirect()->route('artikelPage') ;
        }
    }

    public function destroy($id)
    {
        $data = artikel::find($id);
        $data->delete();
        Session::flash('success','Berhasil Ubah Data');
        return redirect()->route('artikelPage') ;
    }
}
