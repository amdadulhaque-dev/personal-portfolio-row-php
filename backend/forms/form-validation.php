<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Mentoring - Form Validation</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="assets/img/logo-white.png" alt="Logo">
				</a>
				<a href="index.php" class="logo logo-small">
					<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<a href="javascript:void(0);" id="toggle_btn"> <i class="fas fa-bars"></i>
			</a>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="feather-search"></i>
					</button>
				</form>
			</div>

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu">
				<!-- Flag -->
				<li class="nav-item dropdown has-arrow flag-nav mr-2">
					<a class="nav-link dropdown-toggle align-items-center" data-toggle="dropdown" href="#"
						role="button">
						<img src="assets/img/flags/us-1.png" alt="" width="24" height="16" class="lang-flag mr-1">
						English
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/us.png" alt="" height="16"> English
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/fr.png" alt="" height="16"> French
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/de.png" alt="" height="16"> German
						</a>
					</div>
				</li>
				<!-- /Flag -->

				<!-- Fullscreen -->
				<li class="nav-item dropdown">
					<a href="#" id="btnFullscreen" class=" ">
						<i class="feather-maximize"></i>
					</a>
				</li>
				<!-- /Fullscreen -->

				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="feather-bell"></i> <span class="badge badge-pill">3</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Jonathan Doe</span>
													Schedule <span class="noti-title">his appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user1.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Julie Pennington</span>
													has booked her appointment to <span class="noti-title">Ruby
														Perrin</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user2.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tyrone Roberts</span>
													sent a amount of $210 for his <span
														class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user4.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Patricia Manzi</span>
													send a message <span class="noti-title"> to his Mentee</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="#">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<li class="nav-item dropdown has-arrow main-drop ml-3">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img src="assets/img/profiles/avatar-06.jpg" alt=""> Admin
							<span class="status online"></span></span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php"><i class="feather-user"></i> My Profile</a>
						<a class="dropdown-item" href="login.php"><i class="feather-power"></i> Logout</a>
					</div>
				</li>
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title"> <span>Main</span>
						</li>
						<li>
							<a href="index.php"><i class="feather-home"></i><span>Dashboard</span></a>
						</li>
						<li>
							<a href="mentor.php"><i class="feather-user"></i><span>Mentor</span></a>
						</li>
						<li>
							<a href="mentee.php"><i class="feather-users"></i><span>Mentee</span></a>
						</li>
						<li>
							<a href="booking-list.php"><i class="feather-list"></i><span>Booking List</span></a>
						</li>
						<li>
							<a href="categories.php"><i class="feather-disc"></i><span>Categories</span></a>
						</li>
						<li>
							<a href="transactions-list.php"><i
									class="feather-dollar-sign"></i><span>Transactions</span></a>
						</li>
						<li>
							<a href="settings.php"><i class="feather-settings"></i><span>Settings</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-book"></i><span> Reports</span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoice-report.php">Invoice Reports</a></li>
							</ul>
						</li>
						<li class="menu-title">
							<span>Pages</span>
						</li>
						<li>
							<a href="profile.php"><i class="feather-user-plus"></i><span>My Profile</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-book-open"></i><span>Blog</span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="blog.php"> Blog </a></li>
								<li><a href="blog-details.php"> Blog Details </a></li>
								<li><a href="add-blog.php"> Add Blog </a></li>
								<li><a href="edit-blog.php"> Edit Blog </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-lock"></i><span> Authentication </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="login.php"> Login </a></li>
								<li><a href="register.php"> Register </a></li>
								<li><a href="forgot-password.php"> Forgot Password </a></li>
								<li><a href="lock-screen.php"> Lock Screen </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-alert-octagon"></i><span> Error Pages </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="error-404.php">404 Error </a></li>
								<li><a href="error-500.php">500 Error </a></li>
							</ul>
						</li>
						<li>
							<a href="blank-page.php"><i class="feather-file"></i><span>Blank Page</span></a>
						</li>
						<li class="menu-title">
							<span>UI Interface</span>
						</li>
						<li>
							<a href="components.php"><i class="feather-layers"></i><span>Components</span></a>
						</li>
						<li class="submenu active">
							<a href="#"><i class="feather-sidebar"></i><span> Forms </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="form-basic-inputs.php">Basic Inputs </a></li>
								<li><a href="form-input-groups.php">Input Groups </a></li>
								<li><a href="form-horizontal.php">Horizontal Form </a></li>
								<li><a href="form-vertical.php"> Vertical Form </a></li>
								<li><a href="form-mask.php"> Form Mask </a></li>
								<li><a href="form-validation.php" class="active"> Form Validation </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-layout"></i><span> Tables </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="tables-basic.php">Basic Tables </a></li>
								<li><a href="data-tables.php">Data Table </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="feather-align-left"></i><span>Multi Level</span>
								<span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li class="submenu">
									<a href="javascript:void(0);"> <span>Level 1</span> <span
											class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"> <span> Level 2</span> <span
													class="menu-arrow"></span></a>
											<ul style="display: none;">
												<li><a href="javascript:void(0);">Level 3</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);"> <span>Level 1</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Form Validation</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Form Validation</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">

						<!-- Custom Boostrap Validation -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Custom Bootstrap Form Validation</h5>
								<p class="card-text">For custom Bootstrap form validation messages, you’ll need to add
									the <code>novalidate</code> boolean attribute to your form. For server side
									validation <a href="https://getbootstrap.com/docs/4.1/components/forms/#server-side"
										target="_blank">read full documentation</a>.</p>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm">
										<form class="needs-validation" novalidate>
											<div class="form-row">
												<div class="col-md-4 mb-3">
													<label for="validationCustom01">First name</label>
													<input type="text" class="form-control" id="validationCustom01"
														placeholder="First name" value="Mark" required>
													<div class="valid-feedback">
														Looks good!
													</div>
												</div>
												<div class="col-md-4 mb-3">
													<label for="validationCustom02">Last name</label>
													<input type="text" class="form-control" id="validationCustom02"
														placeholder="Last name" value="Otto" required>
													<div class="valid-feedback">
														Looks good!
													</div>
												</div>
												<div class="col-md-4 mb-3">
													<label for="validationCustomUsername">Username</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"
																id="inputGroupPrepend">@</span>
														</div>
														<input type="text" class="form-control"
															id="validationCustomUsername" placeholder="Username"
															aria-describedby="inputGroupPrepend" required>
														<div class="invalid-feedback">
															Please choose a username.
														</div>
													</div>
												</div>
											</div>
											<div class="form-row">
												<div class="col-md-6 mb-3">
													<label for="validationCustom03">City</label>
													<input type="text" class="form-control" id="validationCustom03"
														placeholder="City" required>
													<div class="invalid-feedback">
														Please provide a valid city.
													</div>
												</div>
												<div class="col-md-3 mb-3">
													<label for="validationCustom04">State</label>
													<input type="text" class="form-control" id="validationCustom04"
														placeholder="State" required>
													<div class="invalid-feedback">
														Please provide a valid state.
													</div>
												</div>
												<div class="col-md-3 mb-3">
													<label for="validationCustom05">Zip</label>
													<input type="text" class="form-control" id="validationCustom05"
														placeholder="Zip" required>
													<div class="invalid-feedback">
														Please provide a valid zip.
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value=""
														id="invalidCheck" required>
													<label class="form-check-label" for="invalidCheck">
														Agree to terms and conditions
													</label>
													<div class="invalid-feedback">
														You must agree before submitting.
													</div>
												</div>
											</div>
											<button class="btn btn-primary" type="submit">Submit form</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /Custom Boostrap Validation -->

						<!-- Default Browser Validation -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Browser defaults</h5>
								<p class="card-text">Not interested in custom validation feedback messages or writing
									JavaScript to change form behaviors? All good, you can use the browser defaults. Try
									submitting the form below.</p>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm">
										<form>
											<div class="form-row">
												<div class="col-md-4 mb-3">
													<label for="validationDefault01">First name</label>
													<input type="text" class="form-control" id="validationDefault01"
														placeholder="First name" value="Mark" required>
												</div>
												<div class="col-md-4 mb-3">
													<label for="validationDefault02">Last name</label>
													<input type="text" class="form-control" id="validationDefault02"
														placeholder="Last name" value="Otto" required>
												</div>
												<div class="col-md-4 mb-3">
													<label for="validationDefaultUsername">Username</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"
																id="inputGroupPrepend2">@</span>
														</div>
														<input type="text" class="form-control"
															id="validationDefaultUsername" placeholder="Username"
															aria-describedby="inputGroupPrepend2" required>
													</div>
												</div>
											</div>
											<div class="form-row">
												<div class="col-md-6 mb-3">
													<label for="validationDefault03">City</label>
													<input type="text" class="form-control" id="validationDefault03"
														placeholder="City" required>
												</div>
												<div class="col-md-3 mb-3">
													<label for="validationDefault04">State</label>
													<input type="text" class="form-control" id="validationDefault04"
														placeholder="State" required>
												</div>
												<div class="col-md-3 mb-3">
													<label for="validationDefault05">Zip</label>
													<input type="text" class="form-control" id="validationDefault05"
														placeholder="Zip" required>
												</div>
											</div>
											<div class="form-group">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value=""
														id="invalidCheck2" required>
													<label class="form-check-label" for="invalidCheck2">
														Agree to terms and conditions
													</label>
												</div>
											</div>
											<button class="btn btn-primary" type="submit">Submit form</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /Default Browser Validation -->

						<!-- Server Side Validation -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Server side</h5>
								<p class="card-text">We recommend using client side validation, but in case you require
									server side, you can indicate invalid and valid form fields with
									<code>.is-invalid</code> and <code>.is-valid</code>. Note that
									<code>.invalid-feedback</code> is also supported with these classes.</p>
							</div>
							<div class="card-body">
								<form>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label for="validationServer01">First name</label>
											<input type="text" class="form-control is-valid" id="validationServer01"
												placeholder="First name" value="Mark" required>
											<div class="valid-feedback">
												Looks good!
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Last name</label>
											<input type="text" class="form-control is-valid" id="validationServer02"
												placeholder="Last name" value="Otto" required>
											<div class="valid-feedback">
												Looks good!
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServerUsername">Username</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroupPrepend3">@</span>
												</div>
												<input type="text" class="form-control is-invalid"
													id="validationServerUsername" placeholder="Username"
													aria-describedby="inputGroupPrepend3" required>
												<div class="invalid-feedback">
													Please choose a username.
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServer03">City</label>
											<input type="text" class="form-control is-invalid" id="validationServer03"
												placeholder="City" required>
											<div class="invalid-feedback">
												Please provide a valid city.
											</div>
										</div>
										<div class="col-md-3 mb-3">
											<label for="validationServer04">State</label>
											<input type="text" class="form-control is-invalid" id="validationServer04"
												placeholder="State" required>
											<div class="invalid-feedback">
												Please provide a valid state.
											</div>
										</div>
										<div class="col-md-3 mb-3">
											<label for="validationServer05">Zip</label>
											<input type="text" class="form-control is-invalid" id="validationServer05"
												placeholder="Zip" required>
											<div class="invalid-feedback">
												Please provide a valid zip.
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input is-invalid" type="checkbox" value=""
												id="invalidCheck3" required>
											<label class="form-check-label" for="invalidCheck3">
												Agree to terms and conditions
											</label>
											<div class="invalid-feedback">
												You must agree before submitting.
											</div>
										</div>
									</div>
									<button class="btn btn-primary" type="submit">Submit form</button>
								</form>
							</div>
						</div>
						<!-- /Server Side Validation -->

						<!-- Supported Elements -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Supported elements</h5>
								<p class="card-text">Form validation styles are also available for bootstrap custom form
									controls.</p>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm">
										<form class="was-validated">
											<div class="custom-control custom-checkbox mb-3">
												<input type="checkbox" class="custom-control-input"
													id="customControlValidation1" required>
												<label class="custom-control-label" for="customControlValidation1">Check
													this custom checkbox</label>
												<div class="invalid-feedback">Example invalid feedback text</div>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input"
													id="customControlValidation2" name="radio-stacked" required>
												<label class="custom-control-label"
													for="customControlValidation2">Toggle this custom radio</label>
											</div>
											<div class="custom-control custom-radio mb-3">
												<input type="radio" class="custom-control-input"
													id="customControlValidation3" name="radio-stacked" required>
												<label class="custom-control-label" for="customControlValidation3">Or
													toggle this other custom radio</label>
												<div class="invalid-feedback">More example invalid feedback text</div>
											</div>
											<div class="form-group">
												<select class="custom-select" required>
													<option value="">Open this select menu</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
												<div class="invalid-feedback">Example invalid custom select feedback
												</div>
											</div>

											<div class="custom-file">
												<input type="file" class="custom-file-input" id="validatedCustomFile"
													required>
												<label class="custom-file-label" for="validatedCustomFile">Choose
													file...</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /Supported Elements -->

						<!-- Validation Tooltips -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Tooltips</h5>
								<p class="card-text">You can swap the <code>.{valid|invalid}-feedback</code> classes for
									<code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a
									styled tooltip.</p>
							</div>
							<div class="card-body">
								<form class="needs-validation" novalidate>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label for="validationTooltip01">First name</label>
											<input type="text" class="form-control" id="validationTooltip01"
												placeholder="First name" value="Mark" required>
											<div class="valid-tooltip">
												Looks good!
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationTooltip02">Last name</label>
											<input type="text" class="form-control" id="validationTooltip02"
												placeholder="Last name" value="Otto" required>
											<div class="valid-tooltip">
												Looks good!
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationTooltipUsername">Username</label>
											<input type="text" class="form-control" id="validationTooltipUsername"
												placeholder="Username" required>
											<div class="invalid-tooltip">
												Please choose a unique and valid username.
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationTooltip03">City</label>
											<input type="text" class="form-control" id="validationTooltip03"
												placeholder="City" required>
											<div class="invalid-tooltip">
												Please provide a valid city.
											</div>
										</div>
										<div class="col-md-3 mb-3">
											<label for="validationTooltip04">State</label>
											<input type="text" class="form-control" id="validationTooltip04"
												placeholder="State" required>
											<div class="invalid-tooltip">
												Please provide a valid state.
											</div>
										</div>
										<div class="col-md-3 mb-3">
											<label for="validationTooltip05">Zip</label>
											<input type="text" class="form-control" id="validationTooltip05"
												placeholder="Zip" required>
											<div class="invalid-tooltip">
												Please provide a valid zip.
											</div>
										</div>
									</div>
									<button class="btn btn-primary" type="submit">Submit form</button>
								</form>
							</div>
						</div>
						<!-- /Validation Tooltips -->

					</div>
				</div>
				<!-- /Row -->

			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Form Validation JS -->
	<script src="assets/js/form-validation.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>