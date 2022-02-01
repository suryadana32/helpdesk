@extends('template-backend.admin')
@section ('sub-judul','Tambah Post')
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error }}
		</div>
	@endforeach
@endif

@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		{{ Session('success') }}
	</div>
@endif

<form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
	@csrf
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-control" name="id_category">
			@foreach ($categories as $category => $result)
			<option value="{{ $result->id_category }}">
				{{ $result->name_category }}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Tags</label>
		<select class="form-control select2" multiple="" name="tags[]">
			@foreach ($tags as $tag => $result)
			<option value="{{ $result->id_tag }}">{{ $result->name_tag }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Konten</label>
		<textarea type="text" name="content" class="form-control" id="content" style="resize: none ">
			
		</textarea>
	</div>
	<div class="form-group">
		<label>Thumbnail</label>
		<input type="file" name="gambar" class="form-control">
	</div>
	<div class="form-controll">
		<button class="btn btn-primary btn-block">Simpan</button>
	</div>
</form>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection