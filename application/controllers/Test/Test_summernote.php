<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Test_summernote extends CI_Controller
{
	function __construct()
	{
		// 呼叫模型(Model)的建構函數
		parent::__construct();
	}
	public function index()
	{
		// $data['class']=$this->publicmodels->getclass();
		$this->load->view("test/Test_summernote");
	}
	public function AJAX_imgupload()
	{
		if ($_FILES['file']['name']) {
			if (!$_FILES['file']['error']) {
				$name = md5(rand(100, 200));
				$ext = explode('.', $_FILES['file']['name']);
				$filename = $name . '.' . $ext[1];
				$destination = 'upload/images/' . $filename; //change this directory
				$location = $_FILES["file"]["tmp_name"];
				move_uploaded_file($location, $destination);
				echo base_url() . 'upload/images/' . $filename; //change this URL
			} else {
				echo  $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['file']['error'];
			}
		}
	}
	public function AJAX_imgdelete()
	{
		$src = $this->input->post('src'); // $src = $_POST['src'];
		$file_name = str_replace(base_url(), '', $src); // striping host to get relative path
		if (unlink($file_name)) {
			echo 'File Delete Successfully';
		}
	}
}
