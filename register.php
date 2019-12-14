<html>
<head>
<title>Register page</title>
</head>
	
<body style="background-color:yellow; text-align:center;">

<h1 style="color:brown; font-size:50;">Register</h1>
<form align="center" name="frm_register" id="frm_register" method="POST" action="pregister.php">

First Name  :
<input type="text" name="f_firstname" required><br><br><br>

Last Name   :
<input type="text" name="f_lastname"required><br><br><br>

Username    :
<input type="text" name="f_username" required><br><br><br>

Password    :
<input type="password" name="f_password" required><br><br><br>

Confirm Password     :
<input type="password" name="f_confirmpassword" required><br><br><br>

Gender      :
<input type="radio" name="Gender" value="Male" checked>
Male
<input type="radio" name="Gender" value="Female">
Female<br><br><br>

Email Address    :
<input type="email" name="f_email" required><br><br><br>


Address     :
<textarea rows="2" cols="20" name="f_address" value="f_address" required>

</textarea><br><br><br>

City        :
<select name="f_city" id="f_city">
<option value="Colombo">Colombo</option>
<option value="Kandy">Kandy</option>
<option value="Jaffna">Jaffna</option>
<option value="Galle">Galle</option>
<option value="Trincomalee">Trincomalee</option>
</select><br><br><br>

Country        :
<select name="f_country" id="f_country">
<option value="Sri Lanka">Sri Lanka</option>

</select><br><br><br>

Home Phone     :
<input type="number" name ="f_homenumber" maxlength="10" required><br><br><br>


Mobile Phone     :
<input type="number" name ="f_mobilenumber" maxlength="10" required><br><br><br>


User Role        :
<select name="f_userrole" id="f_userrole">
<option value="User">User</option>
</select><br><br><br>

<button type="submit"  href="index.php">Register</button>
<input type="reset" name="Reset">
</form>
</body>
</html>