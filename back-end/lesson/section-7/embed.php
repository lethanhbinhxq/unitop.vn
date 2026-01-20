<?php
$list_prime = array(2, 3, 5, 7);

/*
 * B1: Chuẩn bị mảng đã xử lý
 * B2: Tạo cấu trúc html mẫu
 * B3: Duyệt mảng
 * B4: Đổ dữ liệu
 */

// $list_users = array(
//     1 => array(
//         "id" => 1,
//         "name" => "Lê Thanh Bình",
//         "email" => "binhlethanh623@gmail.com",
//     ),
//     2 => array(
//         "id" => 2,
//         "name" => "Nguyễn Văn A",
//         "email" => "nguyenvana@gmail.com",
//     ),
// );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhúng dữ liệu mảng lên html</title>
</head>

<body>
    <h1>Danh sách số nguyên tố</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">Stt</td>
                <td align="center" width="200">Số Nguyên Tố</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_prime as $key => $value) {
                ?>
                <tr>
                    <td align="center"><?php echo $key + 1 ?></td>
                    <td align="center"><?php echo $value ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h1>Danh sách thành viên</h1>
    <?php if (!empty($list_users)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <td align="center" width="50">Stt</td>
                    <td align="center" width="50">Id</td>
                    <td width="200">Họ và tên</td>
                    <td width="200">Email</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_users as $key => $value) {
                    ?>
                    <tr>
                        <td align="center"><?php echo $key ?></td>
                        <td align="center"><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                    </tr>
                </tbody>
            </table>
            <?php
                }
                ?>
    <?php } else {

        ?>
        <p>Không tồn tại dữ liệu</p>
    <?php } ?>
</body>

</html>