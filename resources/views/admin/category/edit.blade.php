@extends('template-backend.admin')
@section ('sub-judul','Edit Kategori')
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
<form action="{{  route('category.update', $category->id_category)  }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Category</label>
		<input type="text" name="name_category" class="form-control" value="{{ $category->name_category }}">
	</div>
	<div class="form-controll">
		<button class="btn btn-primary btn-block">Simpan</button>
	</div>
</form>

@endsection