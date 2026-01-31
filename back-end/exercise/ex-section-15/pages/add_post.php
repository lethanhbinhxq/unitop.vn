<?php
/*
 * 1. Thêm chức năng vào hệ thống điều hướng cơ bản
 * 2. Tạo form nhập thông tin bài viết
 * --- Tiêu đề
 * --- Mô tả ngắn
 * -- Chi tiết bài viết (ckeditor & ckfinder)
 * --- Ảnh đại diện (file upload)
 * 3. Chuẩn hóa dữ liệu form (form validation)
 * 4. Xuất dữ liệu sau khi chuẩn hóa
 */

require "lib/data.php";

if (isset($_POST["btn_add"])) {
    $error = array();
    # Kiểm tra tiêu đề
    if (empty($_POST["title"])) {
        $error["title"] = "Không được để trống Tiêu đề!";
    } else {
        $title = $_POST["title"];
    }

    $description = $_POST["description"];

    # Kiểm tra chi tiết bài viết
    if (empty($_POST["detail"])) {
        $error["detail"] = "Không được để trống Chi tiết bài viết!";
    } else {
        $detail = $_POST["detail"];
    }

    # Kiểm tra ảnh đại diện
    if (isset($_FILES["thumbnail"]) && !empty($_FILES["thumbnail"]["name"])) {

        // Thư mục chứa file upload
        $upload_dir = "uploads/";
        // Đường dẫn của file sau khi upload
        $upload_file = $upload_dir . $_FILES['thumbnail']['name'];

        # Xử lý upload đúng file ảnh
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error['thumbnail'] = 'Chỉ được upload file có đuôi png, jpg, gif, jpeg';
        } else {
            # Upload file có dung lượng cho phép (<20MB ~ 29,000,000 byte)
            $file_size = $_FILES['thumbnail']['size'];
            if ($file_size > 29000000) {
                $error['thumbnail'] = "Chỉ được upload file bé hơn 20 MB";
            }

            # Kiểm tra trùng tên file hệ thống
            if (file_exists($upload_file)) {
                // ===================================
                // Xử Lý Đổi Tên File Tự Động
                // ===================================

                # Tạo file mới
                // Tên file.Đuôi file
                $file_name = pathinfo($_FILES["thumbnail"]["name"], PATHINFO_FILENAME);
                $new_file_name = $file_name . " - Copy.";
                $new_upload_file = $upload_dir . $new_file_name . $type;
                $k = 1;
                while (file_exists($new_upload_file)) {
                    $new_file_name = $file_name . " - Copy({$k}).";
                    $k++;
                    $new_upload_file = $upload_dir . $new_file_name . $type;
                }
                $upload_file = $new_upload_file;
                // $error["file_exists"] = "File đã tồn tại trên hệ thống";
            }
        }
        if (empty($error['thumbnail'])) {
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $upload_file);
        } else {
            $upload_file = '';
        }
    }
}
?>

<div id="content">
    <h1>Trang chủ</h1>

    <form action="" enctype="multipart/form-data" method="POST">
        <h2 class="title-page">Form nhập liệu bài viết</h2>
        <label for="title">Tiêu đề <span class="error">*</span></label>
        <input type="text" name="title" id="title">
        <p><?php echo form_error("title"); ?></p>

        <label for="description">Mô tả ngắn</label>
        <textarea name="description" id="description"></textarea>

        <label for="detail">Chi tiết bài viết <span class="error">*</span></label>
        <textarea name="detail" id="detail" class="ckeditor"></textarea>
        <p><?php echo form_error("detail"); ?></p>

        <label for="thumbnail">Ảnh đại diện</label>
        <input type="file" name="thumbnail" id="thumbnail">
        <p><?php echo form_error("thumbnail"); ?></p>

        <input type="submit" value="Thêm bài viết" name='btn_add' id="btn_add">
    </form>

    <h2 class="title-page">Xem trước bài viết</h2>
    <h1 class="post_title"><?php echo set_value("title"); ?></h1>
    <p id="post_desc"><?php echo set_value("description"); ?></p>
    <img src="<?php echo set_value("upload_file"); ?>" alt="">
    <div><?php echo set_value("detail"); ?></div>
</div>