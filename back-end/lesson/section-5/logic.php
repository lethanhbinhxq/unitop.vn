<?php
$x = 10;
$y = 3;

// if ($x > 5 and $y < 6) {
//     echo "OK";
// }

// if ($x > 5 or $y < 2) {
//     echo "OK";
// }

if (!($x > 5)) {
    echo "OK";
}

function check_even($x) {
    if ($x % 2 == 0) return true;
    return false;
}

if (check_even($x)) {
    echo "Đây là số chẵn";
}