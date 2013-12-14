<?php

class process_controller extends base_controller {

    public function __construct() {
            parent::__construct();
            
        }

        public function orderform() {
            $name = $_POST["name"];
            $billingAddress= $_POST["billingAddress"];
            $state= $_POST["state"]; 
            $email= $_POST["email"]; 
        	$item_quantity= $_POST["item_quantity"];
        	$Baked_Good= $_POST["Baked_Good"];

            $data = "Name: " . $name." ".
            "Billing Address: ".$billingAddress." ".$state." ".
            "Email: ".$email." ".
            "Item Quantity: ".$item_quantity." ".
            "Baked Goods: ".$Baked_Good; 
            
            $filename = "files/".$name.$billingAddress.".txt";
            file_put_contents($filename, $data."\n", FILE_APPEND);
            
            echo "http://p3.smssandbox.biz/" . $filename;



            #setup the view
            $this->template->content = View::instance('v_orderform');
            echo $this->template->title ="Order Form";

            #render the view
            echo $this->template;

        }

}
