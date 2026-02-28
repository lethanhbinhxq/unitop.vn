<?php

function get_list_products() {
    $result = db_fetch_array("SELECT * FROM `tbl_products`");
    return $result;
}

function get_cat_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_product_cat` WHERE `id` = {$id}");
    return $item;
}

function get_list_product_by_cat_id($id) {
    $item = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$id}");
    return $item;
}

function get_product_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = {$id}");
    return $item;
}