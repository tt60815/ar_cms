<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AR_Controller extends CI_Controller {
    public function __construct() {
       parent::__construct();
    }


    public function pre($data){
    	echo "<pre>";
    	print_r($data);
        echo "</pre>";
        exit;
    }
 
}

class AR_ADMIN_Controller extends CI_Controller {
    public function __construct() {
       parent::__construct();

       //判斷登入寫在這兒


    }
        public function pre($data){
    	echo "<pre>";
    	print_r($data);
    	echo "</pre>";
    }
 
}
