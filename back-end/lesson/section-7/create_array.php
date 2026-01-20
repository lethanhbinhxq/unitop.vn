<?php

# Tạo mảng rỗng
$error = array();
$error["username"] = "Bạn không được để trống tên đăng nhập";
# Tạo mảng key mặc định
$list_odd = array(1, 3, 5);
# Tạo mảng key xác định
// User: Họ tên, email, id
$info = array(
    "id" => 1,
    "fullname" => "Lê Thanh Bình",
    "email" => "binhlethanh623@gmail.com"
);

echo "<pre>";
print_r($error);
echo "</pre>";