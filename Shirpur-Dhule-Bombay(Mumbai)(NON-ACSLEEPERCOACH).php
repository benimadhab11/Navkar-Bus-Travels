<?php?>

<html>
<head>
<title>Shirpur-Dhule-Bombay(Mumbai)(NON-ACSLEEPERCOACH) seat select</title>
<script type="text/javascript">
        function validate(){
		     var x = document.forms["myForm"]["fname"].value;
              if (x == null || x == "") {
              alert("Name must be filled out");
              return false;
               }
			
             var x = document.forms["myForm"]["eml"].value;
              if (x == null || x == "") {
              alert("email must be filled out");
              return false;
               }
			   
			   var x = document.forms["myForm"]["conno"].value;
              if (x == null || x == "") {
              alert("contact no must be filled out");
              return false;
               }
			   
		  if (document.getElementById("from").value == "SelectYourStartCity")
            {
              alert("Please select your Start City from list.");
              document.getElementById("from").focus();
              return false;                                                       
            }
		 if (document.getElementById("Gender").value == "SelectYourGender")
            {
              alert("Please select your Gender from list.");
              document.getElementById("Gender").focus();
              return false;                                                       
            }
        
		 if (document.getElementById("to").value == "SelectYourDestinationCity")
            {
			  document.getElementById("to").focus();
              alert("Please select your Destination City from list.");
              return false;                                                       
            }
        
        
       
	      if (document.getElementById("boarding_point").value == "SelectYourBoardingPoint")
            {
              alert("Please select your Boarding Point from list.");
              document.getElementById("boarding_point").focus();
              return false;                                                       
            }
     
     
        		
         if (document.getElementById("Drop_point").value == "SelectYourDropPoint")
            {
              alert("Please select your Start City from list.");
              document.getElementById("Drop_point").focus();
              return false;                                                       
            }
         alert('Please cheack All Informtion ');
		 
        }   
		</script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body bgcolor="#ffffcc">

<table border=0 cellpadding=60>
<tr>
<td><img src='navkar.png' height='100' width='300'></img></td>
<td>
<h1 style=font-size:60><center> NAVKAR TRAVELS </h1></td></tr></table>
<ul id='menu' align="center" bgcolor="#000">
<li><a href="home1.php">HOME</a></li>
<li><a href="AboutUs.php">About Us</a></li>
<li><a href="BusesOnRent.php">Buses On Rent</a></li>
<li><a href="galllery.php">Gallery</a></li>
<li><a href="ContactUs.php">Contact Us</a></li>
<li><a href="login.html">Admin login</a></li>
</ul>

<center>
<h1><center>Shirpur-Dhule-Bombay(Mumbai)(NON-ACSLEEPERCOACH)</center></h1>
<h1>Select Seat AND Fill details</h1> 
<h4 style=color:red>All fields are mandatory to fill</h4>
<form method="post" name="myForm" action="Shirpur-Dhule-Bombay(Mumbai)(NON-ACSLEEPERCOACH)insert.php" onsubmit="return validate()">
<table cellspacing=20 style=font-size:20>
<tr>
<td>From:</td>
<td><select id=from  name=from>
<option value=SelectYourStartCity>Select Your Start City</option>
<option value=Dhule>Dhule</option>
<option value=Shirpur>Shirpur</option>
</select></td>


<td>To:</td>
<td><select id=to name=to>
<option value=SelectYourDestinationCity>Select Your Destination City</option>
<option value=panvel>Bombay</option>


</td>
</tr><tr>

<tr>
<td>Select Boarding Point:</td>
<td><select id="boarding_point" name="boarding_point">
<option value=SelectYourBoardingPoint>Select Your Board Point</option>
<option value="ShirpurBusStop">Shirpur Bus Stop</option>
<option value="DhuleGround">Dhule Ground</option>
</td>
</select>

</td>

<td>Select Drop Point:</td>
<td><select id="Drop_point" name="Drop_point">
<option value=SelectYourDropPoint>Select Your droping Point</option>
<option value="Bhivandi-Bypass">Bhivandi-Bypass</option>
<option value="kalyan Phata">kalyan Phata</option>
<option value="kalyan Phata">kalyan Phata</option>
<option value="Mankoli">Mankoli</option>
<option value="Kharegaon Tollnaka">Kharegaon Tollnaka</option>
<option value="Majivada">Majivada</option>
<option value="Kapoorbavadi">Kapoorbavadi</option>
<option value="Cadbowry">Cadbowry</option>
<option value="Nitin Company">Nitin Company</option>
<option value="Thane">Thane</option>
<option value="Three hath Naka">Three hath Naka</option>
<option value="Mulund Signal">Mulund Signal</option>
<option value="Aaroli Bridge">Aaroli Bridge</option>
<option value="Kanjurmarg Bridge">Kanjurmarg Bridge</option>
<option value="Ghatkoper Bridge(Ramabai Colony)">Ghatkoper Bridge(Ramabai Colony)</option>
<option value="Chambur(Amar Mahal)">Chambur(Amar Mahal)</option>
<option value="Kula Signal(Chuna Bhatti)">Kula Signal(Chuna Bhatti)</option>
<option value="Cyan Circle">Cyan Circle</option>
<option value="Matunga Circle">Matunga Circle</option>
<option value="Dadar(Chitra & Talkis)">Dadar(Chitra & Talkis)</option>
<option value="Parel">Parel</option>
<option value="K.M.Hospital">K.M.Hospital</option>
<option value="Lalbag">Lalbag</option>
<option value="Bhaigvala">Bhaigvala</option>
<option value="J.J.Hospital">J.J.Hospital</option>
<option value="Bhendi Bazar">Bhendi Bazar</option>
<option value="Cofread Market">Cofread Market</option>
<option value="Vadala Parking(Last stop)">Vadala Parking(Last stop)</option>
</select>
</td>
</tr><tr>

<tr>
<td>NAME:</td>
<td><input type="text" name="fname"></td>
<td>Select Gender</td>
<td>
<select id="Gender" name="gender">
<option value=SelectYourGender>Select Your Gender</option>
<option value="male">MALE</option>
<option value="female">FEMALE</option></td>
</select>
</td>
</tr>


<tr>
<td>Email:</td>
<td><input type="email" name="eml"></td>
<td>Contact no:</td>
<td><input type="text" name="conno"></td>
</tr>

<tr>
<td>Departure Time:</td>
<td>10:00PM</td>
<td>Arrival Time</td>
<td>7:30AM</td>
</tr>

<tr><td>Rate:</td>
<td>Rs. 550/-</td>
</tr>
<tr><td><td>
</form></center>
</form>
</center>
</table>
<h4 style=color:red>Select Seat by Clicking on radio button</h4>
<h2>Lower Seat:-</h2>
<table border=1  cellspacing=10>

<tr>
<td><input type="radio" name="seatno" value="12"/><img src="seatimage.png" height=40 width=100 title="seat no:12 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="14"/><img src="seatimage.png" height=40 width=100 title="seat no:14 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="16"/><img src="seatimage.png" height=40 width=100 title="seat no:16 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="18"/><img src="seatimage.png" height=40 width=100 title="seat no:18 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="20"/><img src="seatimage.png" height=40 width=100 title="seat no:20 double-bed"></img>
</td>
</tr>
<tr>
<td><input type="radio" name="seatno" value="11"/><img src="seatimage.png" height=40 width=100 title="seat no:11 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="13"/><img src="seatimage.png"  height=40 width=100 title="seat no:13 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="15"/><img src="seatimage.png" height=40 width=100  title="seat no:15 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="17"/><img src="seatimage.png" height=40 width=100  title="seat no:17 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="19"/><img src="seatimage.png" height=40 width=100 title="seat no:19 double-bed"></img>
</td>
</tr>
<tr><tr><tr><tr>

<tr>
<td><input type="radio" name="seatno" value="1"/><img src="seatimage.png" height=40 width=100 title="seat no:1 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="2"/><img src="seatimage.png" height=40 width=100 title="seat no:2 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="3"/><img src="seatimage.png" height=40 width=100 title="seat no:3 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="4"/><img src="seatimage.png" height=40 width=100 title="seat no:4 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="5"/><img src="seatimage.png" height=40 width=100 title="seat no:5 single-bed"></img>
</td>
</tr>
</table>

<h2>Upper Seat:-</h2>
<table border=1  cellspacing=10>
<tr>
<tr>
<td><input type="radio" name="seatno" value="22"/><img src="seatimage.png" height=40 width=100 title="seat no:22 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="24"/><img src="seatimage.png" height=40 width=100 title="seat no:24 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="26"/><img src="seatimage.png" height=40 width=100 title="seat no:26 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="28"/><img src="seatimage.png" height=40 width=100 title="seat no:28 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="30"/><img src="seatimage.png" height=40 width=100 title="seat no:30 double-bed"></img>
</td>
</tr>


<tr>
<td><input type="radio" name="seatno" value="21"/><img src="seatimage.png" height=40 width=100 title="seat no:21 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="23"/><img src="seatimage.png" height=40 width=100 title="seat no:23 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="25"/><img src="seatimage.png" height=40 width=100 title="seat no:25 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="27"/><img src="seatimage.png" height=40 width=100 title="seat no:27 double-bed"></img>
</td>
<td><input type="radio" name="seatno" value="29"/><img src="seatimage.png" height=40 width=100 title="seat no:29 double-bed"></img>
</td>
</tr>
<tr><tr><tr><tr>

<tr>
<td><input type="radio" name="seatno" value="6"/><img src="seatimage.png" height=40 width=100 title="seat no:6 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="7"/><img src="seatimage.png" height=40 width=100 title="seat no:7 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="8"/><img src="seatimage.png" height=40 width=100 title="seat no:8 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="9"/><img src="seatimage.png" height=40 width=100 title="seat no:9 single-bed"></img>
</td>
<td><input type="radio" name="seatno" value="10"/><img src="seatimage.png" height=40 width=100 title="seat no:10 single-bed"></img>
</td>
</tr>
</td>
</tr>
</table>
<br><br>

<h2><input type="submit" value="CONFIRM TICKET"></h2>
</form>
</center>
</body>
</html>
<?php?>