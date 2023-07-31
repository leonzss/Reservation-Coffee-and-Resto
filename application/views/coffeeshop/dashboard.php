
<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="<?= base_url('dashboard') ?>">
					<img src="<?= base_url('assets/template_restoran/') ?>images/logooo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('reservation') ?>">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('staff') ?>">Staff</a></li>
						
						
						<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('testimoni') ?>">Testimoni</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="<?= base_url('assets/template_restoran/') ?>images/slide4.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Holygrounds Coffee</strong></h1>
							<p class="m-b-40">Come on, immediately enjoy a different sensation and atmosphere at our coffee shop  <br></p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="<?= base_url('assets/template_restoran/') ?>images/slide2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Holygrounds Coffee</strong></h1>
							<p class="m-b-40">Come on, immediately enjoy a different sensation and atmosphere at our coffee shop  <br></p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="<?= base_url('assets/template_restoran/') ?>images/slide3.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Holygrounds Coffee</strong></h1>
							<p class="m-b-40">Thank you for choosing Holygrounds Coffee, we look forward to serving you!  <br></p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>WELCOME TO <span>HOLYGROUNDS COFFEE AND COMMUNNITY</span></h1>
						<!-- //<h4>Little Story</h4> -->
						<p>Holygrounds Coffee & Community is the first Christian-themed coffeeshop in Indonesia.
Holygrounds itself was created to accommodate Christian communities, especially in the Yogya area, to have a place to meet and hang out casually. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('reservation') ?>">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?= base_url('assets/template_restoran/') ?>images/tentang.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" God said. “Take off your sandals, for the place where you are standing is holy ground. "
					</p>
					<span class="lead"></span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Several Menu Lists Are Available at Holygrounds Coffee and Community</p>
					</div>
				</div>
			</div>
			
			
				
				<div class="col-12 row">

					<div class="tab-content" id="v-pills-tabContent">
						
							<div class="row">
								<?php foreach($menu as $row){ ?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="<?= base_url('uploads/menu/'.$row->gambar) ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?= $row->nama ?></h4>
											
											<p><?= $row->nama_kategori ?></p>
											<h5>Rp. <?= number_format($row->harga,0,',','.'); ?></h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
						</div>
						<div class="text-center">
							<a class="btn btn-common" href="<?= base_url('reservation') ?>">Book Table</a>

							
						</div>

								
								
						
						
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Activities That Take Place at Holygrounds Coffee and Community</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<?php foreach($gallery as $row){ ?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="<?= base_url('uploads/gallery/'.$row->gambar) ?>">
							<img class="img-fluid" src="<?= base_url('uploads/gallery/'.$row->gambar) ?>" alt="Gallery Images">
						</a>
					</div>
				<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	