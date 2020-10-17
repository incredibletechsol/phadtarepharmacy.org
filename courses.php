<!DOCTYPE html>

<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	

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

		<section class="page_head" data-href="images/page_header.jpg">

			<div class="container">

				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">

						<div class="page_title">

						<h2>Courses</h2>

						</div>

						<nav id="breadcrumbs">

							<ul>

								<li>You are here:</li>
                                <li><a href="index.php">Home</a></li>
								<li>Courses</li>

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
    <h3>D-Pharm</h3>
						<p align="justify">
                        
						    In India, Diploma in Pharmacy (often shortened as DPharm or DPharma) is an entry-level tertiary pharmacy credential. It is obtained following two-year of training. Students can enroll in the course after successfully completing higher secondary education in science stream with physics, chemistry and either biology or maths as subjects. After obtaining the diploma, registration with the pharmacy council is required to be a registered pharmacist. A D.Pharm holder can also enroll for a professional (undergraduate) degree course of Bachelor of Pharmacy via lateral entry scheme.
A diploma holder can be employed as a registered pharmacist in a hospital or pharmacy dispensing drugs and pharmaceuticals. It is mandatory that at least one person employed in a pharmacy be a qualified and registered pharmacist.

						</p>
						 <h3>B-Pharm</h3>
                        	<p align="justify">
                           
                            A Bachelor of Pharmacy (abbreviated B Pharm or PharmB or BS Pharm) is an undergraduate academic degree in the field of pharmacy. In many countries, this degree is a prerequisite for registration to practice as a pharmacist. Since both PharmB and PharmD are prerequisites to license in most western countries they’re considered equivalent. In many western countries, the foreign graduates with BPharm, PharmB or BS Pharm practice similarly as PharmD graduates. It is analogous to MBBS vs. MD where MBBS is foreign equivalent of MD. It is training to understand the properties and impacts of medicines and developing the skills required to counsel patients about their use.
B Pharm holders can work in several fields such as being a pharmacist, patient counseling, doing further studies such as master's degree, working in a university as a lecturer, or working as a drug information specialist.
In some countries, it has been superseded by the Doctor of Pharmacy (PharmD) and Master of Pharmacy (MPharm) degrees. In the United States, this degree was granted as the baccalaureate pharmacy degree only at Washington State University, where it has now been superseded by the PharmD degree. The degree previously offered in the US—and the required degree in Canada—is the Bachelor of Science in Pharmacy. In countries including Canada, UK, Australia and New Zealand, BPharm/BS Pharm/PharmB are prerequisite for practicing as a Pharmacist. These degrees are awarded per the British tradition and considered as foreign equivalents of PharmD.

                            </p>
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