<?php
if (isset($_POST["btn_add"])) {
    if (!empty($_POST["cat"])) {
        # Cách xử lý 1
        foreach($_POST["cat"] as $item) {
            echo $item . "<br>";
        }

        # Cách xử lý 2
        $list_cat = implode(",", $_POST["cat"]);
        echo $list_cat;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ list checkbox</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[]" id="sport" value="1">
        <label for="sport">Thể thao</label> <br><br>
        <input type="checkbox" name="cat[]" id="social" value="2">
        <label for="social">Xã hội</label> <br><br>
        <input type="submit" value="Thêm bài viết" name="btn_add">
    </form>
</body>
</html>