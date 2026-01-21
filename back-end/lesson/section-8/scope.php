<?php
$a = 10;
$b = 50;

function sum() {
    global $a, $b;
    // return $a + $b;
    return $GLOBALS['a'] + $GLOBALS['b'];
}

echo sum();