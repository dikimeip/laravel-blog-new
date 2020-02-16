@extends('admin.dasboard')
@section('isi')
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<h1 class="text-center">UBAH ARTIKEL</h1>
<div class="col-md-10">
	<form action="{{route('artikelRubah',$artikel->id)}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group"> 
			<label>Masukan Judul Berita</label>
			<input type="text" name="judul" class="form-control" placeholder="Masukan Judul" value="{{$artikel->judul}}">
			@error('judul')<span style="color:red">{{$message}}</span>@enderror
		</div>
		<div class="form-group">
			<label>Masukan Isi Berita</label>
			<textarea name="body" class="form-control" style="height: 200px">{{$artikel->body}}</textarea>
			@error('body')<span style="color:red">{{$message}}</span>@enderror
		</div>
		<div class="form-group">
			<label>Kategori Berita</label>
			<select name="kategori" class="form-control">
				<option value="{{$artikel->id}}">{{$artikel->kategori->nama_kategori}}</option>
				@foreach($data as $d)
				<option value="{{$d->id}}">{{$d->nama_kategori}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Berita Populer</label>
			<select name="most" class="form-control">
				<option>{{$artikel->most}}</option>
				<option>IYA</option>
				<option>TIDAK</option>
			</select>
		</div>
		<div class="form-group">
			<label>Masukan Foto Berita</label>
			<br>
			<img src="{{asset('image/'.$artikel->gambar)}}" style="width: 200px">
			<input type="file" name="foto" class="form-control"> 
		</div>
		<button type="submit" class="btn btn-info">SIMPAN</button>
	</form>
</div>
@endsection