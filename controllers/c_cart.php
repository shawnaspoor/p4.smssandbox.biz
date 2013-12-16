<?php

class cart_controller extends base_controller {

	public function __construct() {
			parent::__construct();
			
		}

		

		#this should be keeping all the cart info in session variables while the shopper shops	
		public function cart () {
			
			$productid = $_GET['id']; //product is not confidential so it can be passed via the url
			//quantity to be passed via  the url as well
			$action = $_GET['action'];
			
			switch ($action) {
				case "add" :
				//this will add
					$_SESSION['cart'][$productid]++;

					break;

				case "remove";
					$_SESSION['cart'][$productid]--;
						if	($_SESSION['cart'][$productid]==0)
							unset ($_SESSION['cart'][$productid]);

					break;

					case "empty";
						unset($_SESSION['cart']);

					break;		

				}

			/**/
			if($_SESSION['cart']) { 
				 foreach($_SESSION['cart'] as $product => $quantity) { 


		        //get the name, description and price from the database
		        //use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
		        $sql = sprintf("SELECT productName, pricePerUnit FROM products WHERE productID = %d", $productid);
		        	
		        $result = DB::instance(DB_NAME)->select_rows($sql);
				
				var_dump($result);
		        //Only display the row if there is a product (though there should always be as we have already checked)
		        if(DB::instance(DB_NAME)->select_field($result) !=null) {

		            list($productName, $pricePerUnit) = $result;

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
	
}
