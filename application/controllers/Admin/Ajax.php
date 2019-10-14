<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ajax extends AR_ADMIN_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
        $this->load->model("Product_tag_model");
        $this->load->model("Product_class_model");
        $this->load->model("Product_model");
    }
    public function imgupload()
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
    public function imgdelete()
    {
        $src = $this->input->post('src'); // $src = $_POST['src'];
        $file_name = str_replace(base_url(), '', $src); // striping host to get relative path
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }
    public function get_Product_class_tag($Product_class_id, $Product_id = 0)
    {
        $this_class_tag =    $this->Product_tag_model->get_Product_class_tag($Product_class_id);
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
        echo $str;
    }
    public function del_product_pic($product_wh_id)
    {
        $product_wh = $this->Product_model->get_Product_pic_use_product_pic_id($product_wh_id)[0];
        unlink("upload/images/" . $product_wh["product_wh_pic"]);
        $this->db->query("DELETE FROM product_wh  WHERE `product_wh_id` =" . $product_wh_id);
        $Product_pic = $this->Product_model->get_Product_pic($product_wh['product_wh_product_id']);
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
    public function modify_products_pic($product_wh_id, $value)
    {
        $product_wh = $this->Product_model->get_Product_pic_use_product_pic_id($product_wh_id)[0];
        $data = array(
            'product_wh_sequence' => $value
        );
        $this->db->where('product_wh_id', $product_wh_id);
        $this->db->update('product_wh', $data);
        $Product_pic = $this->Product_model->get_Product_pic($product_wh['product_wh_product_id']);
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
