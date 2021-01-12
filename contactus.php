<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	 <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<script type="text/javascript" src="js/customalert.js"></script>
	<link rel="stylesheet" type="text/css" href="css/customalert.css" />
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Start Header-->
   <?php include('nav.php'); ?>
	<!--End Header-->
	
	<!--start wrapper-->
	<section class="wrapper">
		<section class="page_head">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="page_title">
							<h2>Contact Us</h2>
						</div>	
						<nav id="breadcrumbs">
							<ul>
								<li>You are here:</li>
								<li><a href="index.php">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class="content contact">
			<div class="container">
				<?php
				if(isset($_GET['msg']))
					{
						$param=$_GET['msg'];
						if($param=="succenquiry")
						 {
						 echo "<script>createCustomAlert('Thank You for Contacting Us..','','SUCCESS');</script>";
						 }
					}	 
				
				?>	
			
				<div class="row sub_content">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="dividerHeading">
							<h4><span>Our Location</span></h4>
						</div>
					<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA9G59lf61IxMTCcf8ZVJYckht_JbDJmVo'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://www.embedgooglemaps.com">Generate your Google map here, quick and easy!</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">Find all web directories here!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(18.024795035690495,74.78167785180666),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.024795035690495,74.78167785180666)});infowindow = new google.maps.InfoWindow({content:'<strong>Phadtare Pharmacy College</strong><br>Kalamb,Walchandnagar<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>	
					
					</div>
						
						
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar">
							<div class="widget_info">
								<div class="dividerHeading">
									<h4><span>Contact Info</span></h4>
									</div>
								
								<ul class="widget_info_contact">
									<li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: A/P-Kalamb-Walchandnagar,Tal : Indapur Dist : Pune,Pin Code:413114</p></li>
									<li><i class="fa fa-user"></i> <p><strong>Phone</strong>:+91 7066307777 / 7972404918</p></li>
									<li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">pharmacy.kalamb@phadtarepharmacy.org,<br>dnyankala20@gmail.com</a></p></li>
									<li><i class="fa fa-globe"></i> <p><strong>Web</strong>: <a href="#" data-placement="bottom" data-toggle="tooltip" title="www.dkkkppgs.com">www.phadtarepharmacy.org</a></p></li>
								</ul>
								
							</div>
						</div>
					</div>
						 <?php include('tabslide.php'); ?>
				</div>
			
			</div>
			
		</section>
	</section>
	<!--end wrapper-->

		<?php include('footer.php'); ?>

   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/view.contact.js"></script>
    <script type="text/javascript" src="js/jquery.gmap.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>