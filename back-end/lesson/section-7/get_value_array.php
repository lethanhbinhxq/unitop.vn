<?php
$info = array (
    'id' => 1,
    'fullname' => 'Lê Thanh Bình',
    'email' => 'binhlethanh623@gmail.com',
);
// Lấy dữ liệu fullname
$fullname = $info["fullname"];
$id = $info["id"];
$email = $info["email"];

// Lấy số nguyên tố đầu tiên
$list_prime = array(2, 3, 5, 7);
echo $list_prime[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu</title>
</head>
<body>
    <p>Id: <strong><?php echo $id?></strong></p>
    <p>Họ và tên: <strong><?php echo $fullname?></strong></p>
    <p>Email: <strong><?php echo $email?></strong></p>
</body>
</html>