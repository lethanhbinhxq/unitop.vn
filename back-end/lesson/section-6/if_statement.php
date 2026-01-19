<?php
// ========================
// CẤU TRÚC ĐIỀU KHIỂN IF
// ========================

# If

// Kiểm tra số chẵn
// $a = 10;
// if ($a % 2 == 0) {
//     echo "{$a} là số chẵn";
// }

# If else

// Kiểm tra tính chẵn lẻ
// $a = 11;
// if ($a % 2 == 0) {
//     echo "{$a} là số chẵn";
// }
// else {
//     echo "{$a} là số lẻ";
// }

// # If elseif ... else ...
$point = 7;
// if ($point < 4) {
//     echo 'F';
// }
// elseif ($point < 5.5) {
//     echo 'D';
// }
// elseif ($point < 7) {
//     echo 'C';
// }
// elseif ($point < 8.5) {
//     echo 'B';
// }
// else {
//     echo 'A';
// }

# Cấu trúc điều khiển lồng nhau
if ($point >= 0 && $point <= 10) {
    if ($point < 4) {
        echo 'F';
    } elseif ($point < 5.5) {
        echo 'D';
    } elseif ($point < 7) {
        echo 'C';
    } elseif ($point < 8.5) {
        echo 'B';
    } else {
        echo 'A';
    }
} else {
    echo "Dữ liệu bạn nhập vào không hợp lệ";
}