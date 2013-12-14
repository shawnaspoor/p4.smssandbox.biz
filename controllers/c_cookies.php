<?php

class cookies_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		
		public function products($productID) {

			#query the products table to pull the product info
			$q = "SELECT 
					products.productID,
					products.productName,
					products.pricePerUnit
				FROM products
				WHERE products.productID = ".$this->product->productID;

			#pull in the information from the db based on query
			$product = DB::instance(DB_NAME)->select_rows($q);

			#give products a definition
			$this->template->content->product = $product;
			$this->template->content = View::instance('v_cookies_chocolatechip');


			print_r($q);
			#render the template
			echo $this->template;
		}

		public function chocolatechip() {
    		


			#setup the view
			$this->template->content = View::instance('v_cookies_chocolatechip');
			echo $this->template->title ="Chocolate Chip Cookies";

			#render the view
			echo $this->template;

		}

	}
