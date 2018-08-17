<?php 

require('config.php');
$cart_pro = array();

function showProducts(){
	 $p_data = "";
	foreach ($GLOBALS['products'] as $key => $value) {
		$p_data.= "<div id ='product-101' class='product'>
					<img src = 'images/".($value["img"])."' >
						<h3 class='title'><a href='#'>".($value["name"])."</a></h3>
						<span> $".($value["price"]).".00</span>
						 <a class ='add-to-cart' href='#' id=".($value["id"]).  " >Add To Cart</a></div>";
			}
	echo  $p_data;
	
}



?>

<!DOCTYPE html>
<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
table , tr, td, th {
	border: 1px solid black;
	text-align: center;
	border-collapse: collapse;
}
</style>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div>
<?php include 'header.php' ?>
	</div>
	<div id="main">

		<div id ="cart-list">

		</div>
		<div id="products">
			<?php 
			showProducts();
			?> 
		</div>
	</div>
	<div>
	<?php include 'footer.php' ?>
</div>

	<script type="text/javascript" src = "task13.js"></script>

</body>
</html>