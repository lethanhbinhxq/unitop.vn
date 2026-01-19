<?php
$str_1 = "Xin chào ";
$str_2 = "admin";

echo $str_1;
echo "<br>";
echo $str_2;
echo "<br>-----------<br>";

$notif = $str_1.$str_2;
echo $notif;

$str_1 .= $str_2;
echo "<br>";
echo $str_1;