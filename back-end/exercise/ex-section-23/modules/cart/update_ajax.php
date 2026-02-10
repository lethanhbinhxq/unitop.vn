<?php

$id = (int)$_POST["id"];
$qty = (int)$_POST["qty"];

update_cart(array($id => $qty));
$sub_total = get_list_buy_cart()[$id]["sub_total"];
$total = get_total_cart();

$result = array (
    "sub_total"=> currency_format($sub_total),
    "total" => $total
);

echo json_encode($result);