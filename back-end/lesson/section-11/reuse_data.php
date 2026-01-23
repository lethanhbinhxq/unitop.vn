<?php
if (isset($_POST['btn_reg'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống trường Username";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống trường Password";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST['gender'])) {
        $error['gender'] = "Không được để trống Giới tính";
    } else {
        $gender = $_POST["gender"];
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
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php if (!empty($username))
            echo $username ?>"> <br>
            <p class="error"><?php if (!empty($error['username']))
            echo $error['username'] ?></p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br>
            <p class="error"><?php if (!empty($error['password']))
            echo $error['password'] ?></p>

            <label for="">Giới tính</label> <br>
            <input type="radio" name="gender" value="male" id="male" <?php if(!empty($gender) && $gender == 'male') echo "checked=checked"?>>
            <label for="male">Nam</label> <br>
            <input type="radio" name="gender" value="female" id="female" <?php if(!empty($gender) && $gender == 'female') echo "checked=checked"?>>
            <label for="female">Nữ</label>
            <p class="error"><?php if (!empty($error['gender']))
            echo $error['gender'] ?></p>
            <input type="submit" value="Register" name="btn_reg">
        </form>
    </body>

    </html>