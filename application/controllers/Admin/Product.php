<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends AR_ADMIN_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Product_model");
		$this->load->model("Product_class_model");
		$this->load->model("Product_tag_model");
	}
	public function index()
	{
		$this->load->view("admin/tp/header");
		$this->load->view("admin/product/list");
		$this->load->view("admin/tp/footer");
	}
	public function create()
	{
		$data["product_class"] = $this->Product_class_model->get_all();
		$product_class = $data["product_class"];
		$this_class_tag = $this->Product_tag_model->get_Product_class_tag($product_class[0]["product_class_id"]);
		$str = '';
		foreach ($this_class_tag as $this_class_tag_item) {
			$ischecked = '';
			$str .= '<label><input ' . $ischecked . ' type="checkbox" value="' . $this_class_tag_item['product_tag_id'] . '" name="tag[]">' . $this_class_tag_item['product_tag_name'] . '</label>';
			if ($this_class_tag_item['product_tag_name'] == '其他') {
				$str .= " <input type='hidden' value=" . $this_class_tag_item['product_tag_id'] . " name='tagorther'>";
			}
		}
		$data["tag"] = $str;
		$data["pic"] = "";
		$this->load->view("admin/tp/header");
		$this->load->view("admin/product/create", $data);
		$this->load->view("admin/tp/footer");
	}
	public function update_send_data()
	{
		if (intval($_SERVER['CONTENT_LENGTH']) > 0 && count($_POST) === 0) {
			echo "<script>alert('檔案過大');</script>";
			header("refresh:0 ; " . base_url() . "admin/product/create");
			return;
		}
		$product_id = -1;
		if (empty($_POST['product_id'])) {
			$this->db->insert("product", array("product_name" => ""));
			$product_id = $this->db->insert_id();
		} else {
			$product_id = $_POST['product_id'];
		}
		$this->update_send_data_img($product_id);
		$this->Product_model->update_send_data($product_id);
		$this->update_send_data_tag($product_id);
		echo "<script>alert('操作完成');</script>";
		header("refresh:0 ; " . base_url() . "admin/product/update/" . $product_id);
		return;
	}
	public function update_send_data_tag($product_id)
	{
		$str = "DELETE FROM product_tag_link  WHERE `product_tag_link_product_id` =" . $product_id;
		$this->db->query($str);
		if (empty($_POST['tag'])) {
			$data = array(
				"product_tag_link_product_id" => $product_id,
				"product_tag_link_product_tag_id" => $_POST['tagorther']
			);
			$this->db->insert("product_tag_link", $data);
		} else {
			$tag = $_POST['tag'];
			foreach ($tag as $tag_item) {
				$data = array(
					"product_tag_link_product_id" => $product_id,
					"product_tag_link_product_tag_id" => $tag_item
				);
				$this->db->insert("product_tag_link", $data);
			}
		}
	}
	public function update_send_data_img($product_id)
	{
		$this->do_upload($product_id);
	}
	public function do_upload($product_id)
	{
		$this->load->library('upload');
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for ($i = 0; $i < $cpt; $i++) {
			if (empty($files['userfile']['name'][$i])) {
				continue;
			}
			if ($i >= 4) {
				echo "<script>alert('提醒:圖片一次最多可選4張');</script>";
				return;
			}
			$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
			$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
			$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
			$this->upload->initialize($this->set_upload_options());
			if ($this->upload->do_upload()) {
				$data = $this->upload->data();
				if ($data['image_width'] > 1024 || $data['image_height'] > 1024) {
					$config['image_library'] = 'gd2';
					$config['source_image'] = $data['full_path'];
					$config['maintain_ratio'] = TRUE;
					$config['width']  = 1024;
					$config['height'] = 1024;
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
				}
				$data = array(
					"product_wh_product_id" => $product_id,
					"product_wh_pic" => $data['file_name']
				);
				$this->db->insert("product_wh", $data);
			} else {
				$errors = array('error' => $this->upload->display_errors());
				$data['error'] = $errors;
				//圖片上船失敗
				//print_r($data);
				echo "<script>alert('提醒:圖片新增失敗(檔案格式錯誤)');</script>";
				return;
			}
		}
	}
	public function set_upload_options()
	{
		//upload an image options
		$file_name =  uniqid();
		if (!is_dir('upload/images')) {
			mkdir("upload/images");
		}
		$path = 'upload/images';
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		$config['file_name'] = $file_name;
		return $config;
	}
	public function update($Product_id)
	{
		$data["product"] = $this->Product_model->get_Product($Product_id);
		$data["product_class"] = $this->Product_class_model->get_all();
		$data["product_class_tag"] = $this->Product_tag_model->get_Product_class_tag($data["product"]["product_class_id"]);
		$data["Product_pic"] = $this->Product_model->get_Product_pic($Product_id);
		$data["Product_tag"] = $this->Product_model->get_Product_tag_link($Product_id);
		$this_class_tag =	$this->Product_tag_model->get_Product_class_tag($data["product"]["product_class_id"]);
		$product_tag = $this->Product_tag_model->get_Product_tag_link($Product_id);
		$str = '';
		foreach ($this_class_tag as $this_class_tag_item) {
			$ischecked = '';
			foreach ($product_tag as $product_tag_item) {
				if ($product_tag_item['product_tag_link_product_tag_id'] == $this_class_tag_item['product_tag_id']) {
					$ischecked = 'checked';
					break;
				}
			}
			$str .= '<label><input ' . $ischecked . ' type="checkbox" value="' . $this_class_tag_item['product_tag_id'] . '" name="tag[]">' . $this_class_tag_item['product_tag_name'] . '</label>';
			if ($this_class_tag_item['product_tag_name'] == '其他') {
				$str .= " <input type='hidden' value=" . $this_class_tag_item['product_tag_id'] . " name='tagorther'>";
			}
		}
		$data["tag"] = $str;
		$data["pic"] = "";
		$this->load->view("admin/tp/header");
		$this->load->view("admin/product/update", $data);
		$this->load->view("admin/tp/footer");
	}
	public function delete()
	{
		echo "刪除商品";
	}
}
