<? php


public function cart() {
	$productid = $_GET['id']; //product is not confidential so it can be passed via the url
	$quantity = $_GET['quant']; //quantity to be passed via  the url as well
	$action = $_GET['action'];

	if ($productid && !productExists($productid)) {
		die("Sorry, that baked good isn't one we product.");
	}

	switch ($action) {
		case "add" :
		//this will add one of
			$_SESSION['cart'][$productid][$quantity];

			break;

		case "remove";
			$_SESSION['cart'][$productid][$quantity];
				if	($_SESSION['cart'][$productid][$quantity]==0)
					unset ($_SESSION['cart'][$productid][$quantity]);

			break;

			case "empty";
				unset(($_SESSION['cart']);

			break;		

	}



	public function showcart() {
		if($_SESSION['cart']) { 
  				 echo "<table border=\"1\" padding=\"3\" width=\"40%\">"; 

    		//iterate through the cart, the $product_id is the key and $quantity is the value
   			 foreach($_SESSION['cart'] as $productid => $quantity) { 

        //get the name, description and price from the database - this will depend on your database implementation.
        //use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
        	$sql = sprintf( DB::instance(products)->SELECT productName, pricePerUnit FROM php_shop_products WHERE id = %d;,
				$productid); 

        	$result = mysql_query($sql);

		        //Only display the row if there is a product (though there should always be as we have already checked)
		        if(mysql_num_rows($result) > 0) {

		            list($name, $description, $price) = mysql_fetch_row($result);

		            $line_cost = $price * $quantity; //work out the line cost
		            $total = $total + $line_cost; //add to the total cost

		            echo "<tr>";
		            //show this information in table cells
		            echo "<td align=\"center\">$name</td>";
		            //along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
		            echo "<td align=\"center\">$quantity <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$product_id\">X</a></td>";
		            echo "<td align=\"center\">$line_cost</td>";

		            echo "</tr>";

		        }

		    }

		    //show the total
		    echo "<tr>";
		    echo "<td colspan=\"2\" align=\"right\">Total</td>";
		    echo "<td align=\"right\">$total</td>";
		    echo "</tr>";

		    //show the empty cart link - which links to this page, but with an action of empty. A simple bit of javascript in the onlick event of the link asks the user for confirmation
		    echo "<tr>";
		    echo "<td colspan=\"3\" align=\"right\"><a href=\"$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('Are you sure?');\">Empty Cart</a></td>";
		    echo "</tr>"; 
		    echo "</table>";



		}	
		else
		{
		//otherwise tell the user they have no items in their cart
		    echo "You have no items in your shopping cart.";

		} 
	}


	function productExists($productid, $quantity) {
	    //use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
	    $sql = sprintf("SELECT * FROM php_shop_products WHERE id = %d, quant= %d;", $productid, $quantity); 
	    
	    return mysql_num_rows(mysql_query($sql)) > 0;
	}


}