<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyền dữ liệu form phương thức POST</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="login.php" method="POST">
        Name: <input type="text" name="username"> <br><br>
        E-mail: <input type="email" name="email" id="email"> <br><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>
</html>