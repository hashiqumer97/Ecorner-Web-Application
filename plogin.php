 <?php

 
	 
	$v_suname=$_POST['f_username'];
	$v_spword=$_POST['f_password'];
	
	


	include "dbcon.php";
	
	
	$sql="select username, password, user_role from tbl_user_details 
	where username = '" . $v_suname . "' and password='" . $v_spword . "'";
	
	

	//echo $sql;

$ans = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($ans);
$numrow = mysqli_num_rows($ans);
$_SESSION['user_role']=$row['user_role'];


//echo $ans;
mysqli_close($conn);

if($numrow==1)
{
			if ($row['user_role']=="Admin")
			{ 
 
                               header ("location: homeadmin.php"); 
                             
			}
			else if ($row['user_role']=="User")
			{ 
                               $_SESSION['user_role']=$row['user_role'];
 
                               header ("location: homeuser.php"); 
                             
 
			}
}
else 
{
echo '<script type="text/javascript">'; 
echo 'alert("Incorrect Username or Password");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
 
}


?>