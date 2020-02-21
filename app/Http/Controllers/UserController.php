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

    public function detailBerita($id)
    {
        $detailBeritas = artikel::find($id);
        $getallartikel = artikel::latest()->get()->random(4);
        $kategori = kategori::all();
        return view('user.detail',compact('detailBeritas','getallartikel','kategori'));
    }

    public function CariBerita(Request $request)
    {
        $key = $request->search;
        $data = artikel::where('judul','LIKE','%'.$key.'%')->get();
        $getallartikel = artikel::latest()->get()->random(4);
        $kategori = kategori::all();
        return view('user.kategori',compact('data','getallartikel','kategori')) ;
    }

    public function CariKategori($id)
    {
        $data = artikel::where('kategori_id',$id)->get();
        $getallartikel = artikel::latest()->get()->random(4);
        $kategori = kategori::all();
        return view('user.kategori',compact('data','getallartikel','kategori')) ;
    }
}
