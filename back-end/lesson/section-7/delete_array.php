<?php
$info = array (
    'id' => 1,
    'fullname' => 'Lê Thanh Bình',
    'email' => 'binhlethanh623@gmail.com',
    'website' => 'unitop.vn'
);

echo "<pre>";
print_r($info);
echo "</pre>";

unset($info['website']);
echo "<pre>";
print_r($info);
echo "</pre>";

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
        'website' => 'unitop.vn'
    ),
);
echo "<pre>";
print_r($list_users);
echo "</pre>";

unset($list_users[2]['website']);
echo "<pre>";
print_r($list_users);
echo "</pre>";

unset($list_users[2]);
echo "<pre>";
print_r($list_users);
echo "</pre>";

unset($list_users);