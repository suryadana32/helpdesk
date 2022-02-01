@extends('template-backend.admin')
@section ('sub-judul','Post Deleted')
@section('content')

<h1>List of Posts Deleted</h1>
<div>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th style="width: 3%">No</th>
				<th style="width: 20%">Judul</th>
				<th style="width: 30%">Content</th>
				<th style="width: 7%">Tags</th>
				<th style="width: 30%">Thumbnail</th>
				<th style="width: 10%">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post => $result)
			<tr>
				<td>{{  $post + $posts->firstitem()  }}</td>
				<td>{{  $result->judul  }}</td>
				<td>{{  $result->category->name_category  }}</td>
				<td>
					@foreach ($result->tags as $tag)
					{{ $tag->name_tag }}
					@endforeach
				</td>
				<td><img src="{{ URL::to($result->gambar) }}" class="img-fluid" style="width: 120px"></td>
				<td>
					<form action="{{ route('posts.terminate', $result->id_post) }}" method="POST">
						<a href="{{ route('posts.restore', $result->id_post) }}" class="btn btn-primary btn-sm">Restore</a>
						@csrf
						@method('delete')
						<button href="" class="btn btn-danger btn-sm">Deleted</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection