<?php
$con = new MongoClient();
$db = $con->db;

if(!$con)
{
echo"connection not established";
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor='#ffffcc'>
<table align=right><tr><td>
<a href="logout.php"><input type=button value="LOGOUT"></a>
</td></tr></table>
<br><br>
<center>
<table cellpadding=30 >
<tr>
<td><img src='navkar.png' height='100' width='300'></img></td>
<td><h1 style=font-size:70><center> NAVKAR TRAVELS </h1></td>

</tr></table>
<ul id='menu' align="center" bgcolor="#000">
<li><a href="home1.php">HOME</a></li>
<li><a href="aboutus.php">ABOUT US</a></li>
<li><a href="facilities.php">FACILITIES</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
</ul>
<h2>Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH).php</h2>
<h2>Seat Chart</h2>

<?php
$collection=$db->bus10;
$cursor=$collection->find();


 echo"<table border=1 cellpadding=10 cellspacing=5>
		<tr>
		<th>Seat_No</th>
		<th>NAME</th>
		<th>Gender</th>
		<th>START CITY</th>
		<th>DESTINATION CITY</th>
		<th>BORDING_POINT</th>
		<th>DROP_POINT</th>
		<th>Email</th>
		<th>Contact_Number</th>
		<th>Actions</th>
		</tr>";


if($cursor)
{
		foreach($cursor as $document)
	{
	echo "<tr>";
		echo "<td id='del'>".$document['Seat_No']."</td>";
	    echo "<td>".$document['NAME']."</td>";
		echo "<td>".$document['Gender']."</td>";
		echo "<td>".$document['FROM']."</td>";
		echo "<td>".$document['TO']."</td>";
		echo "<td>".$document['BORDING_POINT']."</td>";
		echo "<td>".$document['DROP_POINT']."</td>";
		echo "<td>".$document['Email']."</td>";
		echo "<td>".$document['Contact_Number']."</td>";
		echo "<td><form method='post' action='bus10.php'>
        <input type='submit' name='action' value='Delete'/>
        <input type='hidden' name='seatno' value='".$document['Seat_No']."'/>
      </form>
	  <form method='post' action='Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH)update.php'>
	    <input type='submit' name='action' value='Update'/>
		<input type='hidden' name='seatno' value='".$document['Seat_No']."'/>
		</form>
    </td>";
		echo "</tr>";

	}
}

echo"<br><br> <table  cellpadding=30><tr>";
echo"<td><a href='Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH).php'><input type='button' value='Add Customer'></input></a></td>";
echo"</tr>";
echo"</table>";
echo"</center>";
echo"</body>";

echo"<table>";
echo"<tr>";
echo"<td><img src='minicoach4.jpg' height='350' width='400'></img></td>";
echo"<td><img src='P_20150927_000953_LL.jpg' height='350' width='400'></img></td>";
echo"<td><img src='minicoach6.jpg' height='350' width='400'></img></td>";
echo"<td><img src='P_20150927_000531_LL.jpg' height='350' width='400'></img></td>";
echo"</tr>";
echo"</table>";
?>
