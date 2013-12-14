<?php

class cart_controller extends base_controller {

	public function __construct() {
			parent::__construct();
			
		}

	public function ShowShoppinCart()  {
		$cart = $_SESSION['cart'];
		if (!$cart) {
			return '<p>You have no items in your shopping cart</p>';
		}
		else {
			$products = explode(',',$cart);
			$s=(count($items) > 1) ? 's':'';
			return '<p>You have <a href="shoppingcart.php">'.count($items)'. item'.$s.' in your shopping cart</a></p>'
		}



	}