<html>
<head>
<title>Delete Movie</title>
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

<body style="background-color:lightblue; text-align:center; font-size:30;">

<body>
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

<h1 style="color:black; font-size:50;">Delete Movie</h1><br><br>
<form align="center">
<strong style="font-size:30;">Please Select the Movie Category.</strong><br><br><br><br>

<a href="deleteromance.php">Romance</a><br><br>
<a href="deleteaction.php">Action</a><br><br>
<a href="deletecomedy.php">Comedy</a><br><br>
</body>
</html>