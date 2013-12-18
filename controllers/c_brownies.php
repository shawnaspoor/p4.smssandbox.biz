<?php

class brownies_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		
		public function caramel() {

			#setup the view
			$this->template->content = View::instance('v_brownies_caramel');
			$this->template->title ="Caramel Peanut Butter Brownies";

				#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructurebrownies');


			#render the view
			echo $this->template;

		}


		public function butterfinger() {

			#setup the view
			$this->template->content = View::instance('v_brownies_butterfinger');
			$this->template->title ="Butterfinger Brownies";

				#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructurebrownies');


			#render the view
			echo $this->template;

		}

	}
