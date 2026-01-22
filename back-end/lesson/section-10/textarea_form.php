<?php
if(isset($_POST['btn_add'])) {
    if (empty($_POST['post_detail'])) {
        echo'Bạn cần nhập thông tin bài viết';
    } else {
        $post_detail = $_POST['post_detail'];
        echo"{$post_detail}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ textarea</title>
</head>
<body>
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <label for="post_detail">Chi tiết</label> <br>
        <textarea name="post_detail" id="post_detail" cols="50" rows="15"></textarea> <br>
        <input type="submit" value="Thêm bài viết" name="btn_add">
    </form>
</body>
</html>