@extends('template-backend.admin')
@section ('sub-judul','Edit Tag')
@section('content')

<form action="{{  route('tags.update', $tag->id_tag)  }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Category</label>
		<input type="text" name="name_tag" class="form-control" value="{{ $tag->name_tag }}">
	</div>
	<div class="form-controll">
		<button class="btn btn-primary btn-block">Simpan</button>
	</div>
</form>

@endsection