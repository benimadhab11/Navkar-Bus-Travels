<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus7;
if(!$con)
{
echo"connection not established";

}
$seatno=$_POST['seatno'];
$db->bus7->find(array("Seat_No"=>$seatno));
$db->bus7->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

