<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends AR_ADMIN_Controller {

	 public function __construct()
    {
        parent::__construct();
    }



			 public function index(){
			 	$this->load->view("admin/tp/header");
			 	//$this->load->view("admin/news");
			 	$this->load->view("admin/tp/footer");
			 }
			 public function create(){

			 	echo "新增商品";
			 }
			 public function update(){

			 	echo "修改商品";
			 }
			  public function delete(){

			 	echo "刪除商品";
			 }

}
