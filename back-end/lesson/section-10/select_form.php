<?php
if(isset($_POST["pay"])) {
    if (empty($_POST["pay"])) {
        echo"Cần chọn hình thức thanh toán";
    } else {
        $pay = $_POST["pay"];
        echo"{$pay}";
    }
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ select option</title>
</head>
<body>
    <h1>Đặt hàng</h1>
    <form action="" method="POST">
        <label for="">Hình thức thanh toán</label> <br>
        <select name="pay" id="">
            <option value="">--Chọn--</option>
            <option value="cod">Thanh toán tại nhà</option>
            <option value="banking">Thank toán qua thẻ tín dụng</option>
        </select>
        <input type="submit" value="Đặt hàng" name="btn_order">
    </form>
</body>
</html>