<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="http://ableproadmin.com/7.0/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->     
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
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
	<!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
	<script src="assets/submitreport.js"></script>
	
</head>
<body onload="clientsFetchdata()">
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
						<select name="select" id="reportsfetch" class="form-control form-control-default" onchange="clientsFetchdata()" required>
							<option value="" selected disabled>Select One Value Only</option>
							<option value="1">Client</option>
							<option value="2">Product</option>
							<option value="3">Invoice</option>
							<option value="4">Payment</option>
							<option value="5">Recurring</option>
							<option value="6">Credit</option>
							<option value="7">Quote</option>
							<option value="8">Project</option>
							<option value="9">Task</option>
							<option value="10">Expense</option>
							<option value="11">Vendor</option>
							<option value="12">Proposal</option>
						</select>
					</div>
					<div class="col-sm-12 col-xl-4 m-b-30">
						<h4 class="sub-title">Date From</h4>
					  
						<input name="from_date" id="from_date" placeholder="From Date" class="form-control" type="date" />
					</div>
					<div class="col-sm-12 col-xl-4 m-b-30">
						<h4 class="sub-title">Date To</h4>
					  
						<input name="to_date" id="to_date" placeholder="To Date" class="form-control" type="date" />
					</div>
				</div>
				<!-- <div class="cst-btn-group">
					<button class="btn btn-primary" id="filter" type="submit" required>Submit <i class="fa fa-save"></i></button>
				</div> -->
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
	
	<div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Zero config.table start -->
                                                
                                                <!-- Zero config.table end -->
                                                <!-- Default ordering table start -->
							<div class="card" id="inithidden">
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											
										</table>
									</div>
								</div>
                            </div>
                                                <!-- Default ordering table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
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
<script src="files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/dark-light/vertical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.js"></script>
<!-- data-table js -->
<script src="files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	
</body>
</html>