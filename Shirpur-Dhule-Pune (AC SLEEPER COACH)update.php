<?php
echo "<html>"; 
echo "<head>"; 
echo "<title>Shirpur-Dhule-Pune (AC SLEEPER COACH)
Select seat update</title>"; 
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

echo "<body bgcolor='#ffffcc'>"; 
echo "<center>"; 
echo "<h1 style=font-size:60><center> NAVKAR TRAVELS </h1>"; 
echo "<h1><center>Shirpur-Dhule-Pune (AC SLEEPER COACH)Select seat"; 
echo "</center></h1>"; 
echo "<br><br>"; 

echo "<h1><center>Select Seat to update AND Fill details</h1> "; 
echo "<h4 style=color:red>*All fields are mandatory to fill</h4>"; 
echo "<form method='post' name='myForm' action='Shirpur-Dhule-Pune(AC SLEEPER COACH)update_progres.php' onsubmit='return validate()'>"; 
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
echo"<tr>";
echo"<tr>";
 
echo "<td>From:</td>"; 
echo "<td><select id=from name=from>"; 
echo "<option name=SelectYourStartCity>Select Your Start City</option>"; 
echo "<option name=Nashik>Nashik</option>"; 
echo "<option name=Dhule>Dhule</option>"; 
echo "<option name=Shirpur>Shirpur</option>"; 
echo "</td>"; 
echo ""; 
echo ""; 
echo "<td>To:</td>"; 
echo "<td><select id=to name=to>"; 
echo "<option name=SelectYourDestinationCity>Select Your Destination City</option>"; 
echo "<option name=Pune>Pune</option>"; 
echo "<option name=Nashik>Nashik</option></td>"; 
echo "</tr>"; 
echo ""; 
echo "<tr></tr>"; 
echo ""; 
echo "<tr>"; 
echo "<td>Select Boarding Point:</td>"; 
echo "<td><select id=\"boarding_point\" name=\"boarding_point\">"; 
echo "<option name=SelectYourboardPoint>Select Your Board Point</option>"; 
echo "<option name=\"ShirpurBusStop\">Shirpur Bus Stop"; 
echo "<option name=\"DhuleGround\">Dhule Ground"; 
echo "<option name=\"Nashik\">Nashik</td>"; 
echo "</td>"; 
echo "</select>"; 
echo ""; 
echo "</td>"; 
echo ""; 
echo "<td>Select Drop Point:</td>"; 
echo "<td><select id=\"drop_point\" name=\"drop_point\">"; 
echo "<option name=SelectYourdrop_Point>Select Your droping Point</option>"; 
echo "<option name=\"Chakan\">Chakan"; 
echo "<option name=\"Mulshi\">Mulshi"; 
echo "<option name=\"Bhosari\">Bhosari"; 
echo "<option name=\"Nashik Fata\">Nashik Fata"; 
echo "<option name=\"Kasarwadi\">Kasarwadi"; 
echo "<option name=\"Ophapodi\">Ophapodi"; 
echo "<option name=\"Khadaki_Station\">Khadaki  Station"; 
echo "<option name=\"ShivajiNagar(Engineeringcollege)\">ShivajiNagar (Engineering college)"; 
echo "<option name=\"Sangavigaon\">Sangavigaon"; 
echo "<option name=\"Kalewadi fata 14 Number Busstop\">Kalewadi fata 14 Number Busstop"; 
echo "<option name=\"Dange chowk\">Dange chowk "; 
echo "<option name=\"Chaphekar Chowk\">Chaphekar Chowk"; 
echo "<option name=\"Akurdi(Khandoba_chowk)\"> Akurdi (Khandoba chowk)"; 
echo "<option name=\"NigadiBridge\"> Nigadi Bridge"; 
echo "<option name=\" Shakti-Bhakti Chowk(Last stop)\"> Shakti-Bhakti Chowk(Last stop)</select>"; 
echo "</td>"; 
echo "</tr><tr>";
 
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

echo "<tr>"; 
echo "<td>Email:</td>"; 
echo "<td><input type='email' name='eml'></td>"; 
echo "<td>Contact no:</td>"; 
echo "<td><input type='text' name='conno'></td>"; 
echo "</tr>"; 

echo "<tr><td>Rate:</td>"; 
echo "<td>Rs. 550/-</td>"; 
echo "</tr>"; 
echo "<tr><td><td>"; 
echo "</form></center>"; 
echo "</form>"; 
echo "</center>"; 
echo "</table>"; 

echo "</table>"; 
echo "<br><br>"; 
 
echo "<input type='submit' value='UPDATE TICKET'>"; 
echo "</form>"; 
echo "</center>"; 
echo "</body>"; 
echo "</html>";
?>