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
<div id="bbody">
	<div id="left">
		<div id="sb">
			<p>Search By</p>
		</div>
		
		<br/>
		<form action="search.php" method="post">
		<div id="s_blood">
			<p>Select Blood Group </p>
		</div>
		<p><select name="s_blood" >
		<option>------Select------</option>
			<option>O+</option>
			<option>O-</option>
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>AB+</option>
			<option>AB-</option>
		</select>
		</p>
		<div id="sd">
			<p>Select District</p>
		</div>
		<p><select name="s_district" >
		<option>------Select------</option>
		<option>---Barisal Division---</option>
			<option>Barguna</option>
			<option>Barisal</option>
			<option>Bhola</option>
			<option>Jhalokati</option>
			<option>Patuakhali</option>
			<option>Pirojpu</option>
			<option>---Chittagong Division---</option>
			<option>Bandarban</option>
			<option>Brahmanbaria</option>
			<option>Chandpur</option>
			<option>Chittagong</option>
			<option>Comilla</option>
			<option>Cox's Bazar</option>
			<option>Feni</option>
			<option>Khagrachhari</option>
			<option>Lakshmipur</option>
			<option>Noakhali</option>
			<option>Rangamati</option>
			<option>---Dhaka Division---</option>
			<option>Dhaka</option>
			<option>Faridpur</option>
			<option>Gazipur</option>
			<option>Gopalganj</option>
			<option>Jamalpur</option>
			<option>Kishoreganj</option>
			<option>Madaripur</option>
			<option>Manikganj</option>
			<option>Munshiganj</option>
			<option>Mymensingh</option>
			<option>Narayanganj</option>
			<option>Narsingdi</option>
			<option>Netrakona</option>
			<option>Rajbari</option>
			<option>Shariatpur</option>
			<option>Sherpur</option>
			<option>Tangail</option>
			<option>---Khulna Division---</option>
			<option>Bagerhat</option>
			<option>Chuadanga</option>
			<option>Jessore</option>
			<option>Khulna</option>
			<option>Kushtia</option>
			<option>Magura</option>
			<option>Meherpur</option>
			<option>Narail</option>
			<option>Satkhira</option>
			<option>---Rajshahi Division---</option>
			<option>Bogra</option>
			<option>Joypurhat</option>
			<option>Naogaon</option>
			<option>Natore</option>
			<option>Chapainawabganj</option>
			<option>Pabna</option>
			<option>Rajshahi</option>
			<option>Sirajganj</option>
			<option>Dinajpur</option>
			<option>Gaibandha</option>
			<option>Kurigram</option>
			<option>Lalmonirhat</option>
			<option>Nilphamari</option>
			<option>Panchagarh</option>
			<option>Rangpur</option>
			<option>Thakurgaon</option>
			<option>---Sylhet Division---</option>
			<option>Habiganj</option>
			<option>Moulvibazar</option>
			<option>Sunamganj</option>
			<option>Sylhet</option>
			

		</select>
		</p>
        </br>
        <p><input name="sub1" type="submit" value="Search"/></p>
		</form>
		 </div>  

	
	
	
	<div id="middle">
   <h1>Congratulation one record succesfully deleted</h1>
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
$d_national_id =$_REQUEST['d_national_id'];
 
mysql_query("DELETE FROM donar_list WHERE d_national_id='$d_national_id'");

mysql_close($conn);
?>
  
	</div>
	<div id="right">
		<div id="space_0">
			
		</div>
		<div id="add_1">
		<a href="https://www.bikroy.com" target="_blank"><img src="bikroy.JPG" alt="gp" width="140" height="190"  /></a>
		</div>
		
		<div id="space_1">
			
		</div>
		<div id="add_2">
		<a href="http://www.bd.airtel.com/" target="_blank"><img src="index.png" alt="gp" width="140" height="140" /></a>
		</div>
		<div id="space_2">
			
		</div>
		<div id="add_3">
		<a href="http://www.grameenphone.com/" target="_blank"><img src="gp.jpg" alt="gp" width="140" height="140" /></a>
			
		</div>
		
	</div>
</div>
<div id="footer">
	<p><a href="#">Online Blood Management System</a></p>
</div>
</body>
</html>


