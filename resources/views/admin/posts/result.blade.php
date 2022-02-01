@extends('template-backend.admin')
@section ('sub-judul','Post')
@section('content')


<h1>List of Result Posts</h1>
<div class="">
	<div class="row">
		<div class="col-md-2">
			<a href="{{ route('posts.index') }}" class="btn btn-sm btn-info">Back</a>
		</div>
		<div class="col-md-6">
			
		</div>
		<div class="col-md-4">
			<div class="input-group">
			  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="width: 200px"/>
			  <button type="button" class="btn btn-outline-primary">search</button>
			</div>
		</div>
	</div>
	<div class="row">
		<p>
			<br>
		</p>
	</div>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th style="width: 4%">No</th>
				<th style="width: 20%">Judul</th>
				<th style="width: 30%">Content</th>
				<th style="width: 10%">Tags</th>
				<th style="width: 16%">Author</th>
				<th style="width: 12%">Thumbnail</th>
				<th style="width: 8%">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $post => $result)
			<tr>
				<td>{{  $post + $data->firstitem()  }}</td>
				<td>{{  $result->judul  }}</td>
				<td>{{  $result->category->name_category  }}</td>
				<td>
					@foreach ($result->tags as $tag)
					<ul>
						<h6><span class="badge badge-info">{{ $tag->name_tag }}</span></h6>
					</ul>
					@endforeach
				</td>
				<td>{{ $result->users->name }}</td>
				<td><img src="{{ URL::to($result->gambar) }}" class="img-fluid" style="width: 120px"></td>
				<td>
					<form action="{{ route('posts.destroy', $result->id_post) }}" method="POST">
						<a href="{{ route('posts.edit', $result->id_post) }}" class="btn btn-primary btn-sm">edit</a>
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