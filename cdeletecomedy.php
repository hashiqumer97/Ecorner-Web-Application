<?php

	$v_movieid=$_POST['f_movieid'];
	
	//$v_sname=$_POST['f_name'];
	//$v_suname=$_POST['f_uname'];
	//$v_spword=$_POST['f_password'];
/*	
	echo "Student ID:" . $v_sid . "<br>";
	echo "Student Name:" . $v_sname . "<br>";
	echo "Student Username:" . $v_suname . "<br>";
	echo "Student Password:" . $v_spword . "<br>";
*/	


	include "dbcon.php";
	
	
	$sqlcomedy="delete from tbl_comedy_movies where movie_id = " . $v_movieid;
	
	

	//echo $sql;

$anscomedy = mysqli_query($conn, $sqlcomedy);

echo $anscomedy;

if($anscomedy==1)
{
	echo '<script>alert("Successfully Deleted!")</script>';
	echo '<script>window.location.href = "deletecomedy.php";</script>';
}
else
{
	echo mysqli_error($conn);
	
}



?>