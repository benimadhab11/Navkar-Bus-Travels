<?php
$con = new MongoClient();
$db = $con->db;
   $collection = $db->bus5;
if(!$con)
{
echo"connection not established";

}
//Seat_No
$seatno=$_POST['seatno'];
//$cursor=$db->bus6->find(array("NAME"=>$fname));
$db->bus5->find(array("Seat_No"=>$seatno));
$db->bus5->remove(array("Seat_No"=>$seatno));
echo"record deleted successfully";
?>

