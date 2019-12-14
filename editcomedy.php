<html>
<head>
<title>Edit Comedy Movie</title>
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
	
<body style="background-color:lightblue; text-align:center;">
<div class="topnav">
  <a class="active" href="homeadmin.php">Home</a>
  <a href="romance_home_admin.php">Romance</a>
  <a href="comedy_home_admin.php">Comedy</a>
  <a href="action_home_admin.php">Action</a>
  <a href="addmovie.php">Add Movie</a>
  <a href="modifymovie.php">Modify Movie</a>
  <a href="searchadmin.php">Search</a>
  <a href="plogout.php">Log Out</a>
</div>
<h1 style="color:black; font-size:50;">Edit Comedy Movie</h1>
<form align="center" name="frm_register" id="frm_register" method="POST" action="editcomedy.php">

Movie ID  :
<input type="text" name="f_movieid">
<input type="submit" name="submit" value="Check" action="paypage.php"><br><br>

</form>


<?php

	
	
	if (isset($_POST['submit'])) {
		
	include "dbcon.php";
	

	
	//$sql="select email_address, address, home_phone, mobile_phone from tbl_user_details WHERE email_address = $v_email";
	
		$q = $conn->real_escape_string($_POST['f_movieid']);

		$sql = "SELECT * FROM tbl_comedy_movies WHERE movie_id LIKE '%$q%'";
	
	

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
	
	
	echo "<tr>";
		echo "<td>Movie ID</td>";
		echo "<td>Movie Name</td>";
		echo "<td>Name of Director</td>";
		echo "<td>Name of Music Director</td>";
		echo "<td>Name of Producer</td>";
		echo "<td>Cast</td>";
		echo "<td>Year of Release</td>";
		echo "<td>Price</td>";
		echo "<td>Picture</td>";
		echo "<td>Category</td>";
	echo "</tr>";
		
		
		
	while($row = mysqli_fetch_assoc($ans))
	{
		//echo "Student ID: " . $row["sid"]. " - Student Name: " . $row["sname"]. " - Student Username:  " . $row["suname"]. 
		//" - Student Password:  " . $row["spword"]."<br>";
		
		echo "<tr>";
		echo "<td>" . $row["movie_id"]. "</td>";
		echo "<td>" . $row["movie_name"]. "</td>";
		echo "<td>" . $row["name_of_director"]. "</td>";
		echo "<td>" . $row["name_of_music_director"]. "</td>";
		echo "<td>" . $row["name_of_producer"]. "</td>";
		echo "<td>" . $row["cast"]. "</td>";
		echo "<td>" . $row["year_of_release"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "<td>" . $row["picture"]. "</td>";
		echo "<td>" . $row["category"]. "</td>";
		
	echo "</tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
?>

<br />

<form align="center" name="frm_register" id="frm_register" method="POST" action="ceditcomedy.php">
Movie ID  :
<input type="text" name="f_movieidupdate" required><br><br><br>

Movie Name  :
<input type="text" name="f_moviename" required><br><br><br>

Director Name   :
<input type="text" name="f_directorname" required><br><br><br>

Music Director Name   :
<input type="text" name="f_musicdirectorname" required><br><br><br>

Producer Name    :
<textarea rows="3" cols="20" name="f_producername" value="f_producername" required>

</textarea><br><br><br>

Cast     :
<textarea rows="5" cols="20" name="f_cast" value="f_cast" required>

</textarea><br><br><br>

Year of Release   :
<select name="f_yearofrelease" id="f_yearofrelease" required>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select><br><br><br>

Price    :
<select name="f_price" id="f_price" required>
<option value="1000">1000.00</option>
<option value="1500">1500.00</option>
<option value="2000">2000.00</option>
<option value="2500">2500.00</option>
<option value="3000">3000.00</option>
<option value="3500">3500.00</option>
<option value="4000">4000.00</option>
<option value="4500">4500.00</option>
<option value="5000">5000.00</option>
<option value="5500">5500.00</option>
<option value="6000">6000.00</option>
<option value="6500">6500.00</option>
<option value="7000">7000.00</option>
<option value="7500">7500.00</option>
<option value="8000">8000.00</option>
<option value="8500">8500.00</option>
<option value="9000">9000.00</option>
<option value="9500">9500.00</option>
</select><br><br><br>

Picture   :
<input type="file" name="f_picture" required><br><br><br>

Category       :
<select name="f_category" id="f_category">
<option value="Comedy">Comedy</option>
</select><br><br><br>

<form align="center" name="frm_register" id="frm_register" method="POST" action="ceditcomedy.php">
<button type="submit"  href="editmovie.php">Update</button>
<input type="reset" name="Reset">

</form>


<?php
    }
	
}
	else
	{
		echo mysqli_error($conn);
	}
	
	echo "<br>";
	echo "<br>";

	}
?>

</body>
</html>