<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "root", "ecorner_web_hashiq_csd55");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'movie_id'			=>	$_GET["id"],
				'movie_name'			=>	$_POST["hidden_name"],
				'price'		=>	$_POST["hidden_price"],
				'quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'movie_id'			=>	$_GET["id"],
			'movie_name'			=>	$_POST["hidden_name"],
			'price'		=>	       $_POST["hidden_price"],
			'quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["movie_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="action_homeguest.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Comedy Movies</title>
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
  <a class="active" href="homeuserguest.php">Home</a>
  <a href="romance_homeguest.php">Romance</a>
  <a href="comedy_homeguest.php">Comedy</a>
  <a href="action_homeguest.php">Action</a>
  <a href="searchguest.php">Search</a>
  <a href="index.php">Exit</a>
 
</div>
		<br />
		<div class="container">
			<br />
			
			
			<h1 style="color:brown; font-size:50;">Select Movie - <a title="Action Movies">Action Movies</a></h1><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_action_movies ORDER BY movie_id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0);
				
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="action_homeguest.php?action=add&id=<?php echo $row["movie_id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["picture"]; ?>" class="img-responsive" width="30%" height="30%" /><br />

						<h4 class="text-info"><?php echo $row["movie_name"]; ?></h4>

						<h4 class="text-danger">LKR. <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["movie_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Movie Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["movie_name"]; ?></td>
						<td><?php echo $values["quantity"]; ?></td>
						<td>LKR. <?php echo $values["price"]; ?></td>
						<td>LKR. <?php echo number_format($values["quantity"] * $values["price"], 2);?></td>
						<td><a href="action_homeguest.php?action=delete&id=<?php echo $values["movie_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["quantity"] * $values["price"]);
						}
					?>
					<tr>
					<form align="center" name="frm_register" id="frm_register" method="POST" action="index.php">
						<td colspan="3" align="right">Total</td>
						<td align="right">LKR. <?php echo number_format($total, 2); ?></td>
						<td><button type="submit"  href="index.php">Pay</button></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>