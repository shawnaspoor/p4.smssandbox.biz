<?php

class cart_controller extends base_controller {

	public function __construct() {
			parent::__construct();
			
		}

		

		#this should be keeping all the cart info in session variables while the shopper shops	
		public function cart () {
			$productid = $_GET['id']; //product is not confidential so it can be passed via the url
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


			#setup the view
			$this->template->content = View::instance('v_cart');

			#build the cart contents
			if($_SESSION['cart']) { 

				$keys = array_keys($_SESSION["cart"]);
				 foreach($keys as $key) { 
				 	$array = explode(",",$key);
				 	$item_id = $array[0];
				 	$quantity= $_SESSION["cart"]["$item_id"];
				 	//echo $item_id . " " . $quantity . "<br />";
				 	//echo $product . "  " . $quantity ."<br>";
				 
				$sql = sprintf("SELECT * 
								FROM products 
								WHERE productID = %d", $item_id);	
				

				
		        //get the name, description and price from the database
		        //use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
				//$sql = sprintf("SELECT productName, pricePerUnit FROM products WHERE productID = %d", $productid);
		        	
		        $results = DB::instance(DB_NAME)->select_rows($sql);
		        var_dump($results);

		        
		       }
		        

		        /*//Only display the row if there is a product (though there should always be as we have already checked)
		        if(DB::instance(DB_NAME)->select_rows($results) !=null) {

		            list($productName, $pricePerUnit) = $results;

		            $line_cost = $pricePerUnit * $quantity; //work out the line cost
		           $total = $total + $line_cost; //add to the total cost */

		    	}	
				else
				{	
					//otherwise tell the user they have no items in their cart
				    
					echo "You have no items in your shopping cart.";

				}
		//	}
		//}
		
		#store the input into this var
		$this->template->content->results = $results;
		$this->template->content->quantity = $quantity;
		
		//echo $this->template->title ="Cart";

		#render the view
		echo $this->template;

	}	
	

	public function cart_submit() {

		if($this->user) {

				$userid = array(
					"user_id" => $this->user->user_id);

				//echo $userid;

				$orderNo = DB::instance(DB_NAME)->insert_row("orderid", $userid);
				
				echo $orderNo;

				
			

		#insert into orderid table and pull the order_no



/*
        		$keys = array_keys($_SESSION["cart"]);
				 foreach($keys as $key) { 
				 	$array = explode(",",$key);
				 	$item_id = $array[0];
				 	$quantity= $_SESSION["cart"]["$item_id"];  

				 	
            	if(empty($value) || ctype_space($value))  {
                	#If any fields are blank, send error message
                	Router::redirect('/users/cart/error');  
            		}
        		


       			$results = DB::instance(DB_NAME)->select_rows($sql);
				
			else {	
				
				     	
        			#DB info not submitted by the user
        			$_POST['created'] = Time::now();

					#sotre the information into a var
					$results = DB::instance(DB_NAME)->insert("orders", $_POST);

					#send them to a page so they can login and get postin
					Router::redirect('/cart/orderrecieved');

			}*/

			#setup the view
			$this->template->content = View::instance('v_cart_submit');
			#render the view
			echo $this->template;

			}
			
			else 
			{

				Router::redirect('/users/membersonly');
			}


		}  
}
