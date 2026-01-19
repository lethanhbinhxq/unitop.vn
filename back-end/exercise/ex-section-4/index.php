<?php
// ===========================
// Bài tập tạo biến
// ===========================

# Bài tập 1: Biến lưu trữ danh sách thành viên

$member_list = array(
    1 => array(
        "id" => 1,
        "fullname" => "Lê Thanh Bình",
        "birth_year" => "2003",
    ),

    2 => array(
        "id" => 2,
        "fullname" => "Nguyễn Văn A",
        "birth_year" => "2000",
    ),

    3 => array(
        "id" => 3,
        "fullname" => "Nguyễn Văn B",
        "birth_year" => "2006",
    ),
);

# Bài tập 2: Biến lưu trữ danh sách sản phẩm

$product_list = array(
    1 => array(
        "id" => 1,
        "productName" => "Bút chì",
        "price" => "7000đ",
    ),

    2 => array(
        "id" => 2,
        "productName" => "Bút bi",
        "price" => "10000đ",
    ),

    3 => array(
        "id" => 3,
        "productName" => "Thước kẻ",
        "price" => "15000đ",
    ),
);

# Bài tập 3: Biến lưu thông tin cá nhân
$name = "Bình";
$birth_year = "2003";
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
        sinh năm <strong><?php echo $birth_year ?></strong>,
        cân nặng <strong><?php echo $weight ?></strong>
    </p>
</body>

</html>