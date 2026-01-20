<?php
#Thêm phần tử có key xác định
$info = array (
    'id' => 1,
    'fullname' => 'Lê Thanh Bình',
    'email' => 'binhlethanh623@gmail.com',
);
echo "<pre>";
print_r($info);
echo "</pre>";

$info['phone'] = '0886085576';
echo "<pre>";
print_r($info);
echo "</pre>";

#Thêm phần tử có key mặc định
$list_prime = array(2, 3, 5, 7);
echo "<pre>";
print_r($list_prime);
echo "</pre>";

$list_prime[] = 11;
echo "<pre>";
print_r($list_prime);
echo "</pre>";