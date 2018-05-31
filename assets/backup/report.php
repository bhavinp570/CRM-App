<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="http://ableproadmin.com/7.0/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="files/bower_components/select2/css/select2.min.css" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" type="text/css" href="files/bower_components/multiselect/css/multi-select.css" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
</head>
<body>
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
                                        <h4 class="m-b-10">Reports</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="feather icon-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="report.php">Reports</a>
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
				<!-- Page body start -->
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<!-- Default select start -->
							<div class="card">
								<div class="card-header">
									<h5>Report Settings</h5>
									<span>Make your selection to get reports.</span>
								</div>
								<div class="card-block">
									<form id="form" name="form">
										<div class="row">
											<div class="col-sm-12 col-xl-3 m-b-30">
												<h4 class="sub-title">Type</h4>
												<select name="select" class="form-control form-control-default">
													<option value="Select One Value Only">Select One Value Only</option>
													<option value="Invoice">Invoice</option>
													<option value="Activity">Activity</option>
													<option value="Aging">Aging</option>
													<option value="Client">Client</option>
													<option value="Credit">Credit</option>
													<option value="Document">Document</option>
													<option value="Expense">Expense</option>
													<option value="Payment">Payment</option>
													<option value="Product">Product</option>
													<option value="Profit and Loss">Profit and Loss</option>
													<option value="Task">Task</option>
													<option value="Tax Rate">Tax Rate</option>
													<option value="Quote">Quote</option>
												</select>
											</div>
											<div class="col-sm-12 col-xl-4 m-b-30">
												<h4 class="sub-title">Date Range</h4>
											  
												<input class="form-control" type="date" />
											</div>
											<div class="col-sm-12 col-xl-4 m-b-30">
												<h4 class="sub-title">Status</h4>
												<select class="js-example-basic-multiple col-sm-12" multiple="multiple">
													<option value="Alabama">Alabama</option>
													<option value="Wyoming">Wyoming</option>
													<option value="Coming">Coming</option>
													<option value="Hanry Die">Hanry Die</option>
													<option value="John Doe">John Doe</option>
												</select>
											</div>
										</div>
										<div class="cst-btn-group">
											<button class="btn btn-primary" type="submit">Submit <i class="fa fa-save"></i></button>
										</div>
									</form>	
								</div>
							</div>
							<!-- Default Date-Picker card end -->
						</div>
					</div>
				</div>
				<!-- Page body end -->
			</div>
		</div>
		<!-- Main-body end -->
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
<!-- modernizr js -->
<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- Select 2 js -->
<script type="text/javascript" src="files/bower_components/select2/js/select2.full.min.js"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
</script>
<script type="text/javascript" src="files/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="files/assets/js/jquery.quicksearch.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="files/assets/pages/advance-elements/select2-custom.js"></script>
<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/dark-light/vertical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.js"></script>
<script src="assets/test.js"></script>


</body>
</html>