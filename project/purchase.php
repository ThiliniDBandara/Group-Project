<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "73_27");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{	
	
$item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
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
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
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
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="purchase.php"</script>';
			}
		}
	}
}

?>



<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="iif.css" rel="stylesheet" />

<title>Tile Lanka online ordering</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">





</head>
<body bgcolor="#999999">
<div class="row">

<div id="header"  >
<a href="assignment.html"><img src="Capture6.PNG"  /></a>
 <img src="MEW.PNG"/  >
 
 
 <div class="navbar" style="float:right;">
  <a href="inquiry.html">Login</a>
  <div class="navbar" style="float:right;">
  <a href="inquiry.html">Register</a>
  &nbsp;
  <div class="navbar" style="float:right;">
  <a href="inquiry.html">Feedback</a>
</div>
</div>
</div>
</div>
</div>



<div class="row">
<div class="topnav">


      <div class="dropdown"  >
    <button class="dropbtn" ><i class="fa fa-bars"></i>
     
    </button>
    <div class="dropdown-content">
      <a href="Products.html">PRODUCTS</a>
      <a href="Services.html">SERVICES</a>
      <a href="about.html">ABOUT</a>
       <a href="location.html">LOCATION</a>
    </div>
  </div> 
  
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>
<div class="row">
&nbsp;
</div>

<!-- Purchase form starts-->
<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">ONLINE ORDERING</a></h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="purchase.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

<h4 class="text-info"><?php echo $row["p_name"]; ?></h4>

<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>" />

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
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Remove</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="purchase.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
                    <tr>
                    <td align="right"><input name="dfd" type="button" value="PURCHASE">
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
<?php

function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}
?>

	</div>       

<div id="footer">
<br>
  <p>Privacy Policies</p>
    <p>Terms & Conditions</p>
      <a href="Sitemap1.png" class="nounderline" style="color:#FFF"> <p>Site Map</p></a>
      <a href="about.html" class="nounderline" style="color:#FFF"><p  style="padding-left:8em">Contact Us  &nbsp;&nbsp;<a href="WWW.facebook.com"><img src="facebook.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.twitter.com"><img src="twitter.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.instagram.com"><img src="insta.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.linkedin.com "><img src="linked.PNG"  style="border-bottom:thick" width="30"/></a></p>
      <p align="right" style="font-size:12px">Website Design & Developed By @IFHAM</p>
</div>



</body>
</html>


