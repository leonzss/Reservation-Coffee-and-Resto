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
						<li class="nav-item"><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
						<li class="nav-item active"><a class="nav-link" href="<?= base_url('reservation') ?>">Reservation</a></li>
						<li class="nav-item "><a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('staff') ?>">Staff</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('testimoni') ?>">Testimoni</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<?= $this->session->flashdata('pesan'); ?>

	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">

				<div class="col-lg-12">

					<h1>Reservation Terms</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<br><br><br>
    <div class="text-center">
        <img src="uploads/1.jpg"  alt="" width="500">
    </div><br>
	<div class="text-center">
        <img src="uploads/2.jpg"  alt="" width="500">
    </div>
    <br><br>
    <div class="text-center">
		<a class="btn btn-common" href="<?= base_url('reservation') ?>">Book Table</a>
	</div>