@extends('template-backend.admin')
@section ('sub-judul','Kategori')
@section('content')
<h1>Categories</h1>
<div>
	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{ Session('success') }}
		</div>
	@endif
	<a href="{{  route('category.create')  }}" class="btn btn-sm btn-info">Tambah Kategori</a>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category => $result)
			<tr>
				<td>{{  $category + $categories->firstitem()  }}</td>
				<td>{{  $result->name_category  }}</td>
				<td>
					
					<form action="{{ route('category.destroy', $result->id_category) }}" method="POST">
						<a href="{{ route('category.edit', $result->id_category) }}" class="btn btn-primary btn-sm">edit</a>
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