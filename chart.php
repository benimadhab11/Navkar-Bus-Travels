<?php

$mongo = new MongoClient();
$collection1 = $mongo->db->bus1;
$collection2 = $mongo->db->bus2;
$collection3 = $mongo->db->bus3;
$collection4 = $mongo->db->bus4;
$collection5 = $mongo->db->bus5;
$collection6 = $mongo->db->bus6;
$collection7 = $mongo->db->bus7;
$collection8 = $mongo->db->bus8;
$collection9 = $mongo->db->bus9;
$collection10 = $mongo->db->bus10;

if(!$mongo)
{
echo"connection not established";
}


?>

<html>
<title>Charts</title>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Bus Route', 'No. of customers'],
        ['Shirpur - Dhule-Malegoan-Manmad-Shirdi-Ahemadnagar-Pune (AC SLEEPER COACH)',     <?php echo  $collection1->count();?>],
        ['Pune-Ahemadnagar-Shirdi-Manmad-Malegaon-Dhule-Shirpur(AC SLEEPER COACH)',     <?php echo  $collection2->count();?>],
        ['Shirpur - Dhule-Nashik-Pune (NON-AC SLEEPER COACH)',     <?php echo  $collection3->count();?>],
        ['Pune-Nashik- Dhule-Shirpur(NON-AC  SLEEPER COACH)',     <?php echo  $collection4->count();?>],
        ['Shirpur -Dhule-Borivali(AC SLEEPER COACH)',     <?php echo  $collection5->count();?>],
        ['Borivali -Dhule-Shirpur (AC SLEEPER COACH)',     <?php echo  $collection6->count();?>],
        ['Shirpur-Dhule-panvel(AC SLEEPER COACH)',     <?php echo  $collection7->count();?>],
        ['Panvel -Dhule-Shirpur (AC SLEEPER COACH)',     <?php echo  $collection8->count();?>],
        ['Shirpur - Dhule-Bombay(Mumbai)(NON-AC SLEEPER COACH)',     <?php echo  $collection9->count();?>],
        ['Bombay(mumbai)-Dhule-Shirpur (NON-ACSLEEPER COACH )',     <?php echo  $collection10->count();?>]
        ]);

      var options = {
        title: 'No of customers for each route',
         is3D: true
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(bg3.jpg) no-repeat;background-size: 100%;">
<center>
<table>
<tr>
<td><img src="navkar.png" height=100 width=250></img></td>
<td><h1 style="color:grey" >NAVKAR TRAVELS</h1></td>
</tr>
</table>
<br><br>

<ul id='menu' align="center">
<li><a href="index.html">HOME</a></li>
<li><a href="aboutus.html">ABOUT US</a></li>
<li><a href="facilities.html">FACILITIES</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="contactus.html">CONTACT US</a></li>
<li><a href="routes.html">ROUTES</a></li>
<li><a href="chart.php">CHARTS</a></li>
<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
</ul>
<br><br>
<h1>Charts</h1>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

</body>
</html>
