<?php
echo ""; 
echo "<html>"; 
echo "<head>"; 
echo "<title>Borivali-Dhule-Shirpur(ACSLEEPERCOACH)"; 
echo "Select seat</title>"; 
echo "<script type='text/javascript'>"; 
echo "        function validate(){"; 
echo "		     var x = document.forms['myForm']['fname'].value;"; 
echo "              if (x == null || x == '') {"; 
echo "              alert('Name must be filled out');"; 
echo "              return false;"; 
echo "               }"; 
echo "			"; 
echo "             var x = document.forms['myForm']['eml'].value;"; 
echo "              if (x == null || x == '') {"; 
echo "              alert('email must be filled out');"; 
echo "              return false;"; 
echo "               }"; 
echo "			   "; 
echo "			   var x = document.forms['myForm']['conno'].value;"; 
echo "              if (x == null || x == '') {"; 
echo "              alert('contact no must be filled out');"; 
echo "              return false;"; 
echo "               }"; 
echo "			   "; 
echo "		  if (document.getElementById('from').value == 'SelectYourStartCity')"; 
echo "            {"; 
echo "              alert('Please select your Start City from list.');"; 
echo "              document.getElementById('from').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "		 if (document.getElementById('Gender').value == 'SelectYourGender')"; 
echo "            {"; 
echo "              alert('Please select your Gender from list.');"; 
echo "              document.getElementById('Gender').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "        "; 
echo "		 if (document.getElementById('to').value == 'SelectYourDestinationCity')"; 
echo "            {"; 
echo "			  document.getElementById('to').focus();"; 
echo "              alert('Please select your Destination City from list.');"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "        "; 
echo "	      if (document.getElementById('boarding_point').value == 'SelectYourBoardingPoint')"; 
echo "            {"; 
echo "              alert('Please select your Boarding Point from list.');"; 
echo "              document.getElementById('boarding_point').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "     "; 
echo "     "; 
echo "        		"; 
echo "         if (document.getElementById('Drop_point').value == 'SelectYourDropPoint')"; 
echo "            {"; 
echo "              alert('Please select your Start City from list.');"; 
echo "              document.getElementById('Drop_point').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "         alert('Please cheack All Informtion ');"; 
echo "		 "; 
echo "        }   "; 
echo "		</script>"; 
echo "<link rel='stylesheet' type='text/css' href='style.css'>"; 
echo "</head>"; 
echo ""; 
echo ""; 
echo "<body bgcolor='#ffffcc'>"; 
echo "<center>"; 
echo "<h1 style=font-size:60><center> NAVKAR TRAVELS </h1>"; 
echo "<h1><center>Borivali -Dhule-Shirpur(AC SLEEPER COACH)"; 
echo "</center></h1>"; 
echo "<br><br>"; 

echo "<h1><center>Select Seat to update AND Fill details</h1> "; 
echo "<h4 style=color:red>*All fields are mandatory to fill</h4>"; 
echo "<form method='post' name='myForm' action='Borivali-Dhule-Shirpur(ACSLEEPERCOACH)update_progres.php' onsubmit='return validate()'>"; 
echo "<center><table cellspacing=20 style=font-size:20>"; 
echo "<tr>"; 
echo ""; 
echo "<tr><td>Select Seat Number to be update</td>"; 
echo "<td><select id=Seat_Number name=seatno>"; 
echo "<option value=SelectYourSeatNumber>---Select Seat Number to Update---</option>"; 
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
echo "<option value=SelectYourStartCity>---Select Your Start City---</option>"; 
echo "<option value=Borevali>Borivali</option>"; 
echo "</td>"; 
echo "<td>To:</td>"; 
echo "<td><select id=to name=to>"; 
echo "<option value=SelectYourDestinationCity>Select Your Destination City</option>"; 
echo "<option value=Shirpur>Shirpur</option>"; 
echo "<option value=Dhule>Dhule</option>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
echo "<tr>"; 
echo "<td>Select Boarding Point:</td>"; 
echo "<td><select id='boarding_point' name='boarding_point'>"; 
echo "<option value=SelectYourBoardingPoint>Select Your Boarding Point</option>"; 
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
echo "<option value=SelectYourDropPoint>Select Your Drop Point</option>"; 
echo "<option value='ShirpurBusStop'>Shirpur Bus Stop</option>"; 
echo "<option value='DhuleGround'>Dhule Ground</option></td>"; 
echo "</select>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
 
echo ""; 
echo "<tr>"; 
echo "<td>NAME:</td>"; 
echo "<td><input type='text' name='fname'></td>"; 
echo "<td>Select Gender</td>"; 
echo "<td>"; 
echo "<select id='Gender' name='gender'>"; 
echo "<option value=SelectYourGender>Select Your Gender</option>"; 
echo "<option value='male'>MALE</option>"; 
echo "<option value='female'>FEMALE</option></td>"; 
echo "</select>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
echo ""; 
echo "<tr>"; 
echo "<td>Email:</td>"; 
echo "<td><input type='email' name='eml'></td>"; 
echo "<td>Contact no:</td>"; 
echo "<td><input type='text' name='conno'></td>"; 
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