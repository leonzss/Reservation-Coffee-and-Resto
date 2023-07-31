<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="<?= base_url('assets/template_restoran/') ?>images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Puja Nadeak</strong></h5>
								<h6 class="text-dark m-0">puja@gmail.com</h6>
								<p class="m-0 pt-3">Mantap Nian Woy</p>
							</div>
							<?php foreach ($testimoni as $row) { 
            if ($row->status == 'approved') { 
            ?> 
            <div class="carousel-item text-center"> 
            <div class="img-box p-1 border rounded-circle m-auto"> 
            <img class="d-block w-100 rounded-circle" src="<?= base_url('assets/template_restoran/') ?>images/quotations-button.png" alt=""> 
            </div> 
            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"><?= $row->nama ?></strong></h5> 
            <h6 class="text-dark m-0"><?= $row->email ?></h6> 
            <p class="m-0 pt-3"><?= $row->deskripsi ?></p> 
            </div> 
            <?php 
            } 
            } ?>
						
						
							
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
						    +82 56-4335-0634
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							holyground.id@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Jl. Monjali, Yogyakarta
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Holygrounds Coffee & Community is the first Christian-themed coffeeshop in Indonesia.
Holygrounds itself was created to accommodate Christian communities, especially in the Yogya area, to have a place to meet and hang out casually.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact Us</h3>
					<!-- <div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div> -->
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Jl. Monjali, Yogyakarta</p>
					<p class="lead"><a href="#">+82 56-4335-0634</a></p>
					<p><a href="#"> holyground.id@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday-Saturday :</span> 09:00.Am - 23:00.PM</p>
					<p><span class="text-color">Sunday  :</span> 14:00.PM - 23:PM</p>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Copyright &copy; 2023 | <a href="#">Kerja Praktek Mahasiswa Sistem Informasi</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<script src="<?= base_url('assets/package/dist/') ?>sweetalert2.all.min.js"></script>
	<script src="<?= base_url('assets/package/') ?>myscript.js"></script>

	<!-- ALL JS FILES -->
	<script src="<?= base_url('assets/template_restoran/') ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/template_restoran/') ?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/template_restoran/') ?>js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="<?= base_url('assets/template_restoran/') ?>js/jquery.superslides.min.js"></script>
	<script src="<?= base_url('assets/template_restoran/') ?>js/images-loded.min.js"></script>
	<script src="<?= base_url('assets/template_restoran/') ?>js/isotope.min.js"></script>
	<script src="<?= base_url('assets/template_restoran/') ?>js/baguetteBox.min.js"></script>
	<script src="<?= base_url('assets/template_restoran/') ?>js/form-validator.min.js"></script>
    <script src="<?= base_url('assets/template_restoran/') ?>js/contact-form-script.js"></script>
    <script src="<?= base_url('assets/template_restoran/') ?>js/custom.js"></script>
</body>
</html>