<?php

# Lấy thông tin sản phẩm cần thêm vào giỏ hàng
$id = (int)$_GET['id'];
add_cart($id);
// unset($_SESSION['cart']);

// show_data($_SESSION['cart']);

redirect("?mod=cart&act=show");