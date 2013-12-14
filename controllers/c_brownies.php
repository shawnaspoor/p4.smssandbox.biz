<?php

class brownies_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		
		public function walnut() {

			#setup the view
			$this->template->content = View::instance('v_brownies_walnut');
			echo $this->template->title ="Walnut Brownies";

			#render the view
			echo $this->template;

		}

		public function chocolatemint() {

			#setup the view
			$this->template->content = View::instance('v_brownies_chocolatemint');
			echo $this->template->title ="Chocolate Mint Brownies";

			#render the view
			echo $this->template;

		}


		public function marshmallowcrunch() {

			#setup the view
			$this->template->content = View::instance('v_brownies_marshmallowcrunch');
			echo $this->template->title ="Marshmallow Crunch Brownies";

			#render the view
			echo $this->template;

		}


		public function saltedcaramel() {

			#setup the view
			$this->template->content = View::instance('v_brownies_saltedcaramel');
			echo $this->template->title ="Salted Caramel Brownies";

			#render the view
			echo $this->template;

		}




	}
