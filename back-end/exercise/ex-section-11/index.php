<?php
// ========================
// BÀI TẬP PHẦN 11
// ========================

/*
 * Tạo form đăng ký và chuẩn hóa dữ liệu:
 * --- Họ và tên
 * --- Tên đăng nhập
 * --- Mật khẩu
 * --- Số điện thoại
 */
require "lib/validation.php";

if (isset($_POST["btn_reg"])) {
    $error = array();
    if (isset($_POST["fullname"])) {
        # Kiểm tra họ và tên
        if (empty($_POST["fullname"])) {
            $error["fullname"] = "Không được bỏ trống họ và tên!";
        } else {
            if (!check_length($_POST["fullname"], 3, 32)) {
                $error["fullname"] = "Số lượng ký tự từ 3 tới 32 ký tự";
            } else {
                if (is_fullname($_POST["fullname"])) {
                    $fullname = $_POST["fullname"];
                } else {
                    $error["fullname"] = "Họ và tên phải gồm ít nhất hai từ, cách nhau bởi dấu cách, viết hoa chữ cái đầu tiên mỗi từ, độ dài 3 đến 32 ký tự!";
                }
            }
        }
    }

    # Kiểm tra tên đăng nhập

    if (isset($_POST["username"])) {
        # Kiểm tra họ và tên
        if (empty($_POST["username"])) {
            $error["username"] = "Không được bỏ trống tên đăng nhập!";
        } else {
            if (!check_length($_POST["username"], 6, 32)) {
                $error["username"] = "Số lượng ký tự từ 6 tới 32 ký tự";
            } else {
                if (is_username($_POST["username"])) {
                    $username = $_POST["username"];
                } else {
                    $error["username"] = "Tên đăng nhập có thể bao gồm chữ cái, chữ số, dấu gạch dưới, dấu chấm, độ dài 6 đến 32 ký tự!";
                }
            }
        }
    }

    // # Kiểm tra mật khẩu

    if (isset($_POST["password"])) {
        # Kiểm tra họ và tên
        if (empty($_POST["password"])) {
            $error["password"] = "Không được bỏ trống mật khẩu!";
        } else {
            if (!check_length($_POST["password"], 6, 32)) {
                $error["password"] = "Số lượng ký tự từ 6 tới 32 ký tự";
            } else {
                if (is_password($_POST["password"])) {
                    $password = $_POST["password"];
                } else {
                    $error["password"] = "Mật khẩu phải bắt đầu bằng chữ in hoa, có thể bao gồm chữ cái, chữ số, ký tự đặc biệt, dấu gạch dưới, độ dài 6 đến 32 ký tự!";
                }
            }
        }
    }

    // # Kiểm tra số điện thoại

    if (isset($_POST["phone"])) {
        # Kiểm tra họ và tên
        if (empty($_POST["phone"])) {
            $error["phone"] = "Không được bỏ trống số điện thoại!";
        } else {
            if (!check_length($_POST["phone"], 10, 10)) {
                $error["phone"] = "Số lượng ký tự là 10 ký tự";
            } else {
                if (is_phone($_POST["phone"])) {
                    $phone = $_POST["phone"];
                } else {
                    $error["phone"] = "Số điện thoại chỉ gồm chữ số, độ dài 10 chữ số!";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 11</title>
</head>

<body>
    <style>
        label,
        input {
            display: block;
        }

        label {
            margin-top: 15px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 5px 20px;
            border: 1px solid #c3bbbbbb;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 5px 10px;
            border: none;
            background: black;
            color: white;
        }
    </style>
    <h1>Form Đăng ký</h1>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php set_value("fullname") ?>">
        <?php form_error("fullname"); ?>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" value="<?php set_value("username") ?>">
        <?php form_error("username"); ?>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <?php form_error("password"); ?>
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" id="phone" value="<?php set_value("phone") ?>">
        <?php form_error("phone"); ?>
        <input type="submit" value="Đăng ký" name="btn_reg">
    </form>
</body>

</html>