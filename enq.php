<?php
if(isset($_POST['submit_btn']))
{
include('conn.php');

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobno=$_POST['contact'];
	$message=$_POST['message'];
	
	$query="insert into tbl_enquiry(name,email,contact,message) values('$name','$email','$mobno','$message')";

	//mysql_query($query)  or die('Not Executed');

	
	$mess="Hi ".$name.",<BR><BR>Thank you for contacting us , Our respective Team will  revert back to you soon.<BR><BR>Thanks & Regards <BR> Phadtare Global School<BR><BR>"."<img src='http://dkkkppgs.com/testing/images/logo.png'>"."<BR><BR>(This is auto generated mail please do not reply.)";
	$to="pgs.kalamb@dkkkppgs.com";
	$msg="Enquiry Details:<BR>Name :".$name."<BR>Email : ".$email."<BR>Contact No:".$mobno."<BR>Enquiry:".$message."<BR><BR>Thanks & Regards <BR> Phadtare Global School<BR><BR>"."<img src='http://dkkkppgs.com/images/logo.png'>"."<BR><BR>(This is auto generated mail please do not reply.)";
	$sub1="Enquiry by ".$name;
	$sub="Phadtare Global School";
	echo "<script> window.location='contactus.php?msg=succenquiry'</script>";
	//mail($email,$sub,$mess,$headers);
	$r="-f"."dkkkpmba@lin6.plreseller.com";
	mail($to,$sub1,$msg,$headers,$r);
}	
?>