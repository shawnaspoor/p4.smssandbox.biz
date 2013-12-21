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
				case "add":
				//this will add
					$_SESSION['cart'][$productid]++;
					break;

				case "remove":
					unset ($_SESSION['cart'][$productid]);

					break;

				}


			
			#build the cart contents
			if($_SESSION['cart']) { 
					$totalAll= 0;
					$lineNo = 0;
					$keys = array_keys($_SESSION["cart"]);
					 foreach($keys as $key) { 
					 	$array = explode(",", $key);
					 	$item_id = $array[0];
					 	$quantity= $_SESSION["cart"]["$item_id"];

					 
					$sql = sprintf("SELECT * , $quantity as quantity
									FROM products 
									WHERE productID = %d", $item_id);	
					

					
			        //get the name, description and price from the database
			        //use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
					
			        $results = DB::instance(DB_NAME)->select_rows($sql);

			        #pushing all the results into an array that the view can reference
				   

			    	$pricePerUnit = DB::instance(DB_NAME)->select_field('SELECT pricePerUnit
			    														 FROM products
			    														 WHERE productID = '.$item_id);

			    	$totalAll= $totalAll + ($pricePerUnit*$quantity);

					$lines[$lineNo++] = $results;


				}
		       }  
		        

		       //Only display the row if there is a product (though there should always be as we have already checked)
				else
				{	
					//otherwise tell the user they have no items in their cart
				    
					Router::redirect("/cart/error");


				}
	
		#setup the view
		$this->template->content = View::instance('v_cart');
		$this->template->title = "Shopping Cart";

		#store the input into this var
		$this->template->content->lines = $lines;
		$this->template->content->totalAll = $totalAll;

		#render the view
		echo $this->template;

	}	


	

	public function cart_submit() {

			if(!$this->user) {

				Router::redirect('/users/membersonly');
			}


			
				

			#insert into orderid table and pull the order_no
			$userid = array("user_id" => $this->user->user_id);

			$orderNo = DB::instance(DB_NAME)->insert_row("orderid", $userid);

			#pull the session variables and put them in the db
        		$keys = array_keys($_SESSION["cart"]);

				 foreach($keys as $key) { 
				 	$array = explode(",",$key);
				 	$item_id = $array[0];
				 	$quantity= $_SESSION["cart"]["$item_id"];  

								     	
        			#DB info not submitted by the user
        			$_POST['order_no'] = $orderNo;
        			$_POST['productID'] = $item_id;
        			$_POST['quantity'] = $quantity;
				 	
					#sotre the information into a var
					$insert = DB::instance(DB_NAME)->insert("orders", $_POST);
				}
				

			
			#destroy the session variable to dump the cart contents
			session_destroy();

			#setup the view
			$this->template->content = View::instance('v_cart_submit');
			#render the view
			echo $this->template;

			
			
			//}


		}  



		public function error() {

			#setup the view
			$this->template->content = View::instance('v_cart_error');
			$this->template->title ="Cart Error";

			#render the view
			echo $this->template;

		}


}


