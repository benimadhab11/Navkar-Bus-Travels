<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus8;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];

$db->bus8->find(array("Seat_No"=>$seatno));
$db->bus8->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

