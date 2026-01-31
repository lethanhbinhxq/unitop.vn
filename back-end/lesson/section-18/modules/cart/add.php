<?php

# Lấy thông tin sản phẩm cần thêm vào giỏ hàng
$id = (int)$_GET['id'];
add_cart($id);



show_data($_SESSION['cart']);