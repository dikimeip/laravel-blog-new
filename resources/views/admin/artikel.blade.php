@extends('admin.dasboard')
@section('isi')
<h1 class="text-center">ARTIKEL PAGE</h1>
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
	</tr>
	@endforeach
</table>
@endsection