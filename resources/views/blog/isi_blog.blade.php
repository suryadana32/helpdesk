<html>
	@include('template-blog.source')
	<body>
		@include('template-blog.header')
		<!---------------Banner Section--------->
		<section id="navigasi" class="kategory-bg">
			<div class="container">
				<nav aria-label="breadcrumb" class="brd-sparator">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Library</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Hardware</li>
				  </ol>
				</nav>
			</div>
		</section>
		<section id="title-content" class="kategory-bg">
			@foreach ( $post as $result )
			<div class="container">
				<div class="col-md-12">
					<h2 class="title-informasi">{{ $result->judul }}</h2>
				</div>
			</div>
		</section>
		<section id="content" class="kategory-bg">
			<div class="container">
				<div class="row content-bg">
					<div class="col-md-8">
						<div class="content-blog">
							<p>
								<p style="float: left;">Writen by <b> : {{ $result->users->name }}</b></p>
								<p style="float: right;"><b> {{ $result->created_at }}</b></p>
							</p>
							<img src="{{ URL::to($result->gambar) }}" class="card-img-top image-card" alt="Cinque Terre">
							{!! $result->content !!}
							<br>
							<h3>Cara Setting Bluetooth Printer</h3>
							<br>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum convallis orci, a tincidunt leo accumsan quis. Nullam pharetra maximus varius. In iaculis magna nisl, eu maximus magna efficitur id. Suspendisse viverra nec eros ac scelerisque. Quisque nec dolor sit amet ante tincidunt semper. Phasellus commodo neque risus, vitae posuere nunc egestas nec. Sed convallis justo consectetur lacus sollicitudin molestie. Cras hendrerit dolor sit amet magna vestibulum maximus. In volutpat ante fermentum quam porttitor, in pellentesque dui tristique</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum convallis orci, a tincidunt leo accumsan quis. Nullam pharetra maximus varius. In iaculis magna nisl, eu maximus magna efficitur id. Suspendisse viverra nec eros ac scelerisque. Quisque nec dolor sit amet ante tincidunt semper. Phasellus commodo neque risus, vitae posuere nunc egestas nec. Sed convallis justo consectetur lacus sollicitudin molestie. Cras hendrerit dolor sit amet magna vestibulum maximus. In volutpat ante fermentum quam porttitor, in pellentesque dui tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum convallis orci, a tincidunt leo accumsan quis. Nullam pharetra maximus varius. In iaculis magna nisl, eu maximus magna efficitur id. Suspendisse viverra nec eros ac scelerisque. Quisque nec dolor sit amet ante tincidunt semper. Phasellus commodo neque risus, vitae posuere nunc egestas nec. Sed convallis justo consectetur lacus sollicitudin molestie. Cras hendrerit dolor sit amet magna vestibulum maximus. In volutpat ante fermentum quam porttitor, in pellentesque dui tristique</p>
							<img src="https://blog.hellobill.id/wp-content/uploads/2021/12/tips-menghabiskan-cuti.png" class="card-img-top image-card" alt="Cinque Terre">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum convallis orci, a tincidunt leo accumsan quis. Nullam pharetra maximus varius. In iaculis magna nisl, eu maximus magna efficitur id. Suspendisse viverra nec eros ac scelerisque. Quisque nec dolor sit amet ante tincidunt semper. Phasellus commodo neque risus, vitae posuere nunc egestas nec. Sed convallis justo consectetur lacus sollicitudin molestie. Cras hendrerit dolor sit amet magna vestibulum maximus. In volutpat ante fermentum quam porttitor, in pellentesque dui tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum convallis orci, a tincidunt leo accumsan quis. Nullam pharetra maximus varius. In iaculis magna nisl, eu maximus magna efficitur id. Suspendisse viverra nec eros ac scelerisque. Quisque nec dolor sit amet ante tincidunt semper. Phasellus commodo neque risus, vitae posuere nunc egestas nec. Sed convallis justo consectetur lacus sollicitudin molestie. Cras hendrerit dolor sit amet magna vestibulum maximus. In volutpat ante fermentum quam porttitor, in pellentesque dui tristique</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-blog">
							<div class="article-style">
								<h3>Other Category Article</h3>
								<hr>
								@foreach($category as $result)
								<a href="{{ route('blog.category', $result->slug) }}">
									<h4>{{ $result->name_category }}</h4>
									<hr>
								</a>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row content-bg">
					<div class="col-md-12">
						<h3 align="center">Did this help your issue?</h3>
						<div align="center">
							<br>
							<button type="button" class="btn btn-outline-danger">No</button>
							<button type="button" class="btn btn-outline-success">Yes</button>
							<br>
							<p>  </p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</section>
		<!---------------------Footer section-------------------->
		@include('template-blog.footer')
	</body>
</html>