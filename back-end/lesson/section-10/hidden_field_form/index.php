<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_POST["btn_login"])) {
    $info_user = array(
        'username' => "admin",
        "password" => "admin!@#",
    );
    $error = array();
    if (empty($_POST["username"])) {
        $error['username'] = "Không được để trống tên đăng nhập!";
    } else {
        $username = $_POST["username"];
    }
    if (empty($_POST["password"])) {
        $error['password'] = "Không được để trống mật khẩu!";
    } else {
        $password = $_POST["password"];
    }

    /*
     * B1: Kiểm tra dữ liệu
     * B2: Gán dữ liệu
     * B3: Kiểm tra login
     * B4: Xử lý login
     * ----- Chuyển hướng cart.php
     * ----- Thông báo: Lỗi đăng nhập
     */

    if (empty($error)) { // Dữ liệu đã nhập
        if (($username == $info_user["username"]) && ($password == $info_user["password"])) {
            $redirect_to = $_POST["redirect_to"];
            header("location:{$redirect_to}");
        } else {
            $error['login'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    } if(!empty($error)) {
        show_array($error);
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ hidden field</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Name: <input type="text" name="username"> <br><br>
        Password <input type="password" name="password" id="password"><br><br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>

</html>