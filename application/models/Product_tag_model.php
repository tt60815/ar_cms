<?php
class Product_tag_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	//取得此類別底下的標籤
	public function get_Product_class_tag($Product_class_id)
	{
		$sql = "SELECT * FROM `product_tag`    WHERE `product_class_id` = " . $Product_class_id;
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	//取得此產品勾選的標籤
	public function get_Product_tag_link($Product_id)
	{
		$sql = "SELECT * FROM `product_tag_link` WHERE `product_tag_link_product_id` = " . $Product_id;
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}
