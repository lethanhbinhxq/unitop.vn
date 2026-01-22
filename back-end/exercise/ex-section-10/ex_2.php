<?php

// ==================
// BÀI TẬP 2
// ==================

/*
 * Lấy dữ liệu form đăng ký:
 * --- Họ và tên
 * --- Tên đăng nhập
 * --- Mật khẩu
 * --- Email
 * --- Số điện thoại
 * --- Giới tính
 */

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_reg"])) {
    $error = array();
    $show_gender = array(
        "male" => "Nam",
        "female" => "Nữ"
    );
    if (empty($_POST["fullname"])) {
        $error["fullname"] = "Bạn chưa điền họ và tên";
    } else {
        $fullname = $_POST["fullname"];
    }
    if (empty($_POST["username"])) {
        $error["username"] = "Bạn chưa điền tên đăng nhập";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        $error["password"] = "Bạn chưa điền mật khẩu";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["email"])) {
        $error["email"] = "Bạn chưa điền email";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"])) {
        $error["phone"] = "Bạn chưa điền số điện thoại";
    } else {
        $phone = $_POST["phone"];
    }

    if (empty($_POST["gender"])) {
        $error["gender"] = "Bạn chưa chọn giới tính";
    } else {
        $gender = $_POST["gender"];
    }

    echo "---------- Bài tập 2 ----------<br>";
    if (empty($error)) {
        echo "Họ và tên: {$fullname} <br>";
        echo "Tên đăng nhập: {$username} <br>";
        echo "Mật khẩu: {$password} <br>";
        echo "Email: {$email} <br>";
        echo "Số điện thoại: {$phone} <br>";
        echo "Giới tính: {$show_gender[$gender]} <br>";
    } else {
        foreach ($error as $item) {
            echo "{$item}<br>";
        }
    }
    echo "<br>----------<br>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 10 PHP</title>
</head>

<body>
    <style>
        label {
            display: block;
            padding: 8px 0px;
        }

        input {
            display: block;
        }

        input[type="submit"] {
            margin-top: 20px;
        }

        input[type="radio"],
        label[for="male"],
        label[for="female"] {
            display: inline;
        }

        label[for="male"] {
            margin-right: 20px;
        }
    </style>
    <!-- BÀI TẬP 2
    Lấy dữ liệu form đăng ký:
        - Họ và tên
        - Tên đăng nhập
        - Mật khẩu
        - Email
        - Số điện thoại
        - Giới tính -->
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" id="phone">
        <label for="">Giới tính</label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Nam</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Nữ</label>
        <input type="submit" value="Đăng ký" name="btn_reg">
    </form>
</body>

</html>