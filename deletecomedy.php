<html>
<head>
<title>Delete Comedy Movie</title>
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
<h1 style="color:black; font-size:50;">Delete Comedy Movie</h1>
<form align="center" name="frm_register" id="frm_register" method="POST" action="cdeletecomedy.php">

Movie ID  :
<input type="text" name="f_movieid"><br><br><br>

<input type="submit" name="submit" value="Delete" action="paypage.php">
<input type="reset" name="Reset">
</form>



</body>
</html>