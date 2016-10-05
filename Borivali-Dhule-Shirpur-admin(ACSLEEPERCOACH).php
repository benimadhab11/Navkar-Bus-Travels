<?php
$con = new MongoClient();
$db = $con->db;

if(!$con)
{
echo"connection not established";
}
?>

<body bgcolor='#ffffcc'>
<center>
<table cellpadding=30 >
<tr>
<td><img src='navkar.png' height='100' width='300'></img></td>
<td><h1 style=font-size:70><center> NAVKAR TRAVELS </h1></td>

</tr></table>
<h2>Borilvali-Dhule-Shirpur-(AC SLEEPER COACH)</h2>
<h2>Seat Chart</h2>

<?php
$collection=$db->bus6;
$cursor=$collection->find();


 echo"<center><table border='1' cellpadding=10 cellspacing=5>
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
		</tr>";
		

if($cursor)
{
		foreach($cursor as $document)
	{
	echo "<tr>";
		echo "<td>".$document['Seat_No']."</td>";
	    echo "<td>".$document['NAME']."</td>";
		echo "<td>".$document['Gender']."</td>";
		echo "<td>".$document['FROM']."</td>";
		echo "<td>".$document['TO']."</td>";
		echo "<td>".$document['BORDING_POINT']."</td>";
		echo "<td>".$document['DROP_POINT']."</td>";
		echo "<td>".$document['Email']."</td>";
		echo "<td>".$document['Contact_Number']."</td>";
		echo "</tr>";
	}
}

echo"<br><br> <table  cellpadding=30><tr>";
echo"<td><a href='Borivali-Dhule-Shirpur (AC SLEEPER COACH).php'><input type='button' value='Add Customer'></a></input></td>";
echo"<td><a href='Borivali -Dhule-Shirpur-update(AC SLEEPER COACH).php'><input type='button' value='Update Information'></a></input></td>";
echo"<td><a href=''><input type='button' value='Delete_Total Record'></a></input></td>";
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