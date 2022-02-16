<html>
	@include('template-blog.source')
	<body>
		@include('template-blog.header')
		<!---------------Banner Section--------->
		<section>
			<div class="container">
				<nav aria-label="breadcrumb" class="sparator">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Library</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{{ $judul }}</li>
				  </ol>
				</nav>
				<div class="row">
					<div class="col-md-12">
						@foreach ($tempek as $t)
						<h2>{{ $t->name_category }}</h2>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				@foreach ($categories as $result)
					<div class="col-md-12">
						<div class="card card-design">
							<a href="{{ route('blog.isi', $result->slug_post) }}" ><h4 class="card-title more-info">{{  $result->judul  }}</h4></a>
							<img src="{{ URL::to($result->gambar) }}" alt="" class="card-img-top image-card" href="" style="max-width: 80%; height: auto; display: block; margin: 0 auto;">
							<div class="col-md-12">
								<p><b>Writen by</b> :{{ $result->name }}<b></b></p>
							</div>
							<p class="card-text">{!! Str::limit($result->content, 500) !!}</p>
							<div class="row">
								<div class="col-md-12">
									<a href="{{ route('blog.isi', $result->slug_post) }}"><p><b class="more-info">More info</b></p></a>
									<div  class="fb-share-button" data-href="{{ Request::url() }}" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fcategories%2Fhardware&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</section>
		<!---------------------Footer section-------------------->
		@include('template-blog.footer')
	</body>
</html>

