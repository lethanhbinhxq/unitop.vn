<?php
/*
 * B1: Kiểm tra submit form
 * B2: Lấy dữ liệu
 */

if (isset(($_POST['btn_login']))) {
    if (empty($_POST["username"])) {
        echo "Không được để trống tên đăng nhập";
    } else {
        $username = $_POST["username"];
        echo "{$username}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ textbox</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Name: <input type="text" name="username"> <br><br>
        Password <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>

</html>