<?php get_header("product"); ?>

<?php
$errors = [];
if (isset($_POST['btn_reg'])) {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";

    // ✅ Fullname validation (only letters + spaces)
    if (empty($fullname)) {
        $errors['fullname'] = "Full name is required!";
    } elseif (!preg_match("/^[\p{L}\s]+$/u", $fullname)) {
        $errors['fullname'] = "Full name must contain only letters!";
    }

    // ✅ Username validation (5-15 chars, letters & numbers)
    if (empty($username)) {
        $errors['username'] = "Username is required!";
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $username)) {
        $errors['username'] = "Username must be 5-15 characters (letters/numbers only)";
    }

    // ✅ Password validation (min 6 chars, at least 1 number)
    if (empty($password)) {
        $errors['password'] = "Password is required!";
    } elseif (!preg_match("/^(?=.*\d).{6,}$/", $password)) {
        $errors['password'] = "Password must be at least 6 characters and contain 1 number!";
    }

    // ✅ Email validation
    if (empty($email)) {
        $errors['email'] = "Email is required!";
    } elseif (!preg_match("/^[\w\-\.]+@([\w\-]+\.)+[\w]{2,4}$/", $email)) {
        $errors['email'] = "Email format is invalid!";
    }

    // ✅ Gender validation
    if (empty($gender)) {
        $errors['gender'] = "Please select gender!";
    }

    $password = md5($password);
    // ✅ If no errors → Success
    if (empty($errors)) {
        $sql = "INSERT INTO `tbl_users` (`fullname`, `username`, `password`, `email`, `gender`) 
                VALUES ('{$fullname}', '{$username}', '{$password}', '{$email}', '{$gender}')";
        if (mysqli_query($conn, $sql)) {
            echo "Thêm dữ liệu thành công!";
            redirect("?mod=users&act=main");
        }
    }
}
?>

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
<div id="content">
    <h1>Thêm mới</h1>
    <form action="" method="POST">

        <label>Họ và tên</label>
        <input type="text" name="fullname">
        <small style="color:red;"><?php echo $errors['fullname'] ?? ''; ?></small>

        <label>Tên đăng nhập</label>
        <input type="text" name="username">
        <small style="color:red;"><?php echo $errors['username'] ?? ''; ?></small>

        <label>Mật khẩu</label>
        <input type="password" name="password">
        <small style="color:red;"><?php echo $errors['password'] ?? ''; ?></small>

        <label>Email</label>
        <input type="email" name="email">
        <small style="color:red;"><?php echo $errors['email'] ?? ''; ?></small>

        <label>Giới tính</label>
        <input type="radio" name="gender" value="male" id="male"> 
        <label for="male">Nam</label>
        <input type="radio" name="gender" value="female" id="female"> 
        <label for="female">Nữ</label>
        <br>
        <small style="color:red;"><?php echo $errors['gender'] ?? ''; ?></small>

        <input type="submit" value="Đăng ký" name="btn_reg">
    </form>
</div>
<?php get_footer() ?>