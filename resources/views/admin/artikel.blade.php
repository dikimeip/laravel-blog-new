@extends('admin.dasboard')
@section('isi')
<h1 class="text-center">ARTIKEL PAGE</h1>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('addArtikel')}}" class="btn btn-primary btn-sm">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form action="{{route('artikelCari')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Judul ">
			</div>
		</form>
	</div>
</div>
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
			<a onclick="return confirm('hapus data..?')" href="{{route('artikelDestroy',$t->id)}}" class="btn btn-warning btn-sm">HAPUS</a>
			<a href="{{route('artikelUpdate',$t->id)}}" class="btn btn-danger btn-sm">EDIT</a>
			<a href="{{route('artikelDetail',$t->id)}}" class="btn btn-primary btn-sm">DETAIL</a>
		</th>
	</tr>
	@endforeach
</table>
@endsection