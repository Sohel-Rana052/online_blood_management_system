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
						 <li><a href="donar_details.php"><button>Receipent List</button></a></li>
         				 <li><a href="register.html"><button>Donar's Registration</button></a></li>
						 <li><a href="register.html"><button>Receipent's Registration</button></a></li>
						 <li><a href="online_blood_management.html"><button>About Us</button></a></li>
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
   <p> <h2 style="color:#903"><marquee>Donar's Registration Form</marquee></h2></p>
   </br>
   
   <form action="submit.php" method="post">
		<p><p>Name</p><input name="name" type="text" size="35"/></p>
		<p>Address</p>
		
		
		<p><input name="village" type="text" size="35""/></p>
		<p><input name="post" type="text" size="35" /></p>
		<p><input name="upazilla" type="text" size="35"/></p>
		<p><input name="district" type="text" size="35"/></p>
		<p><p>Contact No</p><input name="contact" type="text" size="35"/></p>
		<p><p>Email</p><input name="email" type="text" size="35"/></p>
		<p>Blood Group</p><p><select name="blood_group" >
			<option>---------Select--------</option>
			<option>O+</option>
			<option>O-</option>
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>AB+</option>
			<option>AB-</option>
			</select></p>
	<p>Gender</p><p><select name="gender">
		<option>---------Select--------</option>
		<option>Male</option>
		<option>Female</option>
		<option>Other</option>
		</select></p>
	
	<p>Date of Brith</p><p><select name="month">
		<option>----Select Month----</option>
		<option>January</option>
		<option>February</option>
		<option>March</option>
		<option>April</option>
		<option>May</option>
		<option>June</option>
		<option>July</option>
		<option>August</option>
		<option>September</option>
		<option>October</option>
		<option>November</option>
		<option>December</option>
		</select></p>
	<p><select name="day">
		<option>-----Select Day------</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
		<option>26</option>
		<option>27</option>
		<option>28</option>
		<option>29</option>
		<option>30</option>
		<option>31</option>
		</select></p>
		
		<p><select name="year">
		<option>-----Select Year-----</option>
		<option>1950</option>
		<option>1951</option>
		<option>1952</option>
		<option>1953</option>
		<option>1954</option>
		<option>1955</option>
		<option>1956</option>
		<option>1957</option>
		<option>1958</option>
		<option>1959</option>
		<option>1960</option>
		<option>1961</option>
		<option>1962</option>
		<option>1963</option>
		<option>1964</option>
		<option>1965</option>
		<option>1966</option>
		<option>1967</option>
		<option>1968</option>
		<option>1969</option>
		<option>1970</option>
		<option>1971</option>
		<option>1972</option>
		<option>1973</option>
		<option>1974</option>
		<option>1975</option>
		<option>1976</option>
		<option>1977</option>
		<option>1978</option>
		<option>1979</option>
		<option>1980</option>
		</select></p>
	</br></br>
	<input name="sub" type="submit" value="Submit" style="color:#990000" />
	
</form>
		
	</div>
	<div id="right">
		<div id="space_0">
			
		</div>
		<div id="add_1">
		<a href="https://www.sites.google.com/site/baowaly/" target="_blank"><img src="Capture.JPG" alt="gp" width="140" height="190"  /></a>
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
