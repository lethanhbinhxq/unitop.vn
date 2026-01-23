<?php
require 'lib/validation.php';
if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống trường Username";
    } else {
        if (!(strlen($_POST["username"]) >= 6 && strlen($_POST["username"]) <= 32)) {
            $error["username"] = "Số lượng ký tự yêu cầu từ 6 đến 32 ký tự";
        } else {
            if (!is_username($_POST["username"])) {
                $error["username"] = "Username cho phép sử dụng chữ cái, chữ số, dấu chấm, dấu gạch dưới, từ 6 đến 32 ký tự";
            } else {
                $username = $_POST["username"];
                echo $username;
            }
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống trường Password";
    } else {
        if (!(strlen($_POST["password"]) >= 6 && strlen($_POST["password"]) <= 32)) {
            $error["password"] = "Số lượng ký tự yêu cầu từ 6 đến 32 ký tự";
        } else {
            if (!is_password($_POST["password"])) {
                $error["password"] = "Password cho phép sử dụng chữ cái, chữ số, ký tự đặc biệt, bắt đầu bằng chữ in hoa, từ 6 đến 32 ký tự";
            } else {
                $password = $_POST["password"];
                echo $password;
            }
        }
    }

    if (empty($error)) {
        echo "Username: {$username} <br>Password: {$password}";
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa dữ liệu form đăng nhập</title>
</head>

<body>
    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username"> <br>
        <p class="error"><?php form_error('username') ?></p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br>
            <p class="error"><?php form_error('password') ?></p>
            <input type="submit" value="Login" name="btn_login">
        </form>
    </body>

    </html>