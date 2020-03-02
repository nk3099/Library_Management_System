<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Login</title>
<link rel="stylesheet" href="/asset/css/masterlogin.css">
</head>
<body>
<div class="login-box">
<h2>Library Management Admin Login</h2> <br>
<form action="" method="post">
<label>Username :</label>
<input id="name" name="username" placeholder="enter your username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
