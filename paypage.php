<!DOCTYPE html>
<html>
	<head>
		<title>Pay Page</title>
		<style>
	table, th, td {
    border: 1px solid black;
	</style>
	<style>
body {
  margin: 0;
  font-family: Times New Roman;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: brown;
}

.topnav a.active {
  background-color: yellow;
  color: black;
}
</style>

	</head>
	
	<body style="background-color:yellow; text-align:center; font-size:30;">
	<div class="topnav">
  <a class="active" href="homeuser.php">Home</a>
  <a href="romance_home.php">Romance</a>
  <a href="comedy_home.php">Comedy</a>
  <a href="action_home.php">Action</a>
  <a href="search.php">Search</a>
  <a href="plogout.php">Log Out</a>
</div>

<h1 style="color:brown; font-size:50;">Pay Page</h1><br><br>


<form align="center" name="frm_register" id="frm_register" method="POST">
Enter Email Address    :
<input type="email" name="f_email" id="f_email">
<input type="submit" name="submit" value="Check" action="paypage.php"><br><br><br>

</form>
</body>
</html>


<?php
	
	
	if (isset($_POST['submit'])) {
		
	include "dbcon.php";
	

	
	//$sql="select email_address, address, home_phone, mobile_phone from tbl_user_details WHERE email_address = $v_email";
	
		$q = $conn->real_escape_string($_POST['f_email']);

		$sql = "SELECT * FROM tbl_user_details WHERE email_address LIKE '%$q%'";
	
	

	//echo $sql;


//print_r($ans);

//echo $ans;

/*if($ans==1)
{
	echo "   Successfully Entered";
}
else
{
	echo mysqli_error($conn);
	
}
*/
$ans = mysqli_query($conn, $sql);
$numrow = mysqli_num_rows($ans);

if($numrow==1) 
{
	echo "<table border=1>";
	echo "<table align=center>";
	
	echo "<tr>";
		echo "<td>Email</td>";
		echo "<td>Address</td>";
		echo "<td>Home Number</td>";
		echo "<td>Mobile Number</td>";
	echo "</tr>";
		
		
		
	while($row = mysqli_fetch_assoc($ans))
	{
		//echo "Student ID: " . $row["sid"]. " - Student Name: " . $row["sname"]. " - Student Username:  " . $row["suname"]. 
		//" - Student Password:  " . $row["spword"]."<br>";
		
		echo "<tr>";
		echo "<td>" . $row["email_address"]. "</td>";
		echo "<td>" . $row["address"]. "</td>";
		echo "<td>" . $row["home_phone"]. "</td>";
		echo "<td>" . $row["mobile_phone"]. "</td>";
	echo "</tr>";
?>
<form align="center" name="frm_register" id="frm_register" method="POST" action="success.php">	
Credit Card Type     :
<input type="radio" name="mastercard" value="mastercard" checked>
Master Card
<input type="radio" name="visa" value="visa">
Visa<br><br><br>		
			
Credit Card Number       :
<input type="number" name="f_creditcardno" maxlength="16" required><br><br><br>

CVV Number   :
<input type="password" name="f_cvv" maxlength="3" required><br><br><br>

Card Expiry         :
<select name="f_month" id="f_month" required>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select name="f_year" id="f_year" required>
<option value="1">2018</option>
<option value="2">2019</option>
<option value="3">2020</option>
<option value="4">2021</option>
<option value="5">2022</option>
<option value="6">2023</option>
<option value="7">2024</option>
<option value="8">2025</option>
<option value="9">2026</option>
<option value="10">2027</option>
</select><br><br><br>

<form align="center" name="frm_register" id="frm_register" method="POST" action="success.php">
<button type="submit"  action="success.php">Pay</button>
<input type="reset" name="Reset"><br><br>
</form>
<?php
    }
	
}
	else
	{
		echo mysqli_error($conn);
	}
	echo "</table>";
	echo "<br>";
	echo "<br>";

	}



?>




</body>
</html>




