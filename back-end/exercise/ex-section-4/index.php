<?php
// ===========================
// Bài tập tạo biến
// ===========================

# Bài tập 1: Biến lưu trữ danh sách thành viên

$member_list = array(
    1 => array(
        "id" => 1,
        "fullname" => "Lê Thanh Bình",
        "birthday" => "2003",
    ),

    2 => array(
        "id" => 2,
        "fullname" => "Nguyễn Văn A",
        "birthday" => "2000",
    ),

    3 => array(
        "id" => 3,
        "fullname" => "Nguyễn Văn B",
        "birthday" => "2006",
    ),
);

# Bài tập 2: Biến lưu trữ danh sách sản phẩm

$product_list = array(
    1 => array(
        "id" => 1,
        "product_name" => "Bút chì",
        "price" => "7000đ",
    ),

    2 => array(
        "id" => 2,
        "product_name" => "Bút bi",
        "price" => "10000đ",
    ),

    3 => array(
        "id" => 3,
        "product_name" => "Thước kẻ",
        "price" => "15000đ",
    ),
);

# Bài tập 3: Biến lưu thông tin cá nhân
$name = "Bình";
$birthday = "2003";
$weight = "63kg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 4</title>
</head>

<body>
    <h1>Bài tập phần 4</h1>
    <p>Tôi là <strong><?php echo $name?></strong>,
        sinh năm <strong><?php echo $birthday ?></strong>,
        cân nặng <strong><?php echo $weight ?></strong>
    </p>
</body>

</html>