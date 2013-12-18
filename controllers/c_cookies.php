<?php

class cookies_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		
		public function muddybuddies() {

			#setup the view
			$this->template->content = View::instance('v_cookies_muddybuddies');
			$this->template->title ="Muddy Buddies";

			#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructure');

			#render the view
			echo $this->template;

		}

		public function oatmealscotchies() {

			#setup the view
			$this->template->content = View::instance('v_cookies_oatmealscotchies');
			$this->template->title ="Oatmeal Scotchies";

			#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructure');


			#render the view
			echo $this->template;

		}


		public function coconutoatmeal() {

			#setup the view
			$this->template->content = View::instance('v_cookies_coconutoatmeal');
			$this->template->title ="Coconut Oatmeal Cookies";

			#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructure');


			#render the view
			echo $this->template;

		}






	}
