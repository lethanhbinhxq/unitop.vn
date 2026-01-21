<?php
# Hàm trả dữ liệu trong nội bộ hàm
function show_array($data) {
    if (is_array( $data )) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

#Hàm trả dữ liệu thông qua return
function sum($a, $b) {
    $t = $a + $b;
    return $t;
}