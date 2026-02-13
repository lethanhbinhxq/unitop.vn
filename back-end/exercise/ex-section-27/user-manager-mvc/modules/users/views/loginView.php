<?php
if (is_login() && get_action() == "login") {
    redirect_to();
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
                <p class="error"><?php form_error("username")?></p>
            <?php } ?>

            <input type="password" name="password" id="password" placeholder="Password">
            <?php if (!empty($error['password'])) { ?>
                <p class="error"><?php form_error(label_field: "password") ?></p>
            <?php } ?>

            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Ghi nhớ đăng nhập</label>

            <input type="submit" value="Đăng nhập" name="btn_login" id="btn_login">
            <?php if (!empty($error['account'])) { ?>
                <p class="error"><?php form_error("account") ?></p>
            <?php } ?>
        </form>
        <a href="" id="lost_pass">Quên mật khẩu?</a>
    </div>
</body>

</html>