<?php
$products = array("product101" => array("id" => "101",
										"name" => "Product 101",
 										"img" => "football.png",
 										"price" => "150.00"
 										),
				  "product102" => array("id" => "102",
										"name" => "Product 102",
 										"img" => "tennis.png",
 										"price" => "120.00"
 										),
 				  "product103" => array("id" => "103",
										"name" => "Product 103",
 										"img" => "basketball.png",
 										"price" => "90.00"),
 				  "product104" => array("id" => "104",
										"name" => "Product 104",
 										"img" => "table-tennis.png",
 										"price" => "110.00"),
 				  "product105" => array("id" => "105",
										"name" => "Product 105",
 										"img" => "soccer.png",
 				  ));



function getProducts()
{
	return $GLOBALS['products'];
}




	/*for(var j = 0; j<data.length; j++){
		if(id == data[j].id)
		{

		}
		else{
			newCart[i].id = data[i].id;
			newCart[i].name = data[i].name;
			newCart[i].price = data[i].price;
			newCart[i].quant = data[i].quant;
						
		}
	}
	return newCart;
}
*/

?>