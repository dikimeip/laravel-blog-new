@extends('admin.dasboard')
@section('isi')
<h1 class="text-center">KATEGORI PAGE</h1>
<br>
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal">TAMBAH</button>
<br>
<br>
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

<div id="modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<p>TAMBAH KATEGORI</p>
			</div>
			<div class="modal-body">
				<form action="{{route('addKategori')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label>MASUKAN NAMA KATEGORI</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>MASUKAN SLUG KATEGORI</label>
						<input type="text" name="slug" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary btn-sm">SIMPAN</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection