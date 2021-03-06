<?php

	class orderhistory_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		public function orderhistory() {

			#if statement determines if the user has the rights to access the content. If they don't they get redirect to an error message
			if(!$this->user) {

				Router::redirect('/users/membersonly');
			}

			
			$orderid = $_GET['orderid'];

			#check that the orderid pass in the url belongs to this user and exists
			$exists = DB::instance(DB_NAME)->select_field("SELECT order_no FROM orders WHERE order_no = ". $orderid);
						       
			$rightcustomer = DB::instance(DB_NAME)->select_field("SELECT user_id FROM orderid WHERE order_no = ". $orderid);
				       
			if ($rightcustomer != $this->user->user_id) {
				echo( "There are no order numbers of that number associated with your account.");
					return;
			};
			#setup the view
			$this->template->content = View::instance('v_orderhistory');
			
			#give the page a title
			$this->template->title = "Order History for ".$this->user->first_name;
			#pull the order info, if any exist from the db
			$q = " SELECT *
					FROM orders
					INNER JOIN products
						on orders.productID= products.productID
					INNER JOIN orderid
						ON orders.order_no = orderid.order_no
					WHERE orderid.order_no = ".$orderid. " AND
					orderid.user_id = ".$this->user->user_id. "
					ORDER BY orders.order_no"; 

				
		

			#pull the orders from the db 		
			$orders = DB::instance(DB_NAME)->select_rows($q);
			
			#store the input into this var
			$this->template->content->orders = $orders;
			
			
			#render
			echo $this->template;

		}

	}