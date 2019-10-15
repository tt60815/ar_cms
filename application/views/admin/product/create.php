<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="skcats">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title></title>
    <!-- Styles -->
    <!--    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/icomoon/style.css" rel="stylesheet">
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="<?= base_url() . "assets/" ?>summernote/summernote.css" rel="stylesheet">
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="<?= base_url() . "assets/admin/" ?>css/ecaps.min.css" rel="stylesheet">
    <link href="<?= base_url() . "assets/admin/" ?>css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        body {
            font-family: 'Calibri', 'Arial', 'IBM Plex Sans', 'Microsoft JhengHei', 'sans-seri';
            line-height: 1.45;
            font-size: 16px;
            color: #000
        }
    </style>
    <script src="<?= base_url() . "assets/admin/" ?>/plugins/jquery/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() . "assets/admin/" ?>css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?= base_url() . "assets/admin/" ?>js/bootstrap-select.min.js"></script>
</head>
<body>
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar">
            <a class="logo-box" href="index.html">
                <span>ecaps</span>
                <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                <i class="icon-close" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li>
                            <a href="index.html">
                                <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="email.html">
                                <i class="menu-icon icon-inbox"></i><span>Email</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="menu-icon icon-flash_on"></i><span>UI Kits</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-notifications.html">Notifications</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-progress.html">Progress Bars</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-tree-view.html">Tree View</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="menu-icon icon-layers"></i><span>Layouts</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="layout-blank.html">Blank Page</a></li>
                                <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                                <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                <li><a href="layout-fixed-sidebar-header.html">Fixed Sidebar &amp; Header</a></li>
                            </ul>
                        </li>
                        <li class="active-page">
                            <a href="javascript:void(0);">
                                <i class="menu-icon icon-code"></i><span>產品</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html" class="active">產品列表</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-file-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="menu-icon icon-format_list_bulleted"></i><span>Tables</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="table-static.html">Static</a></li>
                                <li><a href="table-responsive.html">Responsive</a></li>
                                <li><a href="table-data.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html">
                                <i class="menu-icon icon-show_chart"></i><span>Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="menu-icon icon-my_location"></i><span>Maps</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google</a></li>
                                <li><a href="maps-vector.html">Vector</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="menu-icon icon-star"></i><span>Extra</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="todo.html">Todo</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider"></li>
                        <li>
                            <a href="index.html">
                                <i class="menu-icon icon-help_outline"></i><span>Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="menu-icon icon-public"></i><span>Changelog</span><span class="label label-danger">1.0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="index.html"><span>ecaps</span></a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                    <ul class="dropdown-menu dropdown-lg dropdown-content">
                                        <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                        <li class="slimscroll dropdown-notifications">
                                            <ul class="list-unstyled dropdown-oc">
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                        <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                            <small class="notification-date">20:00</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                        <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                            <small class="notification-date">06:07</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                        <span class="notification-info">4 new special offers from the apps you follow!
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                        <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://via.placeholder.com/36x36" alt="" class="img-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Calendar</a></li>
                                        <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Account Settings</a></li>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div><!-- /Page Header -->
            <!-- Page Inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">新增產品</h3>
                </div>
                <div id="main-wrapper">




                
                    <?php define("PRODUCTS_ACTION", base_url() . 'admin/product/') ?>
                    <div class="box box-primary">
                        <div class="box-header">
                            <div class="btn-group">
                                <button type="button" id="sendbtn" class="btn btn-primary btn-md bg-blue-gradient fa fa-save" autocomplete="off">&nbsp;儲存</button>
                            </div>
                            <div class="btn-group">
                                <a href="#"><button type="button" id="backbtn" class="btn btn-primary btn-md bg-blue-gradient fa fa-arrow-left" autocomplete="off">&nbsp;回上頁</button></a>
                            </div>
                        </div>
                        <hr>
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">產品資訊</h4>
                            </div>
                            <div class="panel-body">
                                <form id="products_form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">產品名稱</label>
                                        <div class="col-sm-10">

                                            <input type="text" name="product_name" class="form-control" id="input-Default" value="<?= (isset($_SESSION["admin"]["product"]["product_name"])) ? $_SESSION["admin"]["product"]["product_name"]:"" ;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">產品分類</label>
                                        <div class="col-sm-10">
                                            <select name="product_class_id" class="selectpicker" data-live-search="true" onChange="select_product_class(this.options[this.selectedIndex].value)">
                                                <? foreach ($product_class as  $product_class_item) { ?>
                                                    <option <? if (isset($_SESSION["admin"]["product"]["product_class_id"])&&$product_class_item["product_class_id"] == $_SESSION["admin"]["product"]["product_class_id"]) {
                                                                    echo "selected='selected'";
                                                                } ?> data-tokens="mustard" value="<?= $product_class_item["product_class_id"] ?>"><?= $product_class_item["product_class_name"] ?></option>
                                                <? } ?>
                                            </select>
                                            <script type="text/javascript">
                                                function select_product_class(product_class_id) {
                                                    $.ajax({
                                                        url: "<?= base_url() ?>admin/product/ajax_get_Product_class_tag/" + product_class_id + "/" + 0,
                                                        success: function(res) {
                                                            $("#product_tag_div").html(res);
                                                        }
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">標籤</label>
                                        <div class="col-sm-10" id="product_tag_div">
                                            <?= $tag ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">原價</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="product_price" class="form-control" id="input-Default" value="<?= (isset($_SESSION["admin"]["product"]["product_price"])) ? $_SESSION["admin"]["product"]["product_price"]:"" ;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">特價</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="product_special_price" class="form-control" id="input-Default" value="<?= (isset($_SESSION["admin"]["product"]["product_special_price"])) ? $_SESSION["admin"]["product"]["product_special_price"]:"" ;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">排序</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="product_sequence" class="form-control" id="input-Default" value="<?= (isset($_SESSION["admin"]["product"]["product_sequence"])) ? $_SESSION["admin"]["product"]["product_sequence"]:"" ;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">上傳圖片</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="userfile[]" id="userfile" accept="image/" multiple/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">上傳預覽</label>
                                        <div class="col-sm-10">
                                            <div class="panel panel-white" id="preview_progressbarTW_imgs" style="width:100%; height: 300px; overflow:scroll;">
                                                <p>目前沒有圖片</p>
                                            </div>
                                            <!-- JavaScript part -->
                                            <script>
                                                $("#userfile").change(function() {
                                                    $("#preview_progressbarTW_imgs").html(""); // 清除預覽
                                                    readURL(this);
                                                });
                                                function readURL(input) {
                                                    if (input.files && input.files.length >= 0) {
                                                        for (var i = 0; i < input.files.length; i++) {
                                                            if (3104240 < input.files[i].size) {
                                                                alert(input.files[i].name + "文件過大");
                                                                document.getElementById("userfile").value = "";
                                                                $("#preview_progressbarTW_imgs").html("");
                                                                return;
                                                            }
                                                        }
                                                        for (var i = 0; i < input.files.length; i++) {
                                                            var reader = new FileReader();
                                                            reader.onload = function(e) {
                                                                var img = $("<img  class='img-thumbnail' width='300' height='200'>").attr('src', e.target.result);
                                                                $("#preview_progressbarTW_imgs").append(img);
                                                            }
                                                            reader.readAsDataURL(input.files[i]);
                                                        }
                                                    } else {
                                                        var noPictures = $("<p>目前沒有圖片</p>");
                                                        $("#preview_progressbarTW_imgs").append(noPictures);
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">圖片</label>
                                        <div class="col-sm-10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">產品規格</label>
                                        <div class="col-sm-10">
                                            <textarea name="product_description" class="form-control"><?= (isset($_SESSION["admin"]["product"]["product_description"])) ? $_SESSION["admin"]["product"]["product_description"]:"" ;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">選擇樣板</label>
                                        <div class="col-sm-10">
                                            <select id="edittp" class="selectpicker" data-live-search="true" onChange="select_edittp(this.options[this.selectedIndex].value)">
                                                <option data-tokens="mustard" value="1">樣板一</option>
                                                <option data-tokens="mustard" value="2">樣板二</option>
                                                <option data-tokens="mustard" value="3">樣板三</option>
                                            </select>
                                            <script type="text/javascript">
                                                function select_edittp(edittp_id) {
                                                    var stripedHtml = $("#edittp_div").html();
                                                    $('#summernote').summernote('code', stripedHtml);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">產品描述</label>
                                        <div class="col-sm-10">
                                            <textarea required="required" id="summernote" class="form-control" name="product_content" placeholder="輸入內文">
                                            <?= (isset($_SESSION["admin"]["product"]["product_content"])) ? $_SESSION["admin"]["product"]["product_content"]:"" ;?>
                                             </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">上架</label>
                                        <div class="col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <span><input name="product_is_use" checked="checked" type="checkbox"></span> 是否上架
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="edittp_div" style="display:none"><? $this->load->view("admin/tp/edittp") ?></div>





                        <div class="box-footer">
                            <div class="btn-group">
                                <button type="button" id="sendbtn1" class="btn btn-primary btn-md bg-blue-gradient fa fa-save" autocomplete="off">&nbsp;儲存</button>
                            </div>
                            <div class="btn-group">
                                <a href="#"><button type="button" id="backbtn1" class="btn btn-primary btn-md bg-blue-gradient fa fa-arrow-left" autocomplete="off">&nbsp;回上頁</button></a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('#sendbtn,#sendbtn1').bind('click', function() {
                                $('#products_form').attr('action', "<?php echo PRODUCTS_ACTION . 'update_send_data/'; ?>").submit();
                            });
                        </script>
                    </div><!-- Main Wrapper -->
                    <div class="page-footer">
                        <p>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                    </div>
                </div><!-- /Page Inner -->
                <div class="page-right-sidebar" id="main-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="right-sidebar-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active" id="chat-tab"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">chat</a></li>
                                    <li role="presentation" id="settings-tab"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">settings</a></li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="chat">
                                    <div class="chat-list">
                                        <span class="chat-title">Recent</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">David</span>
                                                <span class="chat-text">where u at?</span>
                                                <span class="chat-time">08:50</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Daisy</span>
                                                <span class="chat-text">Daisy sent a photo.</span>
                                                <span class="chat-time">11:34</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="chat-list">
                                        <span class="chat-title">Older</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Tom</span>
                                                <span class="chat-text">You: ok</span>
                                                <span class="chat-time">2d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Anna</span>
                                                <span class="chat-text">asdasdasd</span>
                                                <span class="chat-time">4d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Liza</span>
                                                <span class="chat-text">asdasdasd</span>
                                                <span class="chat-time">&nbsp;</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="load-more-messages" data-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="right-sidebar-settings">
                                        <span class="settings-title">General Settings</span>
                                        <ul class="sidebar-setting-list list-unstyled">
                                            <li>
                                                <span class="settings-option">Notifications</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Activity log</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Automatic updates</span><input type="checkbox" class="js-switch" />
                                            </li>
                                            <li>
                                                <span class="settings-option">Allow backups</span><input type="checkbox" class="js-switch" />
                                            </li>
                                        </ul>
                                        <span class="settings-title">Account Settings</span>
                                        <ul class="sidebar-setting-list list-unstyled">
                                            <li>
                                                <span class="settings-option">Chat</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Incognito mode</span><input type="checkbox" class="js-switch" />
                                            </li>
                                            <li>
                                                <span class="settings-option">Public profile</span><input type="checkbox" class="js-switch" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-sidebar" id="chat-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="chat-top-info">
                                <span class="chat-name">Noah</span>
                                <span class="chat-state">2h ago</span>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close pull-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <div class="right-sidebar-chat slimscroll">
                                <div class="chat-bubbles">
                                    <div class="chat-start-date">02/06/2017 5:58PM</div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="http://via.placeholder.com/38x38" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello!</span>
                                        </div>
                                    </div>
                                    <div class="chat-start-date">03/06/2017 4:22AM</div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">lorem</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="http://via.placeholder.com/38x38" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-write">
                                <form class="form-horizontal" action="javascript:void(0);">
                                    <input type="text" class="form-control" placeholder="Say something">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        <!-- Javascripts -->
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: ($(window).height() - 300),
                    lang: 'zh-TW',
                    callbacks: {
                        onImageUpload: function(image) {
                            var files_length = image.length;
                            for (var i = 0; i < files_length; i++) {
                                uploadImage(image[i]);
                            }
                        },
                        onMediaDelete: function(image) {
                            deleteImage(image[0].src);
                        }
                    }
                });
                function uploadImage(image) {
                    var data = new FormData();
                    data.append("file", image);
                    $.ajax({
                        url: '<?= base_url() . "admin/ajax/imgupload" ?>',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: data,
                        type: "post",
                        success: function(url) {
                            var image = $('<img>').attr('src', url);
                            $('#summernote').summernote("insertNode", image[0]);
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
                function deleteImage(src) {
                    $.ajax({
                        data: {
                            src: src
                        },
                        type: "POST",
                        url: '<?= base_url() . "admin/ajax/imgdelete" ?>', // replace with your url
                        cache: false,
                        success: function(resp) {
                            console.log(resp);
                        }
                    });
                }
            });
        </script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/switchery/switchery.min.js"></script>
        <script src="<?= base_url() . "assets/" ?>summernote/summernote.js"></script>
        <!-- 載入 summernote 中文語系 -->
        <script src="<?= base_url() . "assets/" ?>summernote/summernote-zh-TW.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/js/ecaps.min.js"></script>
        <script src="<?= base_url() . "assets/admin/" ?>/js/pages/form-elements.js"></script>
</body>
</html>