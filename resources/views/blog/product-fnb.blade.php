<html>
	@include('template-blog.source')
	<body>
		@include('template-blog.header')
		<!---------------Banner Section--------->
		<section id="navigasi">
			<div class="container">
				<nav aria-label="breadcrumb" class="sparator">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Library</a></li>
				    <li class="breadcrumb-item active" aria-current="page">FnB</li>
				  </ol>
				</nav>
				<div class="row">
					<div class="col-md-12">
						<form action="{{ route('blog.search') }}" autocomplete="off" class="header__form search">
							@csrf
					        <input type="text" autocomplete="off" class="search__input2 js__search-input o__ltr" placeholder="Mencari jawaban..." tabindex="1" name="search" value="">
					        <div class="search_icons">
					          <button type="submit" class="search__submit o__ltr"></button>
					          <a class="search__clear-text__icon">
					          </a>
					      	</div>
					  	</form>
					</div>
				</div>
			</div>
		</section>
		<section id="informasi-layer" class="kategory-bg">
			<div class="container">
				<div class="col-md-12">
					<h2 class="title-informasi">Hardware</h2>
					<div class="box-informasi align-items-center">
						<div class="row">
							<div class="col-md-10">
								<a data-bs-toggle="collapse" href="#fitur1" role="button" aria-expanded="false" aria-controls="fitur1">
									<h2 class="custom-block-title2">Bluetooth Printer</h2>
								</a>
								
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#fitur1" role="button" aria-expanded="false" aria-controls="fitur1">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="fitur1">
							@foreach( $post as $result)
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">{{ $result->judul }}</h3>
								</a>
							</div>
							<hr>
							@endforeach
						</div>
					</div>
					<div class="box-informasi align-items-center">
						<div class="row">
							<div class="col-md-10">
								<a data-bs-toggle="collapse" href="#fitur2" role="button" aria-expanded="false" aria-controls="fitur2">
									<h2 class="custom-block-title2">LAN Printers Throuble Shot and Setting</h2>
								</a>
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#fitur2" role="button" aria-expanded="false" aria-controls="fitur2">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="fitur2">
							@foreach( $tags as $result)
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">{{ $result->category->name_category }}</h3>
								</a>
							</div>
							<hr>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<h2 class="title-informasi">Apps</h2>
					<div class="box-informasi align-items-center">
						<div class="row">
							<div class="col-md-10">
								<a data-bs-toggle="collapse" href="#fitur1" role="button" aria-expanded="false" aria-controls="fitur1">
									<h2 class="custom-block-title2">Printers Throuble Shot and Setting</h2>
								</a>
								
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#fitur1" role="button" aria-expanded="false" aria-controls="fitur1">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="fitur1">
							@foreach( $post as $result)
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">{{ $result->judul }}</h3>
								</a>
							</div>
							<hr>
							@endforeach
						</div>
					</div>
					<div class="box-informasi align-items-center">
						<div class="row">
							<div class="col-md-10">
								<a data-bs-toggle="collapse" href="#fitur2" role="button" aria-expanded="false" aria-controls="fitur2">
									<h2 class="custom-block-title2">Printers Throuble Shot and Setting</h2>
								</a>
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#fitur2" role="button" aria-expanded="false" aria-controls="fitur2">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="fitur2">
							@foreach( $tags as $result)
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">{{ $result->category->name_category }}</h3>
								</a>
							</div>
							<hr>
							@endforeach
						</div>
					</div>
					<div class="box-informasi align-items-center">
						<div class="row">
							<div class="col-md-10">
								<a data-bs-toggle="collapse" href="#fitur3" role="button" aria-expanded="false" aria-controls="fitur3">
									<h2 class="custom-block-title2">Printers Throuble Shot and Setting</h2>
								</a>
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#fitur3" role="button" aria-expanded="false" aria-controls="fitur3">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="fitur3">
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-12">
					<h2 class="title-informasi">API</h2>
					<div class="box-informasi align-items-center">
						<div class="row">
							<div class="col-md-2">
								<div class="custom-block-kategori">
									<div class="align-items-center">
										<i class="fas fa-money-check "></i>
									</div>
									
								</div>
							</div>
							<div class="col-md-8">
								<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum tempor ultrices. Praesent vitae fermentum augue. Sed convallis laoreet nulla, sit amet congue justo sagittis eget. Proin vitae lectus turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque in urna sed tortor convallis congue ut vitae elit. Morbi ac felis posuere, pretium erat sed, eleifend libero. Nulla facilisi. Duis pellentesque porttitor lacus, varius dapibus mi faucibus id. </p>
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="collapseExample3">
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="blog.html">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!---------------------Footer section-------------------->
		@include('template-blog.footer')
	</body>
</html>