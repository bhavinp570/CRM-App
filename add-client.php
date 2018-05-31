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
                                        <h4 class="m-b-10">Clients</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="feather icon-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="add-client.php">Add New Client</a>
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
	<form id="clientform" name="clientform">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Client Name</label>
			<div class="col-sm-4">
				<input type="text" name="name"  class="form-control" required>
			</div>
			<label class="col-sm-2 col-form-label">VAT Number</label>
			<div class="col-sm-4">
				<input type="text" name="vatnumber"  class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-4">
				<input type="email" name="email"  class="form-control"
				placeholder="" required>
			</div>
			  <label class="col-sm-2 col-form-label">Phone</label>
			<div class="col-sm-4">
				<input type="text" name="phone"  class="form-control"
				placeholder="" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Website</label>
			<div class="col-sm-4">
				<input type="url" name="website" class="form-control"
				placeholder="" required>
			</div>
	    </div>
		<div class="card-header no-padding-left">
			<h5>Address</h5>
			<span></span>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Street</label>
				<div class="col-sm-4">
					<input type="text" name="street"  class="form-control"
					value="" required>
				</div>
				<label class="col-sm-2 col-form-label">Apt/Suite</label>
				<div class="col-sm-4">
					<input type="text" name="apt"  class="form-control"
					value="" required>
				</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">City</label>
				<div class="col-sm-4">
					<input type="text" name="city"  class="form-control"
					value="" required>
				</div>
				<label class="col-sm-2 col-form-label">State/Province</label>
				<div class="col-sm-4">
					<input type="text" name="state"  class="form-control"
					value="" required>
				</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Postal Code</label>
			<div class="col-sm-4">
				<input type="text" name="postalcode"  class="form-control"
				value="" required>
			</div>
			<label class="col-sm-2 col-form-label">Country</label>
			<div class="col-sm-4">
				<select name="select" class="form-control" required>
					<option value="" selected>Select country</option>
					<option value="Afghanistan">Afghanistan</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
					<option value="American Samoa">American Samoa</option>
					<option value="Andorra">Andorra</option>
					<option value="Angola">Angola</option>
					<option value="Anguilla">Anguilla</option>
					<option value="Antarctica">Antarctica</option>
					<option value="Antigua and Barbuda">Antigua and Barbuda</option>
					<option value="Argentina">Argentina</option>
					<option value="Armenia">Armenia</option>
					<option value="Australia">Australia</option>
					<option value="Austria">Austria</option>
					<option value="Azerbaijan">Azerbaijan</option>
					<option value="Bahamas">Bahamas</option>
					<option value="Barbados">Barbados</option>
					<option value="Belgium">Belgium</option>
					<option value="Benin">Benin</option>
					<option value="Bermuda">Bermuda</option>
					<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
					<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
					<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
					<option value="Botswana">Botswana</option>
					<option value="Bouvet Island">Bouvet Island</option>
					<option value="Brazil">Brazil</option>
					<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
					<option value="Brunei Darussalam">Brunei Darussalam</option>
					<option value="Bulgaria">Bulgaria</option>
					<option value="Burkina Faso">Burkina Faso</option>
					<option value="Burundi">Burundi</option>
					<option value="Cambodia">Cambodia</option>
					<option value="Cameroon">Cameroon</option>
					<option value="Canada">Canada</option>
					<option value="Cape Verde">Cape Verde</option>
					<option value="Cayman Islands">Cayman Islands</option>
					<option value="Central African Republic">Central African Republic</option>
					<option value="Chad">Chad</option>
					<option value="Chile">Chile</option>
					<option value="China">China</option>
					<option value="Christmas Island">Christmas Island</option>
					<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
					<option value="Colombia">Colombia</option>
					<option value="Comoros">Comoros</option>
					<option value="Congo">Congo</option>
					<option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
					<option value="Cook Islands">Cook Islands</option>
					<option value="Costa Rica">Costa Rica</option>
					<option value="Croatia">Croatia</option>
					<option value="Curaçao">Curaçao</option>
					<option value="Cyprus">Cyprus</option>
					<option value="Czech Republic">Czech Republic</option>
					<option value="Côte d'Ivoire">Côte d'Ivoire</option>
					<option value="Denmark">Denmark</option>
					<option value="Djibouti">Djibouti</option>
					<option value="Dominica">Dominica</option>
					<option value="Dominican Republic">Dominican Republic</option>
					<option value="Ecuador">Ecuador</option>
					<option value="El Salvador">El Salvador</option>
					<option value="Equatorial Guinea">Equatorial Guinea</option>
					<option value="Eritrea">Eritrea</option>
					<option value="Estonia">Estonia</option>
					<option value="Ethiopia">Ethiopia</option>
					<option value="Falkland Islands ">Falkland Islands </option>
					<option value="Faroe Islands">Faroe Islands</option>
					<option value="Fiji">Fiji</option>
					<option value="Finland">Finland</option>
					<option value="France">France</option>
					<option value="French Guiana">French Guiana</option>
					<option value="French Polynesia">French Polynesia</option>
					<option value="French Southern Territories">French Southern Territories</option>
					<option value="Gabon">Gabon</option>
					<option value="Gambia">Gambia</option>
					<option value="Georgia">Georgia</option>	
					<option value="Germany">Germany</option>
					<option value="Ghana">Ghana</option>
					<option value="Gibraltar">Gibraltar</option>
					<option value="Greece">Greece</option>
					<option value="Greenland">Greenland</option>
					<option value="Grenada">Grenada</option>
					<option value="Guam">Guam</option>
					<option value="Guatemala">Guatemala</option>
					<option value=" Guernsey">Guernsey </option>
					<option value="Guinea">Guinea</option>
					<option value="Guinea-Bissau">Guinea-Bissau</option>
					<option value="Guyana">Guyana</option>
					<option value="Haiti">Haiti</option>
					<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
					<option value="Holy See ">Holy See </option>
					<option value="French Southern Territories">French Southern Territories</option>
					<option value="Honduras">Honduras</option>
					<option value="Hong Kong">Hong Kong</option>
					<option value="Hungary">Hungary</option>	
					<option value="Iceland">Iceland</option>
					<option value="India">India</option>
					<option value="Indonesia">Indonesia</option>
					<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
					<option value="Iraq">Iraq</option>
					<option value="Ireland">Ireland</option>
					<option value="Isle of Man">Isle of Man</option>
					<option value="Israel">Israel</option>
					<option value="Italy">Italy</option>
					<option value="Jamaica">Jamaica</option>
					<option value="Jersey">Jersey</option>
					<option value="Jordan">Jordan</option>
					<option value="Kazakhstan">Kazakhstan</option>
					<option value="Kenya">Kenya</option>
					<option value="Kiribati">Kiribati</option>
					<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
					<option value="Korea, Republic of">Korea, Republic of</option>
					<option value="Kuwait">Kuwait</option>
					<option value="Kyrgyzstan">Kyrgyzstan</option>
					<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
					<option value="Latvia">Latvia</option>
					<option value="Lebanon">Lebanon</option>
					<option value="Lesotho">Lesotho</option>
					<option value="Liberia">Liberia</option>
					<option value="Libya ">Libya Islands </option>
					<option value="Liechtenstein">Liechtenstein</option>
					<option value="Lithuania">Lithuania</option>
					<option value="Luxembourg">Luxembourg</option>
					<option value="Macao">Macao</option>
					<option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
					<option value="Madagascar">Madagascar</option>
					<option value="Malawi">Malawi</option>	
					<option value="Malaysia">Malaysia</option>
					<option value="Maldives">Maldives</option>
					<option value="Mali ">Mali </option>
					<option value="Malta">Malta</option>
					<option value="Marshall Islands">Marshall Islands</option>
					<option value="Martinique">Martinique</option>
					<option value="Mauritania">Mauritania</option>	
					<option value="Mauritius">Mauritius</option>
					<option value="Mayotte">Mayotte</option>
					<option value="Mexico">Mexico</option>
					<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
					<option value="Moldova, Republic of">Moldova, Republic of</option>
					<option value="Monaco">Monaco</option>
					<option value="Mongolia">Mongolia</option>
					<option value="Montenegro">Montenegro</option>
					<option value="Montserrat">Montserrat</option>
					<option value="Morocco">Morocco</option>
					<option value="Mozambique">Mozambique</option>
					<option value="Myanmar">Myanmar</option>
					<option value="Namibia">Namibia</option>
					<option value="Nauru">Nauru</option>
					<option value="Nepal">Nepal</option>
					<option value="Netherlands">Netherlands</option>
					<option value="New Caledonia">New Caledonia</option>
					<option value="New Zealand">New Zealand</option>
					<option value="Nicaragua">Nicaragua</option>
					<option value="Niger">Niger</option>
					<option value="Nigeria">Nigeria</option>
					<option value="Niue">Niue</option>	
					<option value="Norfolk Island">Norfolk Island</option>
					<option value="Northern Mariana Islands">Northern Mariana Islands</option>
					<option value="Norway ">Norway </option>
					<option value="Oman">Oman</option>
					<option value="Pakistan">Pakistan </option>
					<option value="Palau">Palau</option>
					<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>	
					<option value="Panama">Panama</option>
					<option value="Papua New Guinea">Papua New Guinea</option>
					<option value="Paraguay">Paraguay</option>
					<option value="Peru">Peru</option>
					<option value="Philippines">Philippines</option>
					<option value="Pitcairn">Pitcairn</option>
					<option value="Poland">Poland</option>
					<option value="Portugal">Portugal</option>
					<option value="Puerto Rico">Puerto Rico</option>
					<option value="Qatar">Qatar</option>
					<option value="Romania">Romania</option>
					<option value="Russian Federation">Russian Federation</option>
					<option value="Rwanda">Rwanda</option>
					<option value="Réunion">Réunion</option>
					<option value="Saint Barthélemy">Saint Barthélemy</option>
					<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
					<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>	
					<option value="Saint Lucia">Saint Lucia</option>
					<option value="Saint Martin (French part)">Saint Martin (French part)</option>
					<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon </option>
					<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
					<option value="Samoa">Samoa</option>
					<option value="San Marino">San Marino</option>
					<option value="Sao Tome and Principe">Sao Tome and Principe</option>	
					<option value="Saudi Arabia">Saudi Arabia</option>
					<option value="Senegal">Senegal</option>
					<option value="Serbia">Serbia</option>
					<option value="Seychelles">Seychelles</option>
					<option value="Sierra Leone">Sierra Leone</option>
					<option value="Singapore">Singapore</option>
					<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
					<option value="Slovakia">Slovakia</option>
					<option value="Slovenia">Slovenia</option>
					<option value="Solomon Islands">Solomon Islands</option>
					<option value="Somalia">Somalia</option>
					<option value="South Africa">South Africa</option>	
					<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
					<option value="South Sudan">South Sudan</option>
					<option value="Spain">Spain</option>
					<option value="Sri Lanka">Sri Lanka</option>
					<option value="Sudan">Sudan</option>
					<option value="Suriname">Suriname</option>
					<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
					<option value="Swaziland">Swaziland</option>	
					<option value="Sweden">Sweden</option>
					<option value="Switzerland">Switzerland</option>
					<option value="Syrian Arab Republic">Syrian Arab Republic </option>
					<option value="Taiwan, Province of China">Taiwan, Province of China</option>
					<option value="Tajikistan">Tajikistan</option>
					<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
					<option value="Thailand">Thailand</option>	
					<option value="Timor-Leste">Timor-Leste</option>
					<option value="Togo">Togo</option>
					<option value="Tokelau">Tokelau</option>
					<option value="Tonga">Tonga</option>
					<option value="Trinidad and Tobago">Trinidad and Tobago</option>
					<option value="Tunisia">Tunisia</option>
					<option value="Turkey">Turkey</option>
					<option value="Turkmenistan">Turkmenistan</option>
					<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
					<option value="Tuvalu">Tuvalu</option>
					<option value="Uganda">Uganda</option>
					<option value="Ukraine">Ukraine</option>	
					
					<option value="United Arab Emirates">United Arab Emirates</option>
					<option value="United Kingdom">United Kingdom</option>
					<option value="United States">United States</option>
					<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>	
					<option value="Uruguay">Uruguay</option>
					<option value="Uzbekistan">Uzbekistan</option>
					<option value="Vanuatu">Vanuatu </option>
					<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
					<option value="Viet Nam">Viet Nam</option>
					<option value="Virgin Islands, British">Virgin Islands, British</option>
					<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>	
					<option value="Wallis and Futuna">Wallis and Futuna</option>
					<option value="Western Sahara">Western Sahara</option>
					<option value="Yemen">Yemen</option>
					<option value="Zambia">Zambia</option>
					<option value="Zimbabwe">Zimbabwe</option>
					<option value="Aland Islands">Aland Islands</option>
				</select>
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
<!-- modernizr js -->
<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- notification js -->
<script type="text/javascript" src="files/assets/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="files/assets/pages/notification/notification.js"></script>
<!-- Custom js -->
<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/dark-light/vertical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.js"></script>
<script src="assets/submit.js"></script>

</body>
</html>