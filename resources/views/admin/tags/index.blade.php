@extends('template-backend.admin')
@section ('sub-judul','Tags')
@section('content')
<h1>List of Tags</h1>
<div>
	@if(Session::has('success'))
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			{{ Session('success') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		</div>
	@endif
	<a href="{{ route('tags.create') }}" class="btn btn-sm btn-info">Tambah Tag</a>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($tags as $tag => $result)
			<tr>
				<td>{{  $tag + $tags->firstitem()  }}</td>
				<td>{{  $result->name_tag  }}</td>
				<td>
					<form action="{{ route('tags.destroy', $result->id_tag) }}" method="POST">
						<a href="{{ route('tags.edit', $result->id_tag) }}" class="btn btn-primary btn-sm">edit</a>
						@csrf
						@method('delete')
						<button href="" class="btn btn-danger btn-sm">detele</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection