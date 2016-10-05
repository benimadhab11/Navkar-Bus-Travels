<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus6;
if(!$con)
{
echo"connection not established";

}
$seatno=$_POST['seatno'];
$row=$db->bus6->find(array("Seat_No"=>$seatno));
if($row)
{
	$db->bus6->remove(array("Seat_No"=>$seatno));

echo"record deleted successfully";	
	
}
else
{
echo"record doesn't exit";
}

?>

