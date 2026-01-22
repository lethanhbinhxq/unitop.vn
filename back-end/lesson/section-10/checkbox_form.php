<?php
if(isset($_POST["btn_reg"])){
    if(isset($_POST["rules"])){
        $rules = $_POST["rules"];
        echo"{$rules}";
    } else {
        echo"Bạn cần đọc và xác nhận điều khoản";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ checkbox</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <input type="checkbox" name="rules" id="rules" value="yes">
        <label for="rules">Đồng ý</label> <br><br>
        <input type="submit" value="Register" name="btn_reg">
    </form>
</body>
</html>