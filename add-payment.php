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
	<!-- Select 2 css -->
    <link rel="stylesheet" href="files/bower_components/select2/css/select2.min.css">

</head>

<body onload="invoicenamefetch()">
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
                                        <h4 class="m-b-10">Payments</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="feather icon-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="add-payment.php">Add Payments Details</a>
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
	<form id="paymentform" name="paymentform">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Client Name</label>
			<div class="col-sm-4">
				<select name="name" id="select_name" onchange="selectinvoicenum()" class="js-example-basic-single col-sm-12" required>
					<option value="" selected> </option>
				</select>
			</div>
			<label class="col-sm-2 col-form-label">Invoice Number</label>
			<div class="col-sm-4">
				<input type="text" id="invoice_num" name="invoice" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Amount</label>
			<div class="col-sm-4">
				<input type="text" name="amount" class="form-control"
				placeholder="" required>
			</div>
			  <label class="col-sm-2 col-form-label">Payment Type</label>
			<div class="col-sm-4">
			  <select name="paymenttype" class="form-control">
				 <option value="" selected>Select Payment Type</option>
						<option value="ACH">ACH</option>
							<option value="American Express">American Express</option>
							<option value="Apply Credit">Apply Credit</option>
							<option value="Bank Transfer">Bank Transfer</option>
							<option value="Bitcoin">Bitcoin</option>
							<option value="Carte Blanche">Carte Blanche</option>
							<option value="Cash">Cash</option>
							<option value="Credit Card Other">Credit Card Other</option>
							<option value="Debit">Debit</option>
							<option value="Diners Card">Diners Card</option>
							<option value="Discover Card">Discover Card</option>
							<option value="EuroCard">EuroCard</option>
							<option value="GoCardless">GoCardless</option>
							<option value="Google Wallet">Google Wallet</option>
							<option value="JCB">JCB</option>
							<option value="Maestro">Maestro</option>
							<option value="MasterCard">MasterCard</option>
							<option value="Money Order">Money Order</option>
							<option value="j-United Kingdom">j-United Kingdom</option>
							<option value="Nova">Nova</option>
							 <option value="PayPal">PayPal</option>
							  <option value="SEPA Direct Debit">SEPA Direct Debit</option>
							   <option value="iZettle">iZettle</option>
							   <option value="Visa Card">Visa Card</option>
							   <option value="UnionPay">UnionPay</option>
					</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Payment Date</label>
			<div class="col-sm-4">
			   <input name="paymentdate" class="form-control" type="date" required />
			</div>
			<label class="col-sm-2 col-form-label">Transaction Reference</label>
			<div class="col-sm-4">
				<input type="text" name="transaction" class="form-control"
				placeholder="" required>
			</div>
	   </div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label"> Currency </label>
			<div class="col-sm-4">
				<select name="currency" class="form-control">
					<option value="US Dollar" selected>US Dollar</option>
					<option value="Argentine Peso">Argentine Peso</option>
					<option value="Aruban Florin">Aruban Florin</option>
					<option value="Australian Dollar">Australian Dollar</option>
					<option value="Bangladeshi Taka">Bangladeshi Taka</option>
					<option value="Barbadian Dollar">Barbadian Dollar</option>
					<option value="Botswana Pula">Botswana Pula</option>
					<option value="Brazilian Real">Brazilian Real</option>
					<option value="British Pound">British Pound</option>
					<option value="Brunei Dollar">Brunei Dollar</option>
					<option value="Bulgarian Lev">Bulgarian Lev</option>
					<option value="Canadian Dollar">Canadian Dollar</option>
					<option value="Chilean Peso">Chilean Peso</option>
					<option value="Chinese Renminb">Chinese Renminb</option>
					<option value="Colombian Peso">Colombian Peso</option>
					<option value="Costa Rican Colón">Costa Rican Colón</option>
					<option value="Croatian Kuna">Croatian Kuna</option>
					<option value="Czech Koruna">Czech Koruna</option>
					<option value="Danish Krone">Danish Krone</option>
					<option value="East Caribbean Dollar">East Caribbean Dollar</option>
					<option value="Dominican Peso">Dominican Peso</option>
					<option value="Egyptian Pound">Egyptian Pound</option>
					<option value="Euro">Euro</option>
					<option value="Georgian Lari">Georgian Lari</option>
					<option value="Ghanaian Cedi">Ghanaian Cedi</option>
					<option value="Guatemalan Quetzal">Guatemalan Quetzal</option>
					<option value="Hong Kong Dollar">Hong Kong Dollar</option>
					<option value="Hungarian Forint">Hungarian Forint</option>
					<option value="Icelandic Króna">Icelandic Króna</option>
					<option value="Indian Rupee">Indian Rupee</option>
					<option value="Indonesian Rupiah">Indonesian Rupiah</option>
					 <option value="Israeli Shekel">Israeli Shekel</option>
					<option value="Japanese Yen">Japanese Yen</option>
					<option value="Jordanian Dinar">Jordanian Dinar</option>
					<option value="Macanese Pataca">Macanese Pataca</option>
					<option value="Malaysian Ringgit">Malaysian Ringgit</option>
					<option value="Maldivian Rufiyaa">Maldivian Rufiyaa</option>
					<option value="Mexican Peso">Mexican Peso</option>
					<option value="Mozambican Metical">Mozambican Metical</option>
					<option value="Myanmar Kyat">Myanmar Kyat</option>
					<option value="Namibian Dollar">Namibian Dollar</option>
					<option value="Netherlands Antillean Guilder">Netherlands Antillean Guilder</option>
					 <option value="New Zealand Dollar">New Zealand Dollar</option>
					 <option value="Nigerian Naira">Nigerian Naira</option>
					<option value="Omani Rial">Omani Rial</option>
					<option value="Norske Kroner">Norske Kroner</option>
					<option value="Pakistani Rupee">Pakistani Rupee</option>
					<option value="Papua New Guinean Kina">Papua New Guinean Kina</option>
					<option value="Peruvian Sol">Peruvian Sol</option>
					<option value="Philippine Peso">Philippine Peso</option>
					<option value="Polish Zloty">Polish Zloty</option>
					<option value="Romanian New Leu">Romanian New Leu</option>
					<option value="Russian Ruble">Russian Ruble</option>
					<option value="Rwandan Franc">Rwandan Franc</option>
					<option value="Saudi Riyal">Saudi Riyal</option>
					<option value="Singapore Dollar">Singapore Dollar</option>
					<option value="South African Rand">South African Rand</option>
					<option value="Sri Lankan Rupee">Sri Lankan Rupee</option>
					<option value="Swedish Krona">Swedish Krona</option>
					<option value="Swiss Franc">Swiss Franc</option>
					<option value="Taiwan New Dollar">Taiwan New Dollar</option>
					<option value="Tanzanian Shilling">Tanzanian Shilling</option>
					<option value="Thai Baht">Thai Baht</option>
					<option value="Trinidad and Tobago Dollar">Trinidad and Tobago Dollar</option>
					<option value="Tunisian Dinar">Tunisian Dinar</option>
					<option value="Turkish Lira">Turkish Lira</option>
					<option value="US Dollar">US Dollar</option>
					<option value="Ugandan Shilling">Ugandan Shilling</option>
					<option value="Ukrainian Hryvnia">Ukrainian Hryvnia</option>
					<option value="United Arab Emirates Dirham">United Arab Emirates Dirham</option>
					<option value="Uruguayan Peso">Uruguayan Peso</option>
					<option value="Vietnamese Dong">Vietnamese Dong</option>
					<option value="West African Franc">West African Franc</option>
				</select>
			</div>
			<label class="col-sm-2 col-form-label">Exchange Rate</label>
			<div class="col-sm-4">
			 <input type="text" name="exchange" class="form-control"
				value="" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Converted Amount</label>
			<div class="col-sm-4">
				<input type="text" name="converted" class="form-control"
				value="" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Private Notes</label>
			<div class="col-sm-4">
				<textarea rows="5" cols="5" name="private" class="form-control"
						placeholder="" required></textarea>
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

<!-- Warning Section Ends -->
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
<!-- Select 2 js -->
<script type="text/javascript" src="files/bower_components/select2/js/select2.full.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="files/assets/pages/advance-elements/select2-custom.js"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="files/bower_components/multiselect/js/jquery.multi-select.js"></script>
</body>
</html>