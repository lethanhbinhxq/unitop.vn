<?php

function construct()
{
    load_model("index");
}

function indexAction()
{
    load("helper", "format");
    $id = (int) $_GET['id'];
    $info_cat = get_cat_by_id($id);
    $list_products = get_list_product_by_cat_id($id);
    $data['info_cat'] = $info_cat;
    $data['list_products'] = $list_products;
    load_view('index', $data);
}

function detailAction()
{
    load("helper", "format");
    $id = (int) $_GET["id"];
    $product = get_product_by_id($id);
    $data['product'] = $product;
    load_view('detail', $data);
}
