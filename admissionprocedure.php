<!DOCTYPE html>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php include('nav.php'); ?>
	<!--start wrapper-->
	<section class="wrapper">
		<section class="page_head">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="page_title">
							<h2>Admission Procedure</h2>
						</div>	
						<nav id="breadcrumbs">
							<ul>
								<li>You are here:</li>
								<li>Admissions</li>
								<li>Admission Procedure</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class="content left_sidebar">
			<div class="container">
				<div class="row">
					<!--Sidebar Widget-->
					<div class="col-lg-4">
						<div class="sidebar">
							<div class="eve-tab sidebar-tab">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>
                               </ul>

                                <div id="myTabContent" class="tab-content clearfix">
                                    <div class="tab-pane fade active in" id="Popular">
                                        <?php include('newsticker.php'); ?>
                                    </div>
                                </div>
                            </div>
							
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_large">
							<h3>Admission Process</h3>
							<table border="1" bordercolor="red" width="338">
								<tr>
									<th>Class</th>
									<th width="214">Age</th>
								</tr>
								<tr>
									<td>Nursery</td>
									<td width="214">3 Years Completed</td>
								<tr>
								<tr>
									<td>LKG</td>
									<td width="214">4 Years</td>
								<tr>
								<tr>
									<td>HKG</td>
									<td width="214">5 Years</td>
								<tr>
								<tr>
									<td>1st</td>
									<td width="214">6 Years</td>
								<tr>
								<tr>
									<td>2nd</td>
									<td width="214">7 Years</td>
								<tr>
								<tr>
									<td>3rd</td>
									<td width="214">8 Years</td>
								<tr>
									<tr>
									<td>4th</td>
									<td width="214">9 Years</td>
								<tr>
								<tr>
									<td>5th</td>
									<td width="214">10 Years</td>
								<tr>
							</table>
							<h3>Documents Required</h3>
							<ul>
								<li><img src='images/arrow.png' border='0'>Birth Certificate</li>
								<li><img src='images/arrow.png' border='0'>School Leaving Certificate</li>
								<li><img src='images/arrow.png' border='0'>Previous Report Card(if applicable)</li>
								<li><img src='images/arrow.png' border='0'>Passport Size Photos(3 Nos.)</li>
								<li><img src='images/arrow.png' border='0'>Cumulative Record</li>
								<li><img src='images/arrow.png' border='0'>Aadhar Card</li>
							</ul>
							<h3>Academic/Curriculum</h3>
								<ul>
									<li><img src='images/arrow.png' border='0'>PGS follows CCE pattern- Continuous Comprehensive Evaluation.</li>
									<li><img src='images/arrow.png' border='0'>Evaluation with all essential skills.</li>
								</ul>
							<h3>Sessions</h3>
								<ul>
									<li><img src='images/arrow.png' border='0'>Admission period-February to June.</li>	
									<li><img src='images/arrow.png' border='0'>Vacation period- 10 April to 10 June.</li>	
								</ul>	
							<h3>Fees</h3>
							<ul>
								<li><img src='images/arrow.png' border='0'>The fees should be paid as specified in the fee structure in two installments.</li>
								<li><img src='images/arrow.png' border='0'> Bus - Fee has to be paid separately.</li>
								<li><img src='images/arrow.png' border='0'>Admission will be confirmed after the completion of necessary procedures and the payment of fees</li>
							</ul>
							<h3>School Timings</h3>
							<b>K.G. Section(Nursery,LKG,HKG): 08.45 a.m. to 12.45p.m.</b><br>
							<b>Primary Section(1st to 3rd Std.): 10.30 a.m. to 04.30p.m.</b>
							<h3>Discipline</h3>
							<ol>
							<li>Parents are requested to set a good example to the students by not smoking or chewing tobacco/pan in the school premises. Parents are requested to not to spit or throw litter in the school campus.</li>
							<li>Students are requested to go to assembly hall in an orderly manner as soon as the bell rings.</li>
							<li>Parents should not visit their wards or teacher in the classroom.</li>
							<li>It is important for every student to speak in English in the school premises & playground also.</li>
							<li>Student should always be neatly dressed with their shoes polished properly. Finger nails and hair should be cut and kept clean. </li>
							</ol>
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

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>