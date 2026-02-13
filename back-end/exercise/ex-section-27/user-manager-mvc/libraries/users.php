<?php

function is_login() {
    if (isset($_SESSION['is_login'])) {
        return true;
    }
    return false;
}

function user_login() {
    if (!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
}

function info_user($field = 'id') {
    if (empty($_SESSION['user_login'])) return null;

    $username = $_SESSION['user_login'];
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item[$field];
}