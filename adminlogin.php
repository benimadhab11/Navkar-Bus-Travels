<?php
{
?>


<!doctype html>
<html>
<title>Admin login</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(bg2.jpg) no-repeat;background-size: 100%;">
<center>




<table>
<tr>
<td><img src="navkar.png" height=100 width=250></img></td>
<td><h1 style="color:white" >NAVKAR TRAVELS</h1></td>
</tr>
</table>
</br></br></br>

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

<h1>ADMIN LOGIN</h1><br>

<form action ="login.php" method="Post">
Username:<input type=text name="un">
<br><br><br>
Password:<input type=Password name="pswd"><br><br>
<input type="submit" value="Login" >
<a href=login.php></a>
</form>
</body>
</html>

<?php
}
?>
