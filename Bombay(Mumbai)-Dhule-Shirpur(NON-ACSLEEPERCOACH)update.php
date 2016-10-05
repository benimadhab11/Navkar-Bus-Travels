<?php
$con = new MongoClient();
$db = $con->db;
$seatno=$_POST['seatno'];

if(!$con)
{
echo"connection not established";
}
$collection=$db->bus10;
$qry = array("Seat_No" => $seatno);
$cursor=$collection->findOne($qry);

echo ""; 
echo "<html>"; 
echo "<head>"; 
echo "<title>Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH)</title>"; 
echo "<link rel='stylesheet' type='text/css' href='style.css'>"; 
echo "</head>"; 
echo ""; 
echo ""; 
echo "<body bgcolor='#ffffcc'>"; 
echo "<table align=right><tr><td>
<a href='logout.php'><input type=button value='LOGOUT'></a>
</td></tr></table>
<br><br>";
echo "<center>"; 
echo "<h1 style=font-size:60><center> NAVKAR TRAVELS </h1>"; 
echo "<h1><center>Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH)</center></h1>"; 
echo "<br><br>"; 
echo "<ul id='menu' align='center' bgcolor='#000'>
<li><a href='home1.php'>HOME</a></li>
<li><a href='aboutus.php'>ABOUT US</a></li>
<li><a href='facilities.php'>FACILITIES</a></li>
<li><a href='gallery.php'>GALLERY</a></li>
<li><a href='contactus.php'>CONTACT US</a></li>
<li><a href='adminlogin.php'>ADMIN LOGIN</a></li>
</ul>";
echo ""; 
echo "<h1><center>Select Seat to update AND Fill details</h1> "; 
echo "<h4 style=color:red>*All fields are mandatory to fill</h4>"; 
echo "<form method='post' name='myForm' action='Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH)update_progres.php' onsubmit='return validate()'>"; 
echo "<center><table cellspacing=20 style=font-size:20>"; 
echo "<tr>"; 
echo ""; 
echo "<tr><td>Update Seat Number:</td>"; 
echo "<td><select id=Seat_Number name=seatno>"; 
echo "<option value='".$cursor['Seat_No']."'>".$cursor['Seat_No']."</option>"; 
echo "<option value=1>1</option>"; 
echo "<option value=2>2</option>"; 
echo "<option value=3>3</option>"; 
echo "<option value=4>4</option>"; 
echo "<option value=5>5</option>"; 
echo "<option value=6>6</option>"; 
echo "<option value=7>7</option>"; 
echo "<option value=8>8</option>"; 
echo "<option value=9>9</option>"; 
echo "<option value=10>10</option>"; 
echo "<option value=11>11</option>"; 
echo "<option value=12>12</option>"; 
echo "<option value=13>13</option>"; 
echo "<option value=14>14</option>"; 
echo "<option value=15>15</option>"; 
echo "<option value=16>16</option>"; 
echo "<option value=17>17</option>"; 
echo "<option value=18>18</option>"; 
echo "<option value=19>19</option>"; 
echo "<option value=20>20</option>"; 
echo "<option value=21>21</option>"; 
echo "<option value=22>22</option>"; 
echo "<option value=23>23</option>"; 
echo "<option value=24>24</option>"; 
echo "<option value=25>25</option>"; 
echo "<option value=26>26</option>"; 
echo "<option value=27>27</option>"; 
echo "<option value=28>28</option>"; 
echo "<option value=29>29</option>"; 
echo "<option value=30>30</option>"; 
echo "</select></td></tr>"; 
echo "<td>From:</td>"; 
echo "<td><select id=from name=from>"; 
echo "<option value='".$cursor['FROM']."'>".$cursor['FROM']."</option>"; 
echo "<option value=Borevali>Borivali</option>";
echo "<option value=Bombay>Bombay</option>";  
echo "</td>"; 
echo "<td>To:</td>"; 
echo "<td><select id=to name=to>"; 
echo "<option value='".$cursor['TO']."'>".$cursor['TO']."</option>"; 
echo "<option value=Shirpur>Shirpur</option>"; 
echo "<option value=Dhule>Dhule</option>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
echo "<tr>"; 
echo "<td>Select Boarding Point:</td>"; 
echo "<td><select id='boarding_point' name='boarding_point'>"; 
echo "<option value='".$cursor['BORDING_POINT']."'>".$cursor['BORDING_POINT']."</option>"; 
echo "<option value='Bhivandi-Bypass'>Bhivandi-Bypass</option>"; 
echo "<option value='Kalyan-Fata'>Kalyan-Fata</option>"; 
echo "<option value='Mankoli'>Mankoli</option>"; 
echo "<option value='Kharegaontolnaka'>Kharegaon tolnaka</option>"; 
echo "<option value='Manjivada'>Manjivada</option>"; 
echo "<option value='Kapoorbawadi'>Kapoorbawadi</option>"; 
echo "<option value='Cadboury' >Cadboury</option>"; 
echo "<option value='NitinCompony'>Nitin Compony</option>"; 
echo "<option value='Thane'>Thane</option>"; 
echo "<option value='TeenhathNaka'>Teenhath Naka</option>"; 
echo "<option value='MulunalSignal'>Mulunal Signal</option>"; 
echo "<option value='AroliBridge'>Aroli Bridge</option>"; 
echo "<option value='KanjwarmargeBridge'>Kanjwarmarge Bridge</option>"; 
echo "<option value='GandhiNagar'>Gandhi Nagar</option>"; 
echo "<option value='PawaiIIT(Hirandani)'>Pawai IIT(Hirandani)</option>"; 
echo "<option value='AndheriMIDC'>Andheri MIDC</option>"; 
echo "<option value='AakuratiSeep'>Aakurati Seep</option>"; 
echo "<option value='Chakala'>Chakala</option>"; 
echo "<option value='AndheriBridgeandBisleriCompany'>Andheri Bridge and Bisleri Company</option>"; 
echo "<option value='Jogeshwari'>Jogeshwari</option>"; 
echo "<option value='LalBuilding' >Lal Building</option>"; 
echo "<option value='GoregaonCheaNaka' >Goregaon Cheak Naka</option>"; 
echo "<option value='R.A.Colony' >R.A. Colony</option>"; 
echo "<option value='Malvad(ShantaramTalav-Pushpapark)'>Malvad(Shantaram Talav-Pushpapark)</option>"; 
echo "<option value='Kandevali'>Kandevali</option>"; 
echo "<option value='SamtaNagar' >Samta Nagar</option>"; 
echo "<option value='thakkarComplex' >thakkar Complex</option>"; 
echo "<option value='BhosariSaidham' >Bhosari Saidham</option>"; 
echo "<option value='TataPower' >TataPower</option>"; 
echo "<option value='BorivaliNationalPark(laststop)' >Borivali National Park(last stop)</option>"; 
echo "</select>"; 
echo "</td>"; 
echo ""; 
echo "<td>Select Drop Point:</td>"; 
echo "<td>"; 
echo "<select id='Drop_point' name='Drop_point'>"; 
echo "<option value='".$cursor['DROP_POINT']."'>".$cursor['DROP_POINT']."</option>"; 
echo "<option value='ShirpurBusStop'>Shirpur Bus Stop</option>"; 
echo "<option value='DhuleGround'>Dhule Ground</option></td>"; 
echo "</select>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
 
 
 
echo "<td>NAME:</td>"; 
echo "<td><input type='text' value='".$cursor['NAME']."' name='fname'></td>"; 
echo "<td>Select Gender</td>"; 
echo "<td>"; 
echo "<select id='Gender' name='gender'>"; 
echo "<option value='".$cursor['Gender']."'>".$cursor['Gender']."</option>"; 
echo "<option value='male'>MALE</option>"; 
echo "<option value='female'>FEMALE</option></td>"; 
echo "</select>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
echo ""; 
echo "<tr>"; 
echo "<td>Email:</td>"; 
echo "<td><input type='email' value='".$cursor['Email']."' name='eml'></td>"; 
echo "<td>Contact no:</td>"; 
echo "<td><input type='text' value='".$cursor['Contact_Number']."' name='conno'></td>"; 
echo "</tr>"; 
echo ""; 
echo "<tr><td>Rate:</td>"; 
echo "<td>Rs. 550/-</td>"; 
echo "</tr>"; 
echo "<tr><td><td>"; 
echo "</form></center>"; 
echo "</form>"; 
echo "</center>"; 
echo "</table>"; 
echo ""; 
echo "</table>"; 
echo "<br><br>"; 
echo ""; 
echo "<input type='submit' value='UPDATE TICKET'>"; 
echo "</form>"; 
echo "</center>"; 
echo "</body>"; 
echo "</html>";
?>