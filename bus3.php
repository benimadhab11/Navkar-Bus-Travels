<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus3;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];
$db->bus3->find(array("Seat_No"=>$seatno));
$db->bus3->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

