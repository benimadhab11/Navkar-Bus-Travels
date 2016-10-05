<?php

// Connect to MongoDB server
$mongo = new Mongo();

// Use database 'db' and collection 'bus5'
$collection = $mongo->db->bus5;

if(!$mongo)
{
echo"connection not established";
}

$seatno=$_POST['seatno'];

$from=$_POST['from'];

$to=$_POST['to'];

$boarding_point=$_POST['boarding_point'];

$Drop_point=$_POST['Drop_point'];

$Gender=$_POST['gender'];

$fname=$_POST['fname'];

$eml=$_POST['eml'];

$conno=$_POST['conno'];

$document=array("Seat_No"=>$seatno,"FROM"=>$from,"TO"=>$to,"BORDING_POINT"=>$boarding_point,"DROP_POINT"=>$Drop_point,"Gender"=>$Gender,"NAME"=>$fname,"Email"=>$eml,"Contact_Number"=>$conno);

try {
    $collection->insert($document, array("safe" => true));
		echo"<h2><center><br><br>YOUR FOLLOWING DETAILS HAVE BEEN SUCCESSFULLY SUBMITED!!</h2>";
		echo"<br><br>";
		echo"<center><table border='1'cellspacing='20' cellpadding='10'>";
		echo"<tr><td>Seat No:</td><td>",$document['Seat_No'],"</td></tr>";
        echo"<tr><td>NAME:</td><td>",$document['NAME'],"</td></tr>";
		echo"<tr><td>Gender:</td><td>",$document['Gender'],"</td></tr>";
		echo"<tr><td>START CITY:</td><td>",$document['FROM'],"</td></tr>";
		echo"<tr><td>DESTINATION CITY:</td><td>",$document['TO'],"</td></tr>";
		echo"<tr><td>BORDING_POINT:</td><td>",$document['BORDING_POINT'],"</td></tr>";
		echo"<tr><td>DROP_POINT:</td><td>",$document['DROP_POINT'],"</td></tr>";
		echo"<tr><td>Email:</td><td>",$document['Email'],"</td></tr>";
		echo"<tr><td>Contact_Number:</td><td>",$document['Contact_Number'],"</td></tr>";
		echo "</tr>";
		echo"<h2>Your BOOKING Will be Confirmed After payment of 550/- on Office</h2>";
		
}
catch (MongoCursorException $e) {
echo '<script language="javascript">';
echo 'alert("This seat is already Booked please select another Seat")';
echo '</script>';

}

// Add unique index for field 'Seat_no'
$collection->ensureIndex(array('Seat_No'=>1), array("unique"=>true));
?>