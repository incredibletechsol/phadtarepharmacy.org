<!--Start Header-->
	<header id="header" class="clearfix">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span><i class="fa fa-phone"></i>Phone: +91 7066307777 / 7972404918 / 75174422000</span>
                        <span><i class="fa fa-envelope"></i>Email: pharmacy.kalamb@phadtarepharmacy.org,dnyankala20@gmail.com</span>
                    </div>
					<!--
                    <div class="col-sm-5 top-info">
                        <ul>
                            <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
					-->
                </div>
            </div>
        </div>
        <!-- LOGO bar -->
       <div id="logo-bar" class="clearfix">
           <!-- Container -->
           <div class="container">
               <div class="row">
                   <!-- Logo / Mobile Menu -->
                   <div class="col-xs-12">
                       <div id="logo">
                           <a href="index.php"><img src="images/logo.png" /></a>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Container / End -->
       </div>
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php
					  $pageName = basename($_SERVER['PHP_SELF']);
					  if($pageName == "index.php")
							{
							echo "<li class='active'><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='committees.php'>Committees</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "intro.php" || $pageName == "aboutdkkkp.php" || $pageName == "presidentsmessage.php" || $pageName == "secretarymessage.php" || $pageName == "ceomessage.php" || $pageName == "principalmessage.php" || $pageName == "missionvision.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li class='active'><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='committees.php'>Committees</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					 if($pageName == "teaching.php" || $pageName == "nonteaching.php" || $pageName == "supporting.php" || $pageName == "career.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='committees.php'>Committees</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "committees.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='committees.php'>Committees</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "courses.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='committees.php'>Committees</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "contactus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='committees.php'>Committees</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "labs.php" || $pageName == "computerlab.php" || $pageName == "boyshostel.php" || $pageName == "library.php" || $pageName == "guesthouse.php" || $pageName == "transport.php" || $pageName == "canteen.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>President Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='courses.php'>Courses</a></li>";
							echo "<li><a href='#'>Facilities</a>";
							echo "<ul class='dropdown-menu active'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='committees.php'>Committees</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					?>		
				</ul>
			</div>	
		</div>	
	</div>	
</div>			
</header>	