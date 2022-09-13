<?php
	// print_r($_SESSION['userinformation']);
	// exit;
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from codervent.com/syndash/demo/vertical/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:10:49 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>SIPUP||GLOBAL VENTURES</title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url() . 'assets/images/favicon-32x32.png'; ?>" type="image/png" />
	<!-- Vector CSS -->
	<link href="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet'; ?>" />
	<!--plugins-->
	<link href="<?php echo base_url() . 'assets/plugins/simplebar/css/simplebar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'assets/plugins/metismenu/css/metisMenu.min.css'; ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url() . 'assets/css/pace.min.css'; ?>" rel="stylesheet" />
	<script src="<?php echo base_url() . 'assets/js/pace.min.js'; ?>"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/icons.css'; ?>" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/app.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dark-sidebar.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dark-theme.css'; ?>" />



</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<?php 
			echo $sidebar;
		?>
		<!--end sidebar-wrapper-->
		<!--header-->
		<?php 
			echo $header;
		?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-voilet">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">649 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-cart-alt"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Item Delivered</p>
										</div>
										<div class="ml-auto font-14 text-white">+23.4%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-primary-blue">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">114 <i class='bx bxs-down-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-support"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Refund Request</p>
										</div>
										<div class="ml-auto font-14 text-white">+14.7%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-rose">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">98 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-tachometer"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Cancelled Orders</p>
										</div>
										<div class="ml-auto font-14 text-white">-12.9%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-sunset">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">208 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-user"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">New Users</p>
										</div>
										<div class="ml-auto font-14 text-white">+13.6%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-header border-bottom-0">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Recent Orders</h5>
								</div>
								<!-- <div class="ml-auto">
									<button type="button" class="btn btn-white radius-15">View More</button>
								</div> -->
							</div>
						</div>
						<div class="card-body p-0" >
							<div class="table-responsive">
								<!-- <table class="table mb-0">
									<thead>
										<tr>
											<th>Photo</th>
											<th>Product Name</th>
											<th>Customer</th>
											<th>Product id</th>
											<th>Price</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="<?php echo base_url() . 'assets/images/icons/smartphone.png'; ?>" width="35" alt="">
												</div>
											</td>
											<td>Honor Mobile 7x</td>
											<td>Mitchell Daniel</td>
											<td>#835478</td>
											<td>$54.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="<?php echo base_url() . 'assets/images/icons/watch.png'; ?>" width="35" alt="">
												</div>
											</td>
											<td>Hand Watch</td>
											<td>Milona Burke</td>
											<td>#987546</td>
											<td>$43.78</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-warning btn-block radius-30">Pending</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="<?php echo base_url() . 'assets/images/icons/laptop.png'; ?>" width="35" alt="">
												</div>
											</td>
											<td>Mini Laptop</td>
											<td>Craig Clayton</td>
											<td>#325687</td>
											<td>$62.21</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="<?php echo base_url() . 'assets/images/icons/shirt.png'; ?>" width="35" alt="">
												</div>
											</td>
											<td>Slim-T-Shirt</td>
											<td>Clark Andola</td>
											<td>#658972</td>
											<td>$75.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-danger btn-block radius-30">Cancelled</a>
											</td>
										</tr>
									</tbody>
								</table> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<?php
			echo $footer;
		?>
		<!-- end footer -->
	</div>
	<!--start switcher-->
	<?php 
		echo $switcher;
	?>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/popper.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
	<!--plugins-->
	<script src="<?php echo base_url() . 'assets/plugins/simplebar/js/simplebar.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/metismenu/js/metisMenu.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'; ?>"></script>
	<!-- Vector map JavaScript -->
	<script src="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-in-mill.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/vectormap/jquery-jvectormap-au-mill.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/apexcharts-bundle/js/apexcharts.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/index2.js'; ?>"></script>
	<!-- App JS -->
	<script src="<?php echo base_url() . 'assets/js/app.js'; ?>"></script>	
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:10:51 GMT -->
</html>