<script src="assets/js/jquery-1.10.2.js"></script>
<?php
include("conn.php");
include('MyLogPHP.class.php');
$log = new MyLogPHP('logs/logs.log');
?>
<style>
	
	.img-500
		{
		height : 100px;
		width  : 100px;
		}
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:99998;
		  background-color: #4D4D4D;
		  display:none;
		}  
		
		#boxes .window
		{
		  position:absolute;
		  left:0;
		  top:0;
		  width:350px;
		  height:150px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 4px solid #333333;
		  
		  -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;
		  margin-left : 0px;
		}
		
		#boxes #dialog
		{
		  width:350px; 
		  height:150px;
		  padding:0px;
		  background-color: #FFFFFF;
		}	
		
	</style>
<!-- Insert Code -->	
<?php
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "save")
				{
				$title = $_POST['title'];
				$fileName = $_FILES['photo']['name'];
				$target_path = "../gallery/";
				$target_path=$target_path.basename($fileName);
				
				if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
					{
					$gallery_insert = "INSERT INTO tbl_gallery(name,title) values('$fileName','$title')";
				
					$log->info("Inserting new Gallery Data :::".$gallery_insert);						 
				
					mysqli_query($con,$gallery_insert) or die(mysql_error());
				
					$log->info("Gallery Data inserted");
					
					$message="DKKKPPGS.COM :: 1 Photo Inserted";
		
					}
				?>
				
				<script type="text/javascript">
				$(document).ready(function() {	
			
					var id = '#dialog';
				
					//Get the screen height and width
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					//Set heigth and width to mask to fill up the whole screen
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					//transition effect		
					$('#mask').fadeIn(800);	
					$('#mask').fadeTo("slow",0.8);	
				
					//Get the window height and width
					var winH = $(window).height();
					var winW = $(window).width();
						  
					//Set the popup window to center
					$(id).css('top',  winH/2-$(id).height()/2 -50);
					$(id).css('left', winW/2-$(id).width()/2);
				
					//transition effect
					$(id).fadeIn(500); 	
				
				//if close button is clicked
				$('.window .close').click(function (e) {
					//Cancel the link behavior
					e.preventDefault();
					
					$('#mask').hide();
					$('.window').hide();
				});		
				
				//if mask is clicked
				$('#mask').click(function () {
					$(this).preventDefault();
					$(this).hide();
					$('.window').hide();
				});		
				
			});
	
			</script>
		<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='gallery.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Photo Uploaded Successfully.</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
				<?php
				}
		}
?>	
<!-- Delete Code -->
<?php
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "delete")
				{
				$id = $_GET['id'];
				$fetch_existing_photo_query="SELECT name FROM tbl_gallery where photoid='$id'";
				$existing_photo_rs= mysqli_query($con,$fetch_existing_photo_query);
				
				while($exiting_photo_row = mysqli_fetch_array($existing_photo_rs)) 
			     {
					$target_path="../gallery/";
			        $utemp=$target_path.$exiting_photo_row[0];
			        unlink($utemp);	
				}
				$gallery_delete = "delete from tbl_gallery where photoid='$id'";
				$log->info("Deleting Gallery Data :::".$gallery_delete);						 
				mysqli_query($con,$gallery_delete) or die(mysql_error());
				$log->info("Gallery  Data Deleted");
				$message="DKKKPPGS.COM :: 1 Photo Deleted";

				?>
				
				<script type="text/javascript">
				$(document).ready(function() {	
			
					var id = '#dialog';
				
					//Get the screen height and width
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					//Set heigth and width to mask to fill up the whole screen
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					//transition effect		
					$('#mask').fadeIn(800);	
					$('#mask').fadeTo("slow",0.8);	
				
					//Get the window height and width
					var winH = $(window).height();
					var winW = $(window).width();
						  
					//Set the popup window to center
					$(id).css('top',  winH/2-$(id).height()/2 -50);
					$(id).css('left', winW/2-$(id).width()/2);
				
					//transition effect
					$(id).fadeIn(500); 	
				
				//if close button is clicked
				$('.window .close').click(function (e) {
					//Cancel the link behavior
					e.preventDefault();
					
					$('#mask').hide();
					$('.window').hide();
				});		
				
				//if mask is clicked
				$('#mask').click(function () {
					$(this).preventDefault();
					$(this).hide();
					$('.window').hide();
				});		
				
			});
	
			</script>
		<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='gallery.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Photo Deleted Successfully.</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
				<?php
				}
		}
?>	
