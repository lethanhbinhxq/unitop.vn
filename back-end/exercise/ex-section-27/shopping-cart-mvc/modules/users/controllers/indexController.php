<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    load('helper', 'format');
    $list_users = get_list_users();
    //    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function loginAction()
{
    load('helper', 'validation');
    global $error;
    if (isset($_POST["btn_login"])) {
        $error = array();
        #Kiểm tra username
        if (empty($_POST["username"])) {
            $error['username'] = "Không được để trống Tên đăng nhập";
        } else {
            if (!is_username($_POST["username"])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST["username"];
            }
        }

        #Kiểm tra password
        if (empty($_POST["password"])) {
            $error['password'] = "Không được để trống Mật khẩu";
        } else {
            if (!is_password($_POST["password"])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = $_POST["password"];
            }
        }

        #Kết luận
        if (empty($error)) {
            if (check_login($username, md5($password))) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;

                // Lưu thông tin đăng nhập vào cookie nếu chọn ghi nhớ đăng nhập
                if (!empty($_POST["remember_me"])) {
                    setcookie('is_login', true, time() + 3600);
                    setcookie('user_login', $username, time() + 3600);
                }

                redirect_to("?mod=home&act=main");
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    $data["error"] = $error;
    load_view('login', $data);
}

function logoutAction()
{
    # Xử lý logout
    unset($_SESSION["is_login"]);
    unset($_SESSION["user_login"]);
    if (isset($_COOKIE["is_login"]) && isset(($_COOKIE["user_login"]))) {
        setcookie('is_login', false, time() - 3600);
        setcookie('user_login', false, time() - 3600);
    }

    redirect_to("?mod=users&action=login");
}

function addAction()
{
    echo "Thêm dữ liệu";
}

function editAction()
{
    $id = (int) $_GET['id'];
    $item = get_user_by_id($id);
    show_array($item);
}
