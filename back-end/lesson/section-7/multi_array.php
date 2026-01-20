<?php
$list_users = array(
    1 => array(
        "id" => 1,
        "name" => "Lê Thanh Bình",
        "email" => "binhlethanh623@gmail.com",
    ),
    2 => array(
        "id" => 2,
        "name" => "Nguyễn Văn A",
        "email" => "nguyenvana@gmail.com",
    ),
);
echo "<pre>";
print_r($list_users);
echo "</pre>";

$list_users[3] = array(
    "id" => 3,
    "name" => "Nguyễn Văn b",
    "email" => "nguyenvanb@gmail.com",
);
echo "<pre>";
print_r($list_users);
echo "</pre>";

$list_users[4]['id'] = 4;
$list_users[4]['name'] = 'Nguyễn Văn C';
$list_users[4]['email'] = "nguyenvanc@gmail.com";
echo "<pre>";
print_r($list_users);
echo "</pre>";

$info = $list_users[3];
echo "<pre>";
print_r($info);
echo "</pre>";