<html>
	<head>
		<title>Search Movies</title>
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
<h1 style="color:brown; font-size:50;">Search Movies</h1><br>
		<form method="post" action="search.php">
			<input type="text" name="q" placeholder="Search Query...">
			<select name="column">
				<option value="moviename">Movie Name</option>
			</select>
			<input type="submit" name="submit" value="Search">
			<button type="reset" value="Reset">Reset</button>
		</form>
	</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "root", "ecorner_web_hashiq_csd55");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "movie_name" && $column != "year_of_release"))
			$column = "movie_name";

		$sql = "SELECT * FROM tbl_romance_movies WHERE $column LIKE '%$q%'";
		$sqlcomedy = "SELECT * FROM tbl_comedy_movies WHERE $column LIKE '%$q%'";
		$sqlaction = "SELECT * FROM tbl_action_movies WHERE $column LIKE '%$q%'";
		$ans = mysqli_query($connection, $sql);
		$anscomedy = mysqli_query($connection, $sqlcomedy);
		$ansaction = mysqli_query($connection, $sqlaction);
		$numrow = mysqli_num_rows($ans);
		$numrowcomedy = mysqli_num_rows($anscomedy);
		$numrowaction = mysqli_num_rows($ansaction);

		if($numrow>0 | $numrowcomedy>0 | $numrowaction>0) {
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
		echo "<td>Category</td>";
		
		
	echo "</tr>";
			
				while($row = mysqli_fetch_array($ans))
			{
				echo "<tr>";
		echo "<td>" . $row["movie_id"]. "</td>";
		echo "<td>" . $row["movie_name"]. "</td>";
		echo "<td>" . $row["name_of_director"]. "</td>";
		echo "<td>" . $row["name_of_music_director"]. "</td>";
		echo "<td>" . $row["name_of_producer"]. "</td>";
		echo "<td>" . $row["cast"]. "</td>";
		echo "<td>" . $row["year_of_release"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "<td><a href='romance_home.php'>" . $row['category'] . "</a></td>";
		
	echo "</tr>";
	
    }
			while($row = mysqli_fetch_array($anscomedy))
			{
				echo "<tr>";
		echo "<td>" . $row["movie_id"]. "</td>";
		echo "<td>" . $row["movie_name"]. "</td>";
		echo "<td>" . $row["name_of_director"]. "</td>";
		echo "<td>" . $row["name_of_music_director"]. "</td>";
		echo "<td>" . $row["name_of_producer"]. "</td>";
		echo "<td>" . $row["cast"]. "</td>";
		echo "<td>" . $row["year_of_release"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "<td><a href='comedy_home.php'>" . $row['category'] . "</a></td>";
		
	echo "</tr>";
    }
	
			while($row = mysqli_fetch_array($ansaction))
			{
				echo "<tr>";
		echo "<td>" . $row["movie_id"]. "</td>";
		echo "<td>" . $row["movie_name"]. "</td>";
		echo "<td>" . $row["name_of_director"]. "</td>";
		echo "<td>" . $row["name_of_music_director"]. "</td>";
		echo "<td>" . $row["name_of_producer"]. "</td>";
		echo "<td>" . $row["cast"]. "</td>";
		echo "<td>" . $row["year_of_release"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "<td><a href='action_home.php'>" . $row['category'] . "</a></td>";
		
	echo "</tr>";
    }
		
		} else
			echo "Your search query doesn't match any data!";
	}
?>