<?php
require "lib/data.php";

if (isset($_FILES["file"])) {
    show_array($_FILES);

    // Thư mục chứa file upload
    $upload_dir = "uploads/";
    // Đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    # Xử lý upload đúng file ảnh
    $error = array();
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = 'Chỉ được upload file có đuôi png, jpg, gif, jpeg';
    } else {
        # Upload file có dung lượng cho phép (<20MB ~ 29,000,000 byte)
        $file_size = $_FILES['file']['size'];
        if ($file_size > 29000000) {
            $error['file_size'] = "Chỉ được upload file bé hơn 20 MB";
        }

        # Kiểm tra trùng tên file hệ thống
        if (file_exists($upload_file)) {
            $error["file_exists"] = "File đã tồn tại trên hệ thống";
        }
    }

    if (empty($error)) {
        echo "File đạt chuẩn";
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src='{$upload_file}'/><br>";
            echo "<a href='$upload_file'> Download: {$_FILES['file']['name']}</a>";
        } else {
            echo "Upload file không thành công";
        }
    } else {
        show_array($error);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file lên server với php</title>
</head>

<body>
    <h1>Upload file</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        Chọn file: <br> <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Upload File">
    </form>
</body>

</html>