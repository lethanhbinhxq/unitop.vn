<?php
if (isset($_POST["btn_login"])) {
    $error = array();
    #Kiểm tra username
    if (empty($_POST["username"])) {
        $error['username'] = "Không được để trống Tên đăng nhập";
    } else {
        $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($pattern, $_POST["username"])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = $_POST["username"];
        }
    }

    #Kiểm tra password
    if (empty($_POST["password"])) {
        $error['password'] = "Không được để trống Mật khẩu";
    } else {
        $pattern = "/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/";
        if (!preg_match($pattern, $_POST["password"])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            $password = $_POST["password"];
        }
    }

    #Kết luận
    if (empty($error)) {
        if(check_login($username, md5($password))) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            redirect_to("?page=home");
        }
        else {
            $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp_form_login">
        <h1 class="page_title">ĐĂNG NHẬP</h1>
        <form action="" id="form_login" method="POST">
            <input type="text" name="username" id="username" placeholder="Username">
            <?php if (!empty($error['username'])) { ?>
            <p class="error"><?php echo $error['username']?></p>
            <?php } ?>

            <input type="password" name="password" id="password" placeholder="Password">
            <?php if (!empty($error['password'])) { ?>
            <p class="error"><?php echo $error['password']?></p>
            <?php } ?>

            <input type="submit" value="Đăng nhập" name="btn_login" id="btn_login">
            <?php if (!empty($error['account'])) { ?>
            <p class="error"><?php echo $error['account']?></p>
            <?php } ?>
        </form>
        <a href="" id="lost_pass">Quên mật khẩu?</a>
    </div>
</body>

</html>