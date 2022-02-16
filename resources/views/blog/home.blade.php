<html>
	@include('template-blog.source')
	<body>
		@include('template-blog.header')
		<!---------------Banner Section--------->
		<section id="banner">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 order-md-1">
						<img class="img-fluid img-banner" alt="banner" src="{{ url('depend/images/banner-1.png') }}">
					</div>
					<div class="col-md-7 banner-text order-md-0">
						<p class="promo-title">Helpdesk dari HelloBill</p>
						<p>Help Desk for Helping User HelloBill and get guidance for using HelloBill application, 
						You also can download the manual Book</p>
						<p>Butuh bantuan?</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="{{ route('blog.search') }}" autocomplete="off" class="header__form search">
							@csrf
					        <input type="text" autocomplete="off" class="search__input js__search-input o__ltr" placeholder="Mencari jawaban..." tabindex="1" name="search" value="">
					        <div class="search_icons">
					          <button type="submit" class="search__submit o__ltr"></button>
					          <!--<img src="images/finder.png" >-->
					      	</div>
					  	</form>
					  	
					</div>
				</div>
			</div>
		</section>
		<section id="kategori-informasi" class="kategory-bg">
			<div class="container">
				<div class="custom-blocks">
					<div class="row">
						<div class="col-md-4 column">
							<a class="custom-block-kategori" href="{{ route('product.fnb') }}">
								<div class="custom-block-icon">
									<img src="{{ url('depend/images/fnb-logo.png') }}">
								</div>
								<h3 class="custom-block-title">FnB</h3>
							</a>
						</div>
						<div class="col-md-4 column">
							<a class="custom-block-kategori" href="{{ route('product.retail') }}">
								<div class="custom-block-icon">
									<img src="{{ url('depend/images/retail-logo.png') }}">
								</div>
								<h3 class="custom-block-title">Retail</h3>
							</a>
						</div>
						<div class="col-md-4 column">
							<a class="custom-block-kategori" href="#">
								<div class="custom-block-icon">
									<img src="{{ url('depend/images/beauty-logo.png') }}">
								</div>
								<h3 class="custom-block-title">Beauty and Services</h3>
							</a>
						</div>
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
							<div class="col-md-2">
								<div class="custom-block-kategori">
									<div class="align-items-center">
										<i class="fas fa-print"></i>
									</div>
									
								</div>
							</div>
							<div class="col-md-8">
								<a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
								<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum tempor ultrices. Praesent vitae fermentum augue. Sed convallis laoreet nulla, sit amet congue justo sagittis eget. Proin vitae lectus turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque in urna sed tortor convallis congue ut vitae elit. Morbi ac felis posuere, pretium erat sed, eleifend libero. Nulla facilisi. Duis pellentesque porttitor lacus, varius dapibus mi faucibus id. </p>
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="collapseExample1">
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
						</div>
					</div>
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
								<a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
								<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum tempor ultrices. Praesent vitae fermentum augue. Sed convallis laoreet nulla, sit amet congue justo sagittis eget. Proin vitae lectus turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque in urna sed tortor convallis congue ut vitae elit. Morbi ac felis posuere, pretium erat sed, eleifend libero. Nulla facilisi. Duis pellentesque porttitor lacus, varius dapibus mi faucibus id. </p>
							</div>
							<div class="col-md-2 align-items-center">
								<a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
									<img src="{{ url('depend/images/expand.png') }}" >
								</a>
							</div>
						</div>
						<hr>
						<div class="collapse" id="collapseExample2">
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
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
										<i class="fas fa-server"></i>
									</div>
									
								</div>
							</div>
							<div class="col-md-8">
								<a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
									<h3 class="custom-block-title">API or Third Party Configuration and Setting</h3>
								</a>
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
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
							<hr>
							<div class="row">
								<a href="#">
									<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!----------------------Feature Update------------------->
		<section id="feature-update" class="kategory-bg">
			<div class="container">
				<div class="col-md-12">
					<h2 class="title-informasi">HelloBill Feature Update</h2>
					<h3 class="title-informasi-h3">Article new feature update from HelloBill</h3>
				</div>
				<div class="row">
					@foreach ($data as $result)
					<div class="col-md-4">
						<div class="card card-design">
							<a href="{{ route('blog.isi', $result->slug_post) }}" ><h4 class="card-title more-info">{{  Str::limit($result->judul, 25)  }}</h4></a>
							<img src="{{ URL::to($result->gambar) }}" alt="" class="card-img-top image-card" href="">
							<div class="col-md-12">
								<p><b>Writen by</b> : <b>{{ $result->users->name }}</b></p>
							</div>
							<p class="card-text">{!! Str::limit($result->content, 100) !!}</p>
							<a href="{{ route('blog.isi', $result->slug_post) }}"><p><b class="more-info">More info</b></p></a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!---------------------Footer section-------------------->
		@include('template-blog.footer')
	</body>
</html>