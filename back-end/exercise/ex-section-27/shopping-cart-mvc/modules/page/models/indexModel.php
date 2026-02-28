<?php

function get_page_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_pages` WHERE `id` = {$id}");
    return $item;
}
