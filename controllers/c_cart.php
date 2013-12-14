<?php

class cart_controller extends base_controller {

	public function __construct() {
			parent::__construct();
			
		}
/*
		public function products() {
		
			$this->template->content = View::instance('v_products');
			$this->template->title = "Products";

			#query the products table to pull the product info
			$q = "SELECT 
					products.productID,
					products.productName,
					products.pricePerUnit
				FROM products";

			#pull in the information from the db based on query
			$product = DB::instance(DB_NAME)->select_rows($q);

			#give products a definition
			$this->template->content->product = $product;
			
			#render the template
			echo $this->template;
		}


*/

			#not sure if I need to use this, I need to check the core db controller


		
		

		#this should be keeping all the cart info in session variables while the shopper shops	
		public function cart () {
			$cart = $_SESSION['cart'];
			$productid = $_GET['id']; //product is not confidential so it can be passed via the url
			$quantity = $_GET['quantity']; //quantity to be passed via  the url as well
			$action = $_GET['action'];
			
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
						unset($_SESSION['cart']);

					break;		

				}
/*
			
			if($_SESSION['cart']) { 
				 foreach($_SESSION['cart'] as $productid => $quantity) { 

		        //get the name, description and price from the database
		        //use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
		        $sql = sprintf("SELECT productName, pricePerUnit FROM products WHERE productID = $productid");

		        	$result = select_rows($sql);

		        //Only display the row if there is a product (though there should always be as we have already checked)
		        if(select_field($result) > 0) {

		            list($productName, $pricePerUnit) = select_rows($result);

		            $line_cost = $pricePerUnit * $quantity; //work out the line cost
		            $total = $total + $line_cost; //add to the total cost

		            }	
				else
				{
				//otherwise tell the user they have no items in their cart
				    echo "You have no items in your shopping cart.";

				}
			}
		}
		#setup the view
		$this->template->content = View::instance('v_cart');
		echo $this->template->title ="Cart";

		#render the view
		echo $this->template;

	}	
	


/*

	#this is the start of the product order page, needs lots more!	
	public function cart_order() {	
	
		#checking for blank fields			
			foreach($_POST as $field => $value) {
            	if(empty($value)  || ctype_space($value))  {
                	#If any fields are blank, send error message
                	Router::redirect('/cart/error');  
            		}
        		}       

       		 #checking to see if the proudctID exists in the db
       		 $exists = DB::instance(DB_NAME)->select_field("SELECT productID FROM product WHERE productID = '" . $_POST['productID'] . "'");
			
			#if that email address does not exist
			if(!$exists) {
				Router::redirect('/cart/error');
			}
				
			else {	

			#create array based on what the users input to feed into the db	
			$data = Array(
 
				"productID" => $_POST['productID'], 
				"quantity" => $_POST['quantity'] 
				
				);

			#insert into the db
	        DB::instance(DB_NAME)->update_or_insert_rows("order", $data);
			
			#refresh the page once the update is made
			Router::redirect('/users/profile');
			}
	}


*/

	}
}