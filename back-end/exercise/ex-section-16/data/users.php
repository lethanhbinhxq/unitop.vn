<?php

# Mảng dữ liệu user
/*
 * Thông tin user:
 * Họ và tên => fullname
 * Tên đăng nhập => username
 * Mật khẩu => password
 * Email => email
 * Id => id
 */
$list_users = array(
    1 => array(
        'id' => 1,
        "fullname" => "Lê Thanh Bình",
        'username' => 'ltbxq9',
        'password' => md5('X1@oq1ng'),
        'email' => 'binhlethanh623@gmail.com'
    ),

    2 => array(
        'id' => 2,
        "fullname" => "Nguyễn Văn A",
        'username' => 'nguyenvana',
        'password' => md5('Nva1@#'),
        'email' => 'nguyenvana@gmail.com'
    ),

    3 => array(
        'id' => 2,
        "fullname" => "Trần Văn C",
        'username' => 'tranvanc',
        'password' => md5('Tvc@#'),
        'email' => 'tranvanc@gmail.com'
    ),
);