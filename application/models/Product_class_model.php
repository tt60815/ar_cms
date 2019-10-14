<?php
class Product_class_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_all()
	{
		$sql = "SELECT * from product_class ";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}
