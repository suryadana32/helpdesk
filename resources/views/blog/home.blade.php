<html>
	<head>
		<title>HelloBill</title>
		<link rel="stylesheet" type="text/css" href="{{ url('depend/css/style.css') }}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body>
		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <div class="container">
			    <a class="navbar-brand" href="#"><img src="{{ url('depend/images/logo-putih.png') }}"></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <i class="fas fa-bars"></i>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			      <ul class="navbar-nav ms-auto">
			        <li class="nav-item login-link">
			          <a type="button" class="nav-link btn green login-link" href="{{ route('login') }}">LOGIN</a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
		</section>
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
						<form action="/id/" autocomplete="off" class="header__form search">
					        <input type="text" autocomplete="off" class="search__input js__search-input o__ltr" placeholder="Mencari jawaban..." tabindex="1" name="q" value="">
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
							<a class="custom-block-kategori" href="#">
								<div class="custom-block-icon">
									<img src="{{ url('depend/images/fnb-logo.png') }}">
								</div>
								<h3 class="custom-block-title">FnB</h3>
							</a>
						</div>
						<div class="col-md-4 column">
							<a class="custom-block-kategori" href="#">
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
										<i class="fas fa-money-check "></i>
									</div>
									
								</div>
							</div>
							<div class="col-md-8">
								<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
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
								<h3 class="custom-block-title">Printers Throuble Shot and Setting</h3>
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
					<div class="col-md-4">
						<div class="card card-design">
							<a href="blog.html" ><h4 class="card-title more-info">Web Ordering dan Online Menu dari HelloBill</h4></a>
							<img src="https://blog.hellobill.id/wp-content/uploads/2021/12/32.png" alt="" class="card-img-top image-card">
							<div class="col-md-12">
								<p><b>Writen by</b> : <b>Eka Suryadana</b></p>
							</div>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
							<a href=""><p><b class="more-info">More info</b></p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-design">
							<a href="blog.html" ><h4 class="card-title more-info">Web Ordering dan Online Menu dari HelloBill</h4></a>
							<img src="https://blog.hellobill.id/wp-content/uploads/2021/12/tips-menghabiskan-cuti.png" alt="" class="card-img-top image-card">
							<div class="col-md-12">
								<p><b>Writen by</b> : <b>Eka Suryadana</b></p>
							</div>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
							<a href=""><p><b class="more-info">More info</b></p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-design">
							<a href="blog.html" ><h4 class="card-title more-info">Web Ordering dan Online Menu dari HelloBill</h4></a>
							<img src="https://blog.hellobill.id/wp-content/uploads/2021/12/banner-otto-point-2048x1024.webp" alt="" class="card-img-top image-card">
							<div class="col-md-12">
								<p><b>Writen by</b> : <b>Eka Suryadana</b></p>
							</div>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
							<a href=""><p><b class="more-info">More info</b></p></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!---------------------Footer section-------------------->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-7 footer-box align-self-end">
						<img src="{{ url('depend/images/logo-putih.png') }}">
						<p>© Copyright 2022 PT Nova Teknologi Awani. All Rights Reserved</p>
					</div>
					<div class="col-md-5 footer-box">
						<p><b>HelloBill Contact</b></p>
						<p><i class="far fa-envelope icon-footer">  support@hellobill.co.id</i></p>
						<p><i class="far fa-envelope icon-footer">    support@hellobill.co.id</i></p>
						<p><i class="far fa-envelope icon-footer">    support@hellobill.co.id</i></p>
						<p><b>Follow Us</b></p>
						<p class="icon-sosmed">
							<a href=""><i class="fab fa-facebook-square"></i></a>
							<a href=""><i class="fab fa-linkedin"></i></a>
							<a href=""><i class="fab fa-instagram"></i></a>
						</p>
					</div>
				</div>
				
			</div>
		</section>
	</body>
</html>