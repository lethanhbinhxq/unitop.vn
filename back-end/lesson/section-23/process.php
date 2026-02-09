<?php

// Tính toán
$num_order = (int)$_POST["num_order"];
$price = (int)$_POST["price"];
$total = $price * $num_order;

$result = array(
    'num_order' => $num_order,
    'price' => $price,
    'total'=> $total,
);

// Xuất thì echo
// echo $total;

echo json_encode( $result );