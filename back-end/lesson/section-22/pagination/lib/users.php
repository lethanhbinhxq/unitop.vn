<?php
function show_gender($gender) {
    $list_gender = array(
        "male" => "Nam",
        "female" => "Nữ"
    );
    return $list_gender[$gender];
}

function get_users($start = 1, $num_per_page = 10, $where="") {
    if (!empty($where)) {
        $where = "WHERE {$where}";
    }
    return db_fetch_array("SELECT * FROM `tbl_users` {$where} LIMIT {$start}, {$num_per_page}");
}