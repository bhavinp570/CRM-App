<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- morris chart -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/morris.js/css/morris.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome.min.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">
</head>
<body onload="upinvoicesFetchdata();invoicespastFetchdata()">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <?php include("header.php") ?>
            <!-- [ Header ] end -->
            <!-- [ chat message ] end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <?php include("menubar.php") ?>
                    <!-- [ navigation menu ] end -->
                    <div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h4 class="m-b-10">Dashboard</h4>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php">
                                                    <i class="feather icon-home"></i>
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- [ breadcrumb ] end -->
<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<!-- [ page content ] start -->
				<div class="row">
	<!-- site Analytics card start -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5>Revenue</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block">
				<div id="revenue-map" style="height: 215px;"></div>
			</div>
		</div>
	</div>
	<!-- site Analytics card end -->
	<!-- widget-statstic start -->
	<div class="col-md-12 col-xl-4">
		<div class="card widget-statstic-card">
			<div class="card-header borderless">
				<div class="card-header-left">
					<h5>Total Income</h5>
					<p class="p-t-10 m-b-0 text-c-yellow">Compared to last week</p>
				</div>
			</div>
			<div class="card-block">
				<i class="feather icon-check st-icon bg-c-green"></i>
				<div class="text-left">
					<h3 class="d-inline-block">5,456</h3>
					<i class="feather icon-arrow-up f-30 text-c-green"></i>
					<span class="float-right bg-c-yellow">23%</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card widget-statstic-card">
			<div class="card-header borderless">
				<div class="card-header-left">
					<h5>Number of Invoice</h5>
					<p class="p-t-10 m-b-0 text-c-red">55% From last 28 hours</p>
				</div>
			</div>
			<div class="card-block">
				<i class="feather icon-file-minus st-icon bg-c-red txt-lite-color"></i>
				<div class="text-left">
					<h3 class="d-inline-block">3,874</h3>
					<i class="feather icon-arrow-down text-c-red f-30 "></i>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card widget-statstic-card">
			<div class="card-header borderless">
				<div class="card-header-left">
					<h5>New Orders</h5>
					<p class="p-t-10 m-b-0 text-c-blue">54% From last month</p>
				</div>
			</div>
			<div class="card-block">
				<i class="feather icon-shopping-cart st-icon bg-c-blue"></i>
				<div class="text-left">
					<h3 class="d-inline-block">5,456</h3>
					<i class="feather icon-arrow-up text-c-green f-30 "></i>
				</div>
			</div>
		</div>
	</div>
	<!-- widget-statstic end -->
	<!-- project and updates start -->
	<div class="col-xl-8 col-md-6">
		<div class="card table-card">
			<div class="card-header">
				<h5>Product Sales</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block">
				<div class="table-responsive">
					<table class="table table-hover  table-borderless">
						<thead>
							<tr>
								<th>
									<div class="chk-option">
										<div class="checkbox-fade fade-in-primary">
											<label class="check-task">
												<input type="checkbox" value="">
												<span class="cr">
													<i class="cr-icon feather icon-check f-w-600 txt-default"></i>
												</span>
											</label>
										</div>
									</div>
									Product</th>
								<th>Sales</th>
								<th>Avg Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="chk-option">
										<div class="checkbox-fade fade-in-primary">
											<label class="check-task">
												<input type="checkbox" value="">
												<span class="cr">
													<i class="cr-icon feather icon-check f-w-600 txt-default"></i>
												</span>
											</label>
										</div>
									</div>
									<div class="d-inline-block align-middle">
										<h6>Name1</h6>
										
									</div>
								</td>
								<td>16,300</td>
								<td>$53</td>
								<td class="text-c-blue">$15,652</td>
							</tr>
							<tr>
								<td>
									<div class="chk-option">
										<div class="checkbox-fade fade-in-primary">
											<label class="check-task">
														<input type="checkbox" value="">
														<span class="cr">
															<i class="cr-icon feather icon-check f-w-600 txt-default"></i>
														</span>
													</label>
										</div>
									</div>
									<div class="d-inline-block align-middle">
										<h6>Name2</h6>
										
									</div>
								</td>
								<td>26,421</td>
								<td>$35</td>
								<td class="text-c-blue">$18,785</td>
							</tr>
							<tr>
								<td>
									<div class="chk-option">
										<div class="checkbox-fade fade-in-primary">
											<label class="check-task">
														<input type="checkbox" value="">
														<span class="cr">
															<i class="cr-icon feather icon-check f-w-600 txt-default"></i>
														</span>
													</label>
										</div>
									</div>
									<div class="d-inline-block align-middle">
										<h6>Name3</h6>
									   
									</div>
								</td>
								<td>8,265</td>
								<td>$98</td>
								<td class="text-c-blue">$9,652</td>
							</tr>
							<tr>
								<td>
									<div class="chk-option">
										<div class="checkbox-fade fade-in-primary">
											<label class="check-task">
														<input type="checkbox" value="">
														<span class="cr">
															<i class="cr-icon feather icon-check f-w-600 txt-default"></i>
														</span>
													</label>
										</div>
									</div>
									<div class="d-inline-block align-middle">
										<h6>Name4</h6>
									  
									</div>
								</td>
								<td>10,652</td>
								<td>$20</td>
								<td class="text-c-blue">$7,856</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-12">
		<div class="card task-card">
			<div class="card-header">
				<h5>Tasks</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block">
				<ul class="list-unstyled task-list">
					<li>
						<i class="feather icon-check f-w-600 task-icon bg-c-green"></i>
						<p class="m-b-5">8:50</p>
						<h6 class="text-muted">Call to customer <span class="text-c-blue"> <a href="#" class="text-c-blue">Jacob</a> </span> and discuss the</h6>
					</li>
					<li>
						<i class="task-icon bg-c-blue"></i>
						<p class="m-b-5">Sat, 5 Mar</p>
						<h6 class="text-muted">Design mobile Application</h6>
					</li>
					<li>
						<i class="task-icon bg-c-red"></i>
						<p class="m-b-5">Sun, 17 Feb</p>
						<h6 class="text-muted"><span class="text-c-blue"><a href="#!" class="text-c-blue">Jeny</a></span> assign you a task <span class="text-c-blue"><a href="#" class="text-c-blue">Mockup Design.</a></span></h6>
					</li>
					<li>
						<i class="task-icon bg-c-yellow"></i>
						<p class="m-b-5">Sat, 18 Mar</p>
						<h6 class="text-muted">Design logo</h6>
					</li>
					<li class="p-b-30">
						<i class="task-icon bg-c-green"></i>
						<p class="m-b-5">Sat, 22 Mar</p>
						<h6 class="text-muted">Design mobile Application</h6>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xl-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<h5>Upcoming Invoices</h5>                    
			</div>
			<div class="card-block">
				<div class="dt-responsive table-responsive">
					<table id="basic-key-table" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								<th>Invoice Number</th>
								<th>Client Name</th>
								<th>Invoice Date</th>
								<th>Due</th>
							</tr>
						</thead>
						<tbody id="updata">
									</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<h5>Invoices Past Due</h5>                                         
			</div>
			<div class="card-block">
				<div class="dt-responsive table-responsive">
					<table id="basic-key-table" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								<th>Invoice Number</th>
								<th>Client Name</th>
								<th>Invoice Date</th>
								<th>Due</th>
							</tr>
						</thead>
						<tbody id="pastdata">
									</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
				<!-- Basic Key-table fix table end -->
				</div>
				<!-- [ page content ] end -->
			</div>
		</div>
	</div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="files/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- Float Chart js -->
    <script src="files/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="files/assets/pages/chart/float/curvedLines.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>
    <!-- amchart js -->
    <script src="files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="files/assets/pages/widget/amchart/serial.js"></script>
    <script src="files/assets/pages/widget/amchart/light.js"></script>
	<script src="files/assets/pages/widget/amchart/gauge.js"></script>
	<script src="files/assets/pages/widget/amchart/pie.min.js"></script>
    <script src="files/assets/pages/widget/amchart/ammap.min.js"></script>
    <script src="files/assets/pages/widget/amchart/usaLow.js"></script>
    <!-- Custom js -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/dark-light/vertical-layout.min.js"></script>
	<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.min.js"></script>
	<script type="text/javascript" src="files/assets/pages/widget/widget-chart.js"></script>
	<script type="text/javascript" src="files/assets/js/script.js "></script>
	<script src="assets/submit.js"></script>
</body>
</html>