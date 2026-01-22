<?php
// ==================
// BÀI TẬP 3
// ==================

/*
 * Tạo link và lấy thông tin từ url
 * <a href='?mod=product&act=main'>Sản phẩm</a>
 * Lấy thông tin
 * --- mod
 * --- act
 * 
 */

if (isset($_GET['mod']) && isset($_GET['act'])) {
    echo "Module: {$_GET['mod']} <br>";
    echo "Action: {$_GET['act']} <br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 10 PHP</title>
</head>
<body>
        <!-- BÀI TẬP 3
    Tạo link và lấy thông tin từ url:
    <a href='?mod=product&act=main'>Sản phẩm</a>
    Lấy thông tin:
        - mod
        - act -->
        <h1>Lấy link từ URL</h1>
        <a href='?mod=product&act=main'>Sản phẩm</a>
</body>
</html>