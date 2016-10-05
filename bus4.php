<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus4;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];
$db->bus4->find(array("Seat_No"=>$seatno));
$db->bus4->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

