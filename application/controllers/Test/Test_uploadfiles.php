<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Test_uploadfiles extends CI_Controller
{
	function __construct()
	{
		// 呼叫模型(Model)的建構函數
		parent::__construct();
	}
	public function index()
	{
		// $data['class']=$this->publicmodels->getclass();
		$this->load->view("test/test_uploadfiles");
    }
    




    public function AJAX_del_product_pic($product_wh_id)
    {
        $product_wh = $this->Product_model->get_Product_pic_use_product_pic_id($product_wh_id)[0];
        unlink("upload/images/" . $product_wh["product_wh_pic"]);
        $this->db->query("DELETE FROM product_wh  WHERE `product_wh_id` =" . $product_wh_id);
    
       echo  $this->AJAX_load_img_div($product_wh['product_wh_product_id']);
    }
    public function AJAX_modify_products_pic($product_wh_id, $value)
    {
        $product_wh = $this->Product_model->get_Product_pic_use_product_pic_id($product_wh_id)[0];
        $data = array(
            'product_wh_sequence' => $value
        );
        $this->db->where('product_wh_id', $product_wh_id);
        $this->db->update('product_wh', $data); 
        echo  $this->AJAX_load_img_div($product_wh['product_wh_product_id']);
    }

    public function AJAX_load_img_div($product_id){

        $Product_pic = $this->Product_model->get_Product_pic($product_id);
        $str = "";
        foreach ($Product_pic as $product_pic_item) {
            $str .= '<div class="col-md-3">
                                <div class="form-group">
                                    <table class="table table-hover table-condensed table-bordered">
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <img  src="' . base_url() . 'upload/images/' . $product_pic_item["product_wh_pic"] . '" width="100%;">
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                <input type="number" class="form-control" placeholder="排序" min="0" value="' . $product_pic_item["product_wh_sequence"] . '" onblur="modify_products_pic(' . $product_pic_item["product_wh_id"] . ', this.value);">
                                                </td>
                                                <td>
                                                <a class="btn btn-md" title="刪除檔案" onclick="if (confirm(\'確定刪除產品圖片嗎?\')) {
                                                            del_product_pic(' . $product_pic_item["product_wh_id"] . ')
                                                        }
                                                        return false;">
                                                    <i class="fa fa-remove"></i>刪除
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>';
        }
        echo $str;
    }

 
}
