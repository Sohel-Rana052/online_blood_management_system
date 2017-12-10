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
						 <li><a href="#"><button>Receipent List</button></a></li>
         				 <li><a href="donar_registration.html"><button>Donar's Registration</button></a></li>
						 <li><a href="recepent_registration.html"><button>Receipent's Registration</button></a></li>
						 <li><a href="about_us.html"><button>About Us</button></a></li>
	   			</ul>
		 </div>  

</div>
<div id="donner_list">
<p><marquee direction="right" >Donner List</marquee></p>
</div>

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
$sql='SELECT * 
FROM receipent_list';	
$result=mysql_query($sql,$conn);
if(!$result)
	{
		die('Could not get data : '.mysql_error());
	}
echo "<table border=1 width=100%>
	<tr>
		<th>Name</th>
		<th>Village/Street</th>
		<th>Post Office</th>
		<th>Upazilla</th>
		<th>District</th>
		<th>National ID/Student ID</th>
		<th>Contact No</th>
		<th>Email</th>
		<th>Blood Group</th>
		<th>Gender</th>
		<th>Day</th>
		<th>Month</th>
		<th>Year</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>";
	


while($row=mysql_fetch_array($result))
	{
		echo "<tr>
				<td>".$row["r_name"]."</td>
				<td>".$row["r_village"]."</td>
				<td>".$row["r_post"]."</td>
				<td>".$row["r_upazilla"]."</td>
				<td>".$row["r_district"]."</td>
				<td>".$row["r_national_id"]."</td>
				<td>".$row["r_contact"]."</td>
				<td>".$row["r_email"]."</td>
				<td>".$row["r_blood"]."</td>
				<td>".$row["r_gender"]."</td>
				<td>".$row["r_day"]."</td>
				<td>".$row["r_month"]."</td>
				<td>".$row["r_year"]."</td>
				<td> <a href='receipent_update.php?r_national_id=".$row['r_national_id']."'><button>Edit</button></a></td>
				<td> <a href='receipent_delete.php?r_national_id=".$row['r_national_id']."'><button>Delete</button></a></td>
			</tr>";
		
		
	}	
echo "</table>";	
mysql_close($conn);	
?>

<div id="footer">
	<p><a href="#">Online Blood Management System</a></p>
</div>
</body>
</html>
