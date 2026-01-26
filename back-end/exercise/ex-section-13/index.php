<?php require "lib/template.php"?>
<?php 
get_header();
require "data/product.php";
require "data/post.php";
 ?>
<?php
$page = !empty($_GET["page"]) ? $_GET["page"] : 'home';
$path = "pages/{$page}.php";
if (file_exists($path)) {
    require $path;
} else {
    require "inc/404.php";
}
?>
<?php get_footer()?>
