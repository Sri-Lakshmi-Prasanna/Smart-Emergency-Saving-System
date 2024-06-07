<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTER</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" type="text/css" >
<link href="style_register.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 align="center" style="color: purple"> SMART EMERGENCY SAVING SYSTEM
</h1>
<div class="register">
<h1>REGISTER (New User)</h1>
<form method="post" >
<label for="username">
<i class="fas fa-user"></i>
</label>
<h4 style="color: blue"> User Name :
<input type="text" name="username" placeholder="User_Name" required></h4>
<label for="mobile">
<i class="fas fa-mobile"></i>
</label>
<h4 style="color: blue"> Mobile Number :
<input type="text" name="Phone_Number" placeholder="Phone Number" required></h4>
<label for="password">
<i class="fas fa-lock"></i>
</label>
<h4 style="color: blue"> Password :
<input type="password" name="password" placeholder="Password" required></h4>
<label for="Family1">
<i class="fas fa-mobile"></i>
</label>
<h4 style="color: blue"> Family Number_1 :
<input type="text" name="Family_Number_1" placeholder="Family Number 01"
required></h4>
<input type="submit" name="submit" value="Register">
</form>
<h3 align="center" style="color: red"> OR </h3>
<nav>
<ul>
<li><a href="home_page.html.html" ><h4 style="color: green"> HOME: To main page
</h4></a></li>
</ul>
</nav>
</div>
</body>
</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "sess_db";
// Create connection
$conn=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $Phone_Number = $_POST['Phone_Number'];
    $password = $_POST['password'];
    $Family = $_POST['Family_Number_1'];
    $sql = "INSERT INTO user_details(User_Name,Mobile,Password,Family_Number_1)
    values('$username','$Phone_Number','$password','$Family')";
    if (mysqli_query($conn,$sql))
    {
        echo "<script>alert(' Registered sucessfully');</script>";
    }
    else
    {
        echo "<script>alert('Registration failed');</script>";
    }
//mysqli_close($conn);
}
?>