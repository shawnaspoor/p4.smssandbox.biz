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


	}
