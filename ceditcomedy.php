<?php	
	$v_movieid=$_POST['f_movieidupdate'];
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
	

	
	$sqlcomedy="update tbl_comedy_movies set movie_name='" . $v_moviename . "',
	name_of_director='" . $v_directorname . "',
	name_of_music_director='" . $v_musicdirectorname . "', name_of_producer='" . $v_producername . "', cast='" . $v_cast . "', year_of_release='" . $v_yearofrelease . "', price='" . $v_price . "', picture='" . $v_picture . "', category='" . $v_category . "' where movie_id = " . $v_movieid;
	

	//echo $sql;

$anscomedy = mysqli_query($conn, $sqlcomedy);

echo $anscomedy;


			
if($anscomedy==1)
{
	echo '<script>alert("Successfully Updated!")</script>';
	echo '<script>window.location.href = "editcomedy.php";</script>';
}
else
{
	echo mysqli_error($conn);
	
	
}



mysqli_close($conn);


?>