@extends('template-backend.admin')
@section ('sub-judul','Edit Post')
@section('content')

<form action="{{ route('posts.update', $post->id_post) }}" enctype="multipart/form-data" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control" value="{{ $post->judul }}">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-control" name="id_category">
			@foreach ($categories as $category => $result )
			<option value="{{ $result->id_category }}"
				@if ($post->id_category == $result->id_category)
					selected
				@endif
				>{{ $result->name_category }}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Tags</label>
		<select class="form-control select2" multiple="" name="tags[]">
			@foreach ($tags as $tag)
			<option value="{{ $tag->id_tag }}" 
				@foreach ($post->tags as $value)
					@if ($tag->id_tag == $value->id_tag)
						selected
					@endif
				@endforeach
				>{{ $tag->name_tag }}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Konten</label>
		<textarea type="text" name="content" class="form-control" value="" id="content" style="resize: none ">
			{{ $post->content }}
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
    CKEDITOR.replace( 'content', {
    	filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token'=> csrf_token() ]) }}",
    	filebrowserUploadMethod: 'form'
    } );
</script>

@endsection