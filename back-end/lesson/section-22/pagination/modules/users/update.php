<?php

$id = (int) $_GET["id"];
$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);

// show_array($item);

$errors = [];
$alert = [];
if (isset($_POST['btn_update'])) {

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];

    // ✅ Fullname validation (only letters + spaces)
    if (empty($fullname)) {
        $errors['fullname'] = "Full name is required!";
    } elseif (!preg_match("/^[\p{L}\s]+$/u", $fullname)) {
        $errors['fullname'] = "Full name must contain only letters!";
    }

    // ✅ Gender validation
    if (empty($gender)) {
        $errors['gender'] = "Please select gender!";
    }

    // ✅ If no errors → Success
    if (empty($errors)) {
        $sql = "UPDATE `tbl_users` 
                SET `fullname` = '{$fullname}', `gender` = '{$gender}'
                WHERE `user_id` = '{$id}'";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Cập nhật thành công";
            redirect("?mod=users&act=main");
        }
    }
}

?>
<?php get_header("product"); ?>
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
    <p><?php if (isset($alert['success'])) echo $alert['success']?></p>
    <h1>Cập nhật</h1>
    <form action="" method="POST">

        <label>Họ và tên</label>
        <input type="text" name="fullname" value="<?php if (!empty($item['fullname'])) echo $item['fullname']?>">
        <small style="color:red;"><?php echo $errors['fullname'] ?? ''; ?></small>

        <label>Giới tính</label>
        <input type="radio" name="gender" value="male" id="male" <?php if(isset($item['gender']) && $item['gender'] == 'male') echo "checked=checked" ?>> 
        <label for="male">Nam</label>
        <input type="radio" name="gender" value="female" id="female" <?php if(isset($item['gender']) && $item['gender'] == 'female') echo "checked=checked" ?>> 
        <label for="female">Nữ</label>
        <br>
        <small style="color:red;"><?php echo $errors['gender'] ?? ''; ?></small>

        <input type="submit" value="Cập nhật" name="btn_update">
    </form>
</div>
<?php get_footer() ?>