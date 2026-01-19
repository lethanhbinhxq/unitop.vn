<?php
$a = 10;

function checkPositiveEven($n) {
    if (($n > 0) && ($n % 2 == 0)) {
        return true;
    }
    return false;
}

if (checkPositiveEven($a)) {
    $a++;
}

echo "a = {$a}";