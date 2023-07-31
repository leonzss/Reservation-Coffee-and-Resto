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

					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<?= $this->session->flashdata('pesan'); ?>
						<h2>Reservation</h2>
						<p>Before filling out the reservation form, don't forget to read the terms of the reservation first</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class style="margin-right: 900px;" >
			<a class="btn btn-common" style="background-color: #d65106; color: white; font-size: 10px; font-family: sans-serif;" href="<?= base_url('reservationterms') ?>">Reservation Terms</a><br><br>
			    </div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form  action="<?= base_url('reservation/tambah_booking_aksi') ?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<h3>Book a table</h3>
									<div class="col-md-12">
									<label for="date">Date *</label>
										<div class="form-group">
											<input id="input_date" class="datepicker picker__input form-control" name="date" type="date" value="" required data-error="Please enter Date" name="date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
									<label for="time">O'clock *</label>
										<div class="form-group">
											<input id="input_time" class="time form-control picker__input" required data-error="Please enter time" type="time" name="time">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
									<label for="select_person">Number of people *</label>
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person" name="select_person">
											  <option disabled selected>desired number of people</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											  <option value="9">9</option>
											  <option value="10">10</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
									<label for="no_meja">Table Number *</label>
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please No. Table" name="no_meja">
											  <option disabled selected>table number</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											  <option value="9">9</option>
											  <option value="10">10</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Contact Details</h3>
									<div class="col-md-12">
									<label for="nama">Name *</label>
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="nama" placeholder="please enter your name" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
									<label for="email">Email *</label>
										<div class="form-group">
											<input type="text" placeholder="please enter your email" id="email" class="form-control" name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
									<label for="no_hp">Phone Number *</label>
										<div class="form-group">
											<input type="text" placeholder="please enter your phone number" id="phone" class="form-control" name="no_hp" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
									<label for="photo">Upload Your Payment Proof Here <sup class="text-danger">* Ekstensi .png | .jpg | .jpeg | .gif</sup></label>
										<div class="form-group">
											<input type="file" class="form-control" id="photo" name="photo" accept="image/*" required data-error="Please select a photo" placeholder="">
											<p style="color: red">No Rekening: HOLYGROUNDS BANK BCA.  KCU Yogyakarta 0370989133 a/n Giri Eka Febrianta Gusman</p>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
								<div class="col-md-12">
								<label for="pesanan">Write Your Order Here *</label>
									<div class="form-group">
									<textarea type="text" class="form-control" id="pesanan" name="pesanan" placeholder="example: Americano Coffee 3x, Waffel Vanila 2x, dll..."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="text-center">
										<button class="btn btn-common"  type="submit">Book Table</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	
