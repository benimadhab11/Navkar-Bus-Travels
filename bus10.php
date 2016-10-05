<?php

$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus10;
if(!$con)
{
echo"connection not established";

}

$seatno=$_POST['seatno'];

$db->bus10->find(array("Seat_No"=>$seatno));
$db->bus10->remove(array("Seat_No"=>$seatno));
header('Location: Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH)-admin.php');
?>

