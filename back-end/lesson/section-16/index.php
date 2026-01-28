<?php 
session_start();
ob_start();
require "data/users.php";
require "lib/url.php";
require "lib/data.php";
require "lib/users.php";
require "lib/template.php";
?>

<?php
$page = !empty($_GET["page"]) ? $_GET["page"] : 'home';
$path = "pages/{$page}.php";

// Kiểm tra login
if (!is_login() && $page != 'login') {
    redirect_to("?page=login");
}

if (file_exists($path)) {
    require $path;
} else {
    require "inc/404.php";
}
?>

