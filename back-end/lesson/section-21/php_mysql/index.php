<?php 
require "db/connect.php";
require "lib/template.php";
require "lib/data.php";
?>
<?php
$mod = !empty($_GET["mod"]) ? $_GET["mod"] : 'home';
$act = !empty($_GET["act"]) ? $_GET["act"] : 'main';

$path = "modules/{$mod}/{$act}.php";
if (file_exists($path)) {
    require $path;
} else {
    require "inc/404.php";
}
?>

