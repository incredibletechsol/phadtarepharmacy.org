<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	
	<!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>

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
        <div class="slider-wrapper">
            <div class="slider">
                <div class="fs_loader"></div>
                 <div class="slide">
                    <img src="images/fraction-slider/base.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="850">     
                </div>
			    <div class="slide">
                    <img src="images/fraction-slider/1.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="850">     
                </div>
                <div class="slide">
                    <img src="images/fraction-slider/2.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="850">    
                </div>
                <div class="slide">
                    <img src="images/fraction-slider/3.jpg" data-in="fade" data-out="fade" width="1920" height="850"/>
                </div>
                
    
            </div>
        </div>
		<!--End Slider-->
	
	<!--start wrapper-->
	<section class="wrapper">
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
							<div class="col-lg-6 ">
								<div class="dividerHeading">
									<h4><span>Our Specialities</span></h4>

								</div>
								<ul class="list_style circle">
									<li><a href="#">College is situated at Hygienic & Peaceful Environment Area at lap of mother nature in the Kalamb.</a></li>
                                    <li><a href="#">Well Planned Infrastructure.</a></li>
                                    <li><a href="#">Well Equipped Laboratories.</a></li>
                                    <li><a href="#">Qualified, Experienced, Talented & Dedicated Teaching Faculty.</a></li>
                                    <li><a href="#">College is running Four Year B.Pharm. Curriculum and Two Year D.Pharm.</a></li> 
                                    <li><a href="#">Well Furnished Rich Library Resources.</a></li>
                                    <li><a href="#">Modern Well Furnished Lecture Theatres.</a></li>
                                    <li><a href="#"> Advanced Computer Laboratories with Un-limited Internet Facilities.</a></li>
                                    <li><a href="#">Well Furnished Modern Separate Hostel Facilities for boys and girls.</a></li>
                                    <li><a href="#">Large playground for outdoor games and Indoor Stadium.</a></li>
                                    <li><a href="#">100 % Placement through Campus Placement Cell.</a></li>
                                    <li><a href="#">Hygienic fresh food and catering through common canteen at reasonable rate.</a></li> 

									
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
	</section>
	<!--end wrapper-->
	<?php include('tabslide.php'); ?>

	<!--Start recent work-->
	<section class="latest_work">
		<div class="container">
			<div class="row sub_content">
				<div class="carousel-intro">
					<div class="col-md-12">
						<div class="dividerHeading">
							<h4><span>Photo Gallery</span></h4>
						</div>
						<div class="carousel-navi">
							<div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
							<div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="jcarousel recent-work-jc">
					<ul class="jcarousel-list">
						<!-- Photo Gallery Start-->
						<?php
						include('conn.php');
						$result = mysqli_query($con,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
						while($row = mysqli_fetch_array($result))
						{
						echo "<li class='col-sm-3 col-md-3 col-lg-3'>";
							echo "<div class='hoverlay'>";
									echo "<img src='gallery/$row[1]' height='200'/>";
										echo "<div class='hoverlay-box'>";
											echo  "<div class='hoverlay-data'>";
												echo "<span>$row[2]</span>";
												echo "<a href='gallery/$row[1]' class='hover-zoom mfp-image'>";
												echo " <i class='fa fa-search'></i></a>";
											echo "</div>";
									echo "</div>";
							echo "</div>";		
						echo "</li>";
						}
						?>
						<!-- Photo Gallery End-->
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--Start recent work-->
	
	<!--end wrapper-->
	

	</section>

   	<?php include('footer.php'); ?>
	


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
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
    <script>
        $(window).load(function(){
            $('.slider').fractionSlider({
                'fullWidth': 			true,
                'controls': 			true,
                'responsive': 			true,
                'dimensions': 			"1920,450",
                'increase': 			true,
                'pauseOnHover': 		true,
                'slideEndAnimation': 	true,
                'autoChange':           true
            });
        });
    </script>
</body>
</html>


    