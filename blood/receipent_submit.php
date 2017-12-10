<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>blood management</title>
<link type="text/css" rel="stylesheet" href="online_blood_management.css">
</head>

<body class="fullbody">
<div id="header">
	<div id="first_header">
		<div class="nav">
	  			
		 </div>  
		  </div>  
	<h1 style="color:#CCFFFF">Online Blood Management System</h1>
</div>
<div id="heading">
	<h3><marquee>Online Blood Management System</marquee></h3>
</div>
<div id="menubar">
	<div class="nav">
	  			 <ul>
						 <li><a href="index.html"><button>Home</button></a></li>
         				 <li><a href="donar_details.php"><button>Donar List</button></a></li>
						 <li><a href="receipent_detail.php"><button>Receipent List</button></a></li>
         				 <li><a href="donar_registration.html"><button>Donar's Registration</button></a></li>
						 <li><a href="recepent_registration.html"><button>Receipent's Registration</button></a></li>
						 <li><a href="about_us.html"><button>About Us</button></a></li>
	   			</ul>
		 </div>  

</div>
	
	<div id="middle">
	
	<p id="bodytext">
		<?php
$host='localhost';
$user='root';
$pass='';
$conn=mysql_connect($host,$user,$pass);
if(!$conn)
	{
		die('Could not connect : '.mysql_error());
	}
mysql_select_db('online_blood_management');

$sql="INSERT INTO receipent_list(r_name,r_village,r_post,r_upazilla,r_district,r_national_id,r_contact,r_email,r_blood,r_gender,r_day,r_month,r_year)
VALUES('$_POST[r_name]', '$_POST[r_village]', '$_POST[r_post]', '$_POST[r_upazilla]', '$_POST[r_district]',  '$_POST[r_national_id]','$_POST[r_contact]', '$_POST[r_email]', '$_POST[r_blood]', '$_POST[r_gender]', '$_POST[r_day]', '$_POST[r_month]', '$_POST[r_year]')";	
$result=mysql_query($sql,$conn);
if(!$result)
	{
		die('Could not get data : '.mysql_error());
	}
else
	echo "Registration succesfully\n";
mysql_close($conn);	
?>
	
<div id="footer">
	<p><a href="#">Online Blood Management System</a></p>
</div>
</body>
</html>
