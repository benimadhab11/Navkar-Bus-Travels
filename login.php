<?php
 session_start();

  $m = new MongoClient();

  $db = $m->mydb;

     $collection = $db->login;

	 if(!$m)
	 {
	  die("connection failed");
	 }
	 else
	 {
	   $username=($_POST['un']);
	   $password=($_POST['pswd']);


       {
     if ($username=="admin" && $password=="password") {



	 ?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(images/bg2.jpg) no-repeat;background-size: 100%;">

<h2>WELCOME</h2>

<table align=right><tr><td>
<a href="logout.php"><input type=button value="LOGOUT"></a>
</td></tr></table>
<br><br>

<center>
<table>
<tr>
<td><img src="images/navkar.png" height=100 width=250></img></td>
<td><h1 style="color:black" >NAVKAR TRAVELS</h1></td>
</tr>
</table>
<br><br>
<ul id='menu' align="center" bgcolor="#000">
<li><a href="index.html">HOME</a></li>
<li><a href="aboutus.html">ABOUT US</a></li>
<li><a href="facilities.html">FACILITIES</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="contactus.html">CONTACT US</a></li>
<li><a href="routes.html">ROUTES</a></li>
<li><a href="chart.php">CHARTS</a></li>
<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
</ul>
<br><br><br>
<select name="list" id="list" accesskey="target">
  <option value='none' selected>Choose a Bus</option>
  <option value="Shirpur-Dhule-Pune-admin(ACSLEEPERCOACH).php">1.Shirpur-Dhule-Pune(AC SLEEPER COACH).</option>
  <option value="Pune-Ahemadnagar-Shirpur-admin(AC SLEEPER COACH).php">2.Pune-Dhule-Shirpur(AC SLEEPER COACH)</option>
  <option value="Shirpur-Dhule-Pune-admin(NON-ACSLEEPER COACH).php">3.Shirpur-Dhule-Pune(NON-AC SLEEPER COACH)</option>
	<option value="Pune-Nashik-Dhule-Shirpur-admin(NON-ACSLEEPER COACH).php">4.Pune-Dhule-Shirpur(NON-AC  SLEEPER COACH)</option>
	<option value="Shirpur-Dhule-Borivali-admin(ACSLEEPERCOACH).php">5.Shirpur-Dhule-Borivali(AC SLEEPER COACH)</option>
	<option value="Borivali-Dhule-Shirpur-admin(ACSLEEPERCOACH).php">6.Borivali-Dhule-Shirpur(AC SLEEPER COACH)</option>
	<option value="Shirpur-Dhule-Panvel-admin(ACSLEEPERCOACH).php">7.Shirpur-Dhule-panvel(AC SLEEPER COACH)</option>
	<option value="Panvel-Dhule-Shirpur-admin(AC SLEEPER COACH).php">8.Panvel-Dhule-Shirpur(AC SLEEPER COACH)</option>
	<option value="Shirpur-Dhule-Bombay(Mumbai)-admin(NON-ACSLEEPERCOACH).php">9.Shirpur-Dhule-Bombay(Mumbai)(NON-AC SLEEPER COACH)</option>
	<option value="Bombay(Mumbai)-Dhule-Shirpur(NON-ACSLEEPERCOACH)-admin.php">10.Bombay(Mumbai)-Dhule-Shirpur(NON-AC SLEEPER COACH )</option>
</select>
<br><br>

<input type=button value="View Bus Chart" onclick="goToNewPage()" />
</center>
</body>
</html>


<?php
}
 else {
      echo "Incorrect Login";
      }
	 }
	 }
 ?>
