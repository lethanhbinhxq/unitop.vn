<?php

function base_url($url = "") {
    global $config;
    return $config['base_url'].$url;
}

function redirect_to($url = "/") {
    $path = base_url($url);
    header("Location: {$path}");
}
