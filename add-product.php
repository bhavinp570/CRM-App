<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	
    <!-- Favicon icon -->
    <link rel="icon" href="http://ableproadmin.com/7.0/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
	<!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/pages/notification/notification.css">

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
                                        <h4 class="m-b-10">Products</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="feather icon-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="add-product.php">Add New Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="card">
                                                    <div class="card-header">
                                                        <h5>Details</h5>
                                                        <span></span>
                                                    </div>
                                                    <div class="card-block">
		<form id="productform" name="productform">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Product</label>
				<div class="col-sm-4">
					<input type="text" name="product" class="form-control" required>
				</div>
				
				 <label class="col-sm-2 col-form-label">Cost</label>
				<div class="col-sm-4">
				   <input type="text" name="cost" class="form-control" required>
				</div>
				
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Notes</label>
				<div class="col-sm-4">
				 <textarea rows="5" cols="5" name="notes"  class="form-control" placeholder="" required></textarea>
				</div>
		    </div>
		
            <div class="cst-btn-group">
                <button class="btn btn-primary" type="submit">Submit <i class="fa fa-save"></i></button>
                <button class="btn btn-default" type="reset">Reset <i class="fa fa-times-circle"></i></button>
            </div>
		</form>
                                                </div>
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
</div>
<!-- Required Jquery -->
<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- waves js -->
<script src="files/assets/pages/waves/js/waves.min.js"></script>
<!-- notification js -->
<script type="text/javascript" src="files/assets/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="files/assets/pages/notification/notification.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- Custom js -->
<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/dark-light/vertical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.js"></script>
<script src="assets/submit.js"></script>
</body>
</html>