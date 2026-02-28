<?php

function construct()
{
    load_model("index");
}

function showAction()
{
    load("helper", "format");
    $list_buy = get_list_buy_cart();
    $data['list_buy'] = $list_buy;
    load_view('show', $data);
}

function addAction()
{

    load("helper", "url");
    $id = (int) $_GET['id'];
    add_cart($id);
    redirect("?mod=cart&action=show");
}

function update_ajaxAction()
{
    load("helper", "format");
    $id = (int) $_POST["id"];
    $qty = (int) $_POST["qty"];

    update_cart(array($id => $qty));
    $sub_total = get_list_buy_cart()[$id]["sub_total"];
    $total = get_total_cart();
    $num_order = get_num_order_cart();

    $result = array(
        "sub_total" => currency_format($sub_total),
        "total" => $total,
        "num_order" => $num_order
    );

    echo json_encode($result);
}

function updateAction()
{
    load("helper", "url");
    if (isset($_POST['btn_update_cart'])) {
        update_cart($_POST['qty']);
        redirect("?mod=cart&action=show");
        show_data($_POST);
    }
}
function checkoutAction()
{
    load_view('checkout');
}