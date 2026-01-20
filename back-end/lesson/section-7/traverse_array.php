<?php
$list_prime = array(2, 3, 5, 7);

$t = 0;
foreach ($list_prime as $item) {
    echo $item . "<br>";
    $t += $item;
}

echo "Tổng: {$t}";

$list_users = array(
    1 => array(
        "id" => 1,
        "name" => "Lê Thanh Bình",
        "email" => "binhlethanh623@gmail.com",
    ),
    2 => array(
        "id" => 2,
        "name" => "Nguyễn Văn A",
        "email" => "nguyenvana@gmail.com",
    ),
);
echo "<pre>";
print_r($list_users);
echo "</pre>";

foreach ($list_users as $item) {
    echo $item['id'] . "<br>";
    echo $item["name"] . "<br>";
    echo $item["email"] . "<br>";
    echo "<br>-----------<br>";
}