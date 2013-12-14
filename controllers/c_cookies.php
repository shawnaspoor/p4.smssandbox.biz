<?php

class cookies_controller extends base_controller {


		public function __construct() {
			parent::__construct();
			
		}

		
		public function chocolatechip() {

			#setup the view
			$this->template->content = View::instance('v_cookies_chocolatechip');
			echo $this->template->title ="Chocolate Chip Cookies";

			#render the view
			echo $this->template;

		}

		public function doublechocolatechip() {

			#setup the view
			$this->template->content = View::instance('v_cookies_doublechocolatechip');
			echo $this->template->title ="Double Chocolate Chip Cookies";

			#render the view
			echo $this->template;

		}


		public function peanutbutter() {

			#setup the view
			$this->template->content = View::instance('v_cookies_peanutbutter');
			echo $this->template->title ="Peanut Butter Cookies";

			#render the view
			echo $this->template;

		}


		public function snickerdoodle() {

			#setup the view
			$this->template->content = View::instance('v_cookies_snickerdoodle');
			echo $this->template->title ="Snickerdoodle Cookies";

			#render the view
			echo $this->template;

		}




	}
