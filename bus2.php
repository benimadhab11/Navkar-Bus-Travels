<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus2;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];
$db->bus2->find(array("Seat_No"=>$seatno));
$db->bus2->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

