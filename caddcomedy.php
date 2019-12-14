<?php


	
	$v_moviename=$_POST['f_moviename'];
	$v_directorname=$_POST['f_directorname'];
	$v_musicdirectorname=$_POST['f_musicdirectorname'];
	$v_producername=$_POST['f_producername'];
	$v_cast=$_POST['f_cast'];
	$v_yearofrelease=$_POST['f_yearofrelease'];
	$v_price=$_POST['f_price'];
	$v_picture=$_POST['f_picture'];
	$v_category=$_POST['f_category'];
	
	
/*	
	echo "Student ID:" . $v_sid . "<br>";
	echo "Student Name:" . $v_sname . "<br>";
	echo "Student Username:" . $v_suname . "<br>";
	echo "Student Password:" . $v_spword . "<br>";
*/	
	
	include "dbcon.php";
	
	$sqlcomedy="insert into tbl_comedy_movies (movie_name, name_of_director, name_of_music_director, name_of_producer, cast, year_of_release, price, picture, category) values 
	('" . $v_moviename . "', '" . $v_directorname . "', '" . $v_musicdirectorname . "', '" . $v_producername . "', '" . $v_cast . "', '" . $v_yearofrelease . "', '" . $v_price . "', '" . $v_picture . "', '" . $v_category . "');";
	
	

	echo $sqlcomedy;

$anscomedy = mysqli_query($conn, $sqlcomedy);

echo $anscomedy;


			
if($anscomedy==1)
{
	echo '<script>alert("Successfully Inserted!")</script>';
	echo '<script>window.location.href = "addromance.php";</script>';
}
else
{
	echo '<script>alert("Failed to Insert Record!")</script>';
	echo '<script>window.location.href = "addcomedy.php";</script>';
	
	
}



mysqli_close($conn);


?>