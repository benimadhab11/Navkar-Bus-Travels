<?php

$con=new MongoClient();
$db=$con->db;

if(!$con)
{
  die("Could not connect");
}

else
{
$seatno=$_POST['seatno'];

$from=$_POST['from'];

$to=$_POST['to'];

$boarding_point=$_POST['boarding_point'];

$Drop_point=$_POST['Drop_point'];

$Gender=$_POST['gender'];

$fname=$_POST['fname'];

$eml=$_POST['eml'];

$conno=$_POST['conno'];

$row=$db->bus3->find(array('Seat_No'=>$seatno));

if($row)
{
$db->bus3->update(array('Seat_No'=>$seatno),array('$set'=>array ('FROM'=>$from,'TO'=>$to,'BORDING_POINT'=>$boarding_point,'DROP_POINT'=>$Drop_point,'Gender'=>$Gender,'NAME'=>$fname,'Email'=>$eml,'Contact_Number'=>$conno)));
echo"record  updated";
	
}
else
{echo"Record not updated";}
}
?>
