<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?= base_url() . "assets/admin/" ?>/plugins/jquery/jquery-3.1.0.min.js"></script>
    <link href="<?= base_url() . "assets/" ?>summernote/summernote.css" rel="stylesheet">
</head>
<body>
    <textarea required="required" id="summernote" class="form-control" name="product_content" placeholder="輸入內文">
        
     <? //載入樣板
     $this->load->view("admin/tp/edittp");
      ?>
</textarea>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: ($(window).height() - 200),
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
                    url: '<?= base_url() . "admin/product/ajax_imgupload" ?>',
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
                    url: '<?= base_url() . "admin/product/ajax_imgdelete" ?>', // replace with your url
                    cache: false,
                    success: function(resp) {
                        console.log(resp);
                    }
                });
            }
        });
    </script>
    <script src="<?= base_url() . "assets/admin/" ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() . "assets/" ?>summernote/summernote.js"></script>
    <!-- 載入 summernote 中文語系 -->
    <script src="<?= base_url() . "assets/" ?>summernote/summernote-zh-TW.js"></script>
</body>
</html>