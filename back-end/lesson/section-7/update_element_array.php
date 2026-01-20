<?php
$info = array (
    'id' => 1,
    'fullname' => 'Lê Thị Thanh Bình',
    'email' => 'binhlethanh623@gmail.com',
);
echo "<pre>";
print_r($info);
echo "</pre>";

$info['fullname'] = "Lê Thanh Bình";
echo "<pre>";
print_r($info);
echo "</pre>";