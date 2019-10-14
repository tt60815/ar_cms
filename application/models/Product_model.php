<?php
class Product_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_Product($Product_id)
	{
		$sql = "SELECT  product.*,product_class.product_class_name as product_class_name 
				,product_class.product_class_id as product_class_id
				 FROM product
				INNER join product_class  on product.product_class_id = product_class.product_class_id
				WHERE product.product_id= " . $Product_id;
		$data = $this->db->query($sql)->result_array()[0];
		return $data;
	}
	public function get_Product_pic($Product_id)
	{
		$sql = "SELECT * FROM `product_wh` WHERE `product_wh_product_id` = " . $Product_id . " 
 			ORDER BY `product_wh_sequence` ASC
			";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function get_Product_tag_link($Product_id)
	{
		$sql = "SELECT * FROM `product_tag_link` INNER JOIN product_tag on product_tag.product_tag_id=product_tag_link.product_tag_link_product_tag_id WHERE `product_tag_link_product_id` = " . $Product_id;
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function get_Product_class_tag($Product_class_id)
	{
		$sql = "SELECT * FROM `product_tag` WHERE `product_class_id` = " . $Product_class_id;
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function get_Product_pic_use_product_pic_id($product_wh_id)
	{
		$sql = "SELECT * FROM `product_wh` WHERE `product_wh_id` = " . $product_wh_id;
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	//修改產品
	public function update_send_data($product_id)
	{
		$product_is_use = 0;
		if (!empty($_POST['product_is_use'])) {
			$product_is_use = 1;
		}
		$data = array(
			"product_name" => $_POST['product_name'],
			"product_class_id" => $_POST['product_class_id'],
			"product_price" => $_POST['product_price'],
			"product_special_price" => $_POST['product_special_price'],
			"product_sequence" => $_POST['product_sequence'],
			"product_description" => $_POST['product_description'],
			"product_content" => $_POST['product_content'],
			"product_is_use" => $product_is_use
		);
		$this->db->where("product_id", $product_id);
		$this->db->update("product", $data);
	}
}
