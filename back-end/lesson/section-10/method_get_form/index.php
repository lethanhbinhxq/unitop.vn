<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (isset($_GET["btn_search"])) {
    show_array($_GET);

    $q = $_GET["q"];
    echo $q;
}

#Get dữ liệu từ URL
$mod = $_GET["mod"];
$act = $_GET["act"];
$id = $_GET["id"];

echo "{$mod} - {$act} - {$id}";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyền dữ liệu form phương thức GET</title>
</head>

<body>
    <a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
    <h1>Tìm kiếm</h1>
    <form action="" method="GET">
        Tìm kiếm: <input type="text" name="q">
        <input type="submit" value="Search" name="btn_search">
    </form>
</body>

</html>