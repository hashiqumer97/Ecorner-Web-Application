<?php

	$v_firstname=$_POST['f_firstname'];
	$v_lastname=$_POST['f_lastname'];
	$v_username=$_POST['f_username'];
	$v_password=$_POST['f_password'];
	$v_confirmpassword=$_POST['f_confirmpassword'];
	$v_gender=$_POST['Gender'];
	$v_email=$_POST['f_email'];
	$v_address=$_POST['f_address'];
	$v_city=$_POST['f_city'];
	$v_country=$_POST['f_country'];
	$v_homenumber=$_POST['f_homenumber'];
	$v_mobilenumber=$_POST['f_mobilenumber'];
	$v_userrole=$_POST['f_userrole'];
	
	$v_homenumberlength= strlen($v_homenumber);
	$v_mobilenumberlength= strlen($v_mobilenumber);
	
	
/*	
	echo "Student ID:" . $v_sid . "<br>";
	echo "Student Name:" . $v_sname . "<br>";
	echo "Student Username:" . $v_suname . "<br>";
	echo "Student Password:" . $v_spword . "<br>";
*/	
	
	include "dbcon.php";
	
$sql="insert into tbl_user_details (first_name, last_name, username, password, gender, email_address, address, city, country, home_phone, mobile_phone, user_role) values 
	('" . $v_firstname . "', '" . $v_lastname . "', '" . $v_username . "', '" . $v_password . "', '" . $v_gender . "', '" . $v_email . "', '" . $v_address . "', '" . $v_city . "', '" . $v_country . "', '" . $v_homenumber . "', '" . $v_mobilenumber . "', '" . $v_userrole . "' );";	
          	

echo $sql;

$ans = mysqli_query($conn, $sql);

echo $ans; 

if($v_password != $v_confirmpassword){
	
	echo '<script>alert("Password is Not Matching!")</script>';
	echo '<script>window.location.href = "register.php";</script>';
			
}
else if($ans==1)
{
	
	
	echo '<script>alert("Registration Success!")</script>';
	echo '<script>window.location.href = "index.php";</script>';
	
}
else	
{
			
	echo '<script>alert("Registration Failed Due to Incorrect Details!")</script>';
	echo '<script>window.location.href = "register.php";</script>';
	
}

	
		


			

mysqli_close($conn);


?>

