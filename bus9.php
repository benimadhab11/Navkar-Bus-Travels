<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus9;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];

$db->bus9->find(array("Seat_No"=>$seatno));
$db->bus9->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

