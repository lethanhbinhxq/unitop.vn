<?php

/*
Tạo biến số nguyên $a, nếu $a là số nguyên dương chẵn
=> cộng thêm 1 đơn vị
xuất kết quả ra cho người dùng
*/

$a = 10;

if ($a > 0 && $a % 2 == 0) {
    $a++;
}

echo "a = {$a}";