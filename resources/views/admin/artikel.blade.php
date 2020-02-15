@extends('admin.dasboard')
@section('isi')
<h1 class="text-center">ARTIKEL PAGE</h1>
<a href="{{route('addArtikel')}}" class="btn btn-primary btn-sm">TAMBAH</a>
<br>
@if(Session::has('success'))
<div class="alert alert-success">
	<p>{{Session::get('success')}}</p>
</div>	
@endif
<br><br>
<table class="table table-hover">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Kategori</th>
		<th>Gambar</th>
		<th>Tanggal</th>
		<th>aksi</th>
	</tr>
	@foreach($data as $d=>$t)
	<tr>
		<th>{{$d+1}}</th>
		<th>{{$t->judul}}</th>
		<th>{{$t->kategori->nama_kategori}}</th>
		<th><img style="width: 50px" src="{{asset('image/'.$t->gambar)}}"></th>
		<th>{{$t->tanggal}}</th>
		<th>
			<a href="" class="btn btn-warning btn-sm">HAPUS</a>
			<a href="" class="btn btn-danger btn-sm">EDIT</a>
			<a href="" class="btn btn-primary btn-sm">DETAIL</a>
		</th>
	</tr>
	@endforeach
</table>
@endsection