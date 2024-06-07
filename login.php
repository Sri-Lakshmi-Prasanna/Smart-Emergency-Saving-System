<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>USER LOGIN</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
type="text/css" >
<link href="style_login.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 align="center" style="color: purple"> SMART EMERGENCY SAVING SYSTEM
</h1>
<div class="login">
<h1>LOGIN (Existing User)</h1>
<form method="post" autocomplete="off">
<label for="username">
<i class="fas fa-user"></i>
</label>
<h4 style="color: blue"> User Name :
<input type="text" name="username" placeholder="Username" id="username"
required></h4>
<label for="password">
<i class="fas fa-lock"></i>
</label>
<h4 style="color: blue"> Password :
<input type="password" name="password" placeholder="Password" id="password"
required></h4>
<input type="submit" name="login" value="Login">
<h3 align="center" style="color: red"> OR </h3>
<nav>
<ul>
<li><a href="home_page.html.html" ><h4 style="color: green"> HOME: To main page
</h4></a></li>
</ul>
</nav>
</form>
</div>
</body>
</html>
<?php
$host="localhost";
$user="root";
$password="";
$db="sess_db";
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['login'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user_details where User_Name='".$uname."'AND Password='".$password."' limit 1";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        //header('Location:thingspeak.php');
        echo "<script>alert(' You Have Successfully Logged in');</script>";
        header('Location:thingspeak.php');
    }
    else{
        echo "<script>alert('You Have Entered Incorrect Password');</script>";
    }
    $con->close();
    }
?>