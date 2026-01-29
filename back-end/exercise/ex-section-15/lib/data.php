<?php
function form_error($label_field) {
    global $error;
    if (isset($error[$label_field]))  {
        return "<span class=\"error\">{$error[$label_field]}</span><br/>";
    }
    return false;
}


function set_value($label_field) {
    global $$label_field;
    if (!empty($$label_field)) return $$label_field;
    return false;
}