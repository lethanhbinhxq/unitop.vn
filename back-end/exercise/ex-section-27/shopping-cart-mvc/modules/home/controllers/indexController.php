<?php

function construct()
{
    load_model("index");
}

function indexAction()
{
    load("helper", "format");
    $info_cat_mobile = get_cat_by_id(1);
    $info_cat_laptop = get_cat_by_id(2);
    $list_mobile = get_list_product_by_cat_id(1);
    $list_laptop = get_list_product_by_cat_id(2);
    $data['info_cat_mobile'] = $info_cat_mobile;
    $data['info_cat_laptop'] = $info_cat_laptop;
    $data['list_mobile'] = $list_mobile;
    $data['list_laptop'] = $list_laptop;
    load_view('index', $data);
}
