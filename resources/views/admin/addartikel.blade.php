@extends('admin.dasboard')
@section('isi')
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<h1 class="text-center">TAMBAH ARTIKEL</h1>
<div class="col-md-10">
	<form action="{{route('addArtikel')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group"> 
			<label>Masukan Judul Berita</label>
			<input type="text" name="judul" class="form-control" placeholder="Masukan Judul" value="{{@old('judul')}}">
			@error('judul')<span style="color:red">{{$message}}</span>@enderror
		</div>
		<div class="form-group">
			<label>Masukan Isi Berita</label>
			<textarea name="body" class="ckeditor" id="ckeditor">{{@old('body')}}</textarea>
			@error('body')<span style="color:red">{{$message}}</span>@enderror
		</div>
		<div class="form-group">
			<label>Kategori Berita</label>
			<select name="kategori" class="form-control">
				@foreach($data as $d)
				<option value="{{$d->id}}">{{$d->nama_kategori}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Berita Populer</label>
			<select name="most" class="form-control">
				<option value="1">IYA</option>
				<option value="0">TIDAK</option>
			</select>
		</div>
		<div class="form-group">
			<label>Masukan Foto Berita</label>
			<input type="file" name="foto" class="form-control" required=""> 
		</div>
		<button type="submit" class="btn btn-info">SIMPAN</button>
	</form>
</div>
@endsection