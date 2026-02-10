<?php 
require "db/connect.php";
require "lib/template.php";
require "lib/data.php";
require "lib/url.php";
require "lib/db.php";
require "lib/users.php";
require "lib/paging.php";
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

