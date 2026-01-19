<?php
$fullname = "Phan Văn Cương";
$username = "unitop";
$email = "phancuong.qt@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 3</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .value {
            font-weight: bold;
        }
    </style>
    <section>
        <p class="fullname">
            Họ và tên:
            <span class="value">
                <?php echo $fullname; ?>
            </span>
        </p>

        <p class="username">
            Username:
            <span class="value">
                <?php echo $username; ?>
            </span>
        </p>

        <p class="email">
            Email:
            <span class="value">
                <?php echo $email; ?>
            </span>
        </p>
    </section>
</body>

</html>