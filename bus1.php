<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus1;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];

$db->bus1->find(array("Seat_No"=>$seatno));
$db->bus1->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

