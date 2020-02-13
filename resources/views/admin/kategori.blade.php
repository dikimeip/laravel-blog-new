@extends('admin.dasboard')
@section('isi')
<h1 class="text-center">KATEGORI PAGE</h1>
<div class="col-md-6">
	<table class="table table-bordered">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>SLUG</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $d=>$n)
	<tr>
		<td>{{$d+1}}</td>
		<td>{{$n->nama_kategori}}</td>
		<td>{{$n->slug}}</td>
		<td>
			<a href="" class="btn btn-danger btn-sm">HAPUS</a>
		</td>
	</tr>
	@endforeach 
</table>
</div>

@endsection