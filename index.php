<!DOCTYPE HTML DOCUMENT>
<html>
<head>
<title>Login Page</title>

</head>
<body style="background-color:lightgreen">
<body>

<h1 style="color:red; text-align:center; font-size:50;">Welcome To eCorner DVD Web Store</h1><br>
<h1 style ="color:orange; text-align:center; font-size:30;">Login</h1><br><br>
<form align="center" name="frm_login" id="frm_login" method="POST" action="plogin.php">
Username :  <br><br>   <input type="text" name="f_username"><br><br><br><br>
Password :  <br><br>   <input type="password" name="f_password"><br><br><br>
Remember me:
<input type="checkbox" name="f_rememberme" id="f_rememberme" checked><br><br><br>

<button type="submit">Login</button>
<input type="reset" name="Reset"><br><br><br><br><br>
<a href="register.php">Register</a><br><br><br>
<a href="homeuserguest.php">Visit as Guest</a><br><br><br>

<?php

$v_username = "hashiq";
$v_password = "hashiq123";
$cookie_name = "user";

if(isset($_POST["f_rememberme"]))
{
	setcookie("user", $_POST["f_username"], time() + (86400 * 30), "/");
}

if(isset($_COOKIE["user"]))
{
	echo "User " . $_COOKIE["user"] . "     is logged in!";
}
else
{
	echo "User is not logged in!";
}
echo "<br>";
echo "<br>";
echo "<br>";


if(isset($_POST["btn_submit"]))
{
	if($_POST["f_username"] == $v_username && $_POST["f_password"] == $v_password)
	{
		echo "Connected Successfully";
	}
	else
	{
		echo "Connection Failed";
	}
	
}
	
?>

<?php
	if(isset($_POST["btn_submit"]))
	{
		$_SESSION["username"] = $_POST["f_username"];
		$_SESSION["password"] = $_POST["f_password"];
	}
	
?>
</form>
</body>
</html>

