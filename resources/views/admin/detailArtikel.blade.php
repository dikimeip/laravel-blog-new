@extends('admin.dasboard')
@section('isi')
<h1 class="text-center">DETAIL ARTIKEL</h1>
<br>
<p><b>JUDUL BERITA</b></p>
<p>{{$data->judul}}</p>
<p><b>BODY BERITA</b></p>
<p>{{$data->body}}</p>
<p><b>TANGGAL BERITA</b></p>
<p>{{$data->tanggal}}</p>
<p><b>POPULER BERITA</b></p>
<p>{{$data->most}}</p>
<p><b>FOTO BERITA</b></p>
<p><img src="{{asset('image/'.$data->gambar)}}" style="width: 200px"></p>
@endsection