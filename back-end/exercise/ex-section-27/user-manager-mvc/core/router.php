<?php
//Triệu gọi đến file xử lý thông qua request
// require HELPERPATH . DIRECTORY_SEPARATOR ."url.php";

if (isset($_COOKIE['is_login']) && isset($_COOKIE['user_login'])) {
    $_SESSION['is_login'] = true;
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

if (!is_login() && get_action() != 'login') {
    redirect_to('?mod=users&action=login');
}

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . get_controller().'Controller.php';

if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Không tìm thấy:$request_path ";
}

$action_name = get_action().'Action';

call_function(array('construct', $action_name));
