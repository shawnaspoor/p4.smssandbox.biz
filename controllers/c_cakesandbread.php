<?php

class cakesandbread_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		
		public function whoopiepies() {

			#setup the view
			$this->template->content = View::instance('v_cakesandbread_whoopiepies');
			$this->template->title ="Whoopie Pies";

				#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructurecakes');


			#render the view
			echo $this->template;

		}


		public function pumpkinbread() {

			#setup the view
			$this->template->content = View::instance('v_cakesandbread_pumpkinbread');
			$this->template->title ="Pumpkin Bread";

				#pushing other views to this page
			$this->template->content->pricestructure = View::instance('v_pricestructurebrownies');


			#render the view
			echo $this->template;

		}

	}
