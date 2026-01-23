
    <?php
    /*
    * Các hàm chuẩn hóa dữ liệu:
    * --- Họ và tên
    * --- Tên đăng nhập
    * --- Mật khẩu
    * --- Số điện thoại
    */

    # Hàm kiểm tra độ dài tối thiểu và tối đa của chuỗi
    function check_length($str, $min, $max) {
        if (strlen($str) >= $min && strlen($str) <= $max)
            return true;
        return false;
    }

    # Hàm kiểm tra họ và tên
    function is_fullname($fullname) {
        $pattern = "/^(([A-Z][a-z]*)( [A-Z]{1}[a-z]*)+)$/";
        if (preg_match($pattern, $fullname)) 
            return true;
        return false;
    }

    # Hàm kiểm tra tên đăng nhập
    function is_username($username) {
        $pattern = "/^([\w_\.]){6,32}$/";
        if (preg_match($pattern, $username)) 
            return true;
        return false;
    }

    # Hàm kiểm tra mật khẩu
    function is_password($password) {
        $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]){5,31}$/";
        if (preg_match($pattern, $password)) 
            return true;
        return false;
    }

    # Hàm kiểm tra số điện thoại
    function is_phone($phone) {
        $pattern = "/^(0)([1-9]{9})$/";
        if (preg_match($pattern, $phone)) 
            return true;
        return false;
    }

    # Hàm đặt giá trị
    function set_value($label_field) {
        global $$label_field;
        if (isset($$label_field)) {
            echo $$label_field;
        }
    }

    # Hàm đặt lỗi
    function form_error($label_field) {
        global $error;
        if (!empty($error[$label_field])) 
            echo "<span style='font-weight:bold; color:red;'>{$error[$label_field]}</span><br>";
    }