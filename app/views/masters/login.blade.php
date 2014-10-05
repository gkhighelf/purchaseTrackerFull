<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title>
		@section('title')
		Purchase Tracker
		@show
		</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- #CSS Links -->
		<!-- Basic Styles -->
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/css/bootstrap.min.css') }}
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/css/font-awesome.min.css') }}

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/css/smartadmin-production.min.css') }}
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/css/smartadmin-skins.min.css') }}

		<!-- SmartAdmin RTL Support is under construction
			 This RTL CSS will be released in version 1.5
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/css/demo.min.css') }}

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip
			 Ref: https://developer.apple.comdemo.min.css/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
        {{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/img/splash/sptouch-icon-iphone.png') }}
        {{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/img/splash/touch-icon-ipad.png') }}
        {{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/img/splash/touch-icon-iphone-retina.png') }}
        {{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/img/splash/touch-icon-ipad-retina.png') }}

		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!-- Startup image for web apps -->
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/img/splash/ipad-landscape.png') }}
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/img/splash/iphone.png') }}
	</head>

	<body class="animated fadeInDown">

		<header id="header">

			<div id="logo-group">

				<span id="logo"> <img src="{{ URL::to('img/purchaseTrackerLogo.png') }}" alt="purchaseTracker" style="height:25px; width: 25px;"> purchaseTracker</span>
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile">Need an account?</span> <a href="{{ URL::to('register') }}" class="btn btn-danger">Create account</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-md-offset-4">
						<div class="well no-padding">

							@yield('content')

						</div>

						<h5 class="text-center"> - Or sign in using -</h5>

							<ul class="list-inline text-center">
								<li>
									<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>

					</div>
				</div>
			</div>

		</div>

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		{{ HTML::style('vendor/products-WB0573SK0/DEVELOPER/HTML_version/js/plugin/pace/pace.min.js') }}

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="{{ URL::to('js/libs/jquery-2.0.2.min.js') }}"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="{{ URL::to('js/libs/jquery-ui-1.10.3.min.js') }}"><\/script>');} </script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		{{ HTML::script('vendor/products-WB0573SK0/DEVELOPER/HTML_version/js/bootstrap/bootstrap.min.js') }}

		<!-- JQUERY VALIDATE -->
		{{ HTML::script('vendor/products-WB0573SK0/DEVELOPER/HTML_version/js/plugin/jquery-validate/jquery.validate.min.js') }}

		<!-- JQUERY MASKED INPUT -->
		{{ HTML::script('vendor/products-WB0573SK0/DEVELOPER/HTML_version/js/plugin/masked-input/jquery.maskedinput.min.js') }}

		<!--[if IE 8]>

			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- MAIN APP JS FILE -->
		{{ HTML::script('vendor/products-WB0573SK0/DEVELOPER/HTML_version/js/app.config.js') }}
		{{ HTML::script('vendor/products-WB0573SK0/DEVELOPER/HTML_version/js/app.min.js') }}

		<script type="text/javascript">
			runAllForms();

			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true/*,
							email : true*/
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
		</script>

	</body>
</html>