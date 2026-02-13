<?php
function is_username($username)
{
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($pattern, $username)) 
        return false;
    return true;
}

function is_password($password)
{
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($pattern, $password)) 
        return false;
    return true;
}

function form_error($label_field) {
    global $error;
    if (isset($error[$label_field]))  {
        echo "<span style=\"color:red;\">{$error[$label_field]}</span><br/>";
    }
}


function set_value($label_field) {
    global $$label_field;
    if (!empty($$label_field)) echo $$label_field;
}