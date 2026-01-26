<?php
function redirect_to($path) {
    ob_start();
    header("Location: {$path}");
}