<?php

// ==================
// BÀI TẬP 1
// ==================

/*
 * Lấy dữ liệu form đăng nhập:
 * --- Tên đăng nhập
 * --- Mật khẩu
 */

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_login"])) {
    $error = array();
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

    echo "---------- Bài tập 1 ----------<br>";
    if (empty($error)) {
        echo "Tên đăng nhập: {$username} <br>";
        echo "Mật khẩu: {$password} <br>";
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
    </style>
    <!-- BÀI TẬP 1
    Lấy dữ liệu form đăng nhập:
        - Tên đăng nhập
        - Mật khẩu -->
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Đăng nhập" name="btn_login">
    </form>
</body>

</html>