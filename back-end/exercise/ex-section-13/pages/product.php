<?php
/*
 * Hiển thị dữ liệu sản phẩm lên mục sản phẩm
 * 1. Tiêu đề (thẻ a)
 * 2. Mô tả ngắn (thẻ p)
 */

$list_products = array(
    // Product 1
    1 => array(
        "id" => 1,
        'name' => "Balo đi học unisex thời trang nhiều ngăn tặng túi rút chống nước B42",
        "image" => "public/images/product_1.jpg",
        "price" => "255.000đ",
    ),
    // Product 2
    2 => array(
        "id" => 2,
        'name' => "Ống Hút Thép Không Gỉ 304 Thân Thiện Với Môi Trường",
        "image" => "public/images/product_2.jpg",
        "price" => "24.000đ",
    ),
    // Product 3
    3 => array(
        "id" => 3,
        'name' => "Set sticker chống nước đồ vật màu hồng ngọt ngào dễ thương",
        "image" => "public/images/product_3.jpg",
        "price" => "16.000đ",
    ),
    // Product 4
    4 => array(
        "id" => 4,
        'name' => "Cân Tiểu Ly Điện Tử Nhà Bếp Mini Định Lượng 1g-10kg",
        "image" => "public/images/product_4.jpg",
        "price" => "130.000đ",
    ),
    // Product 5
    5 => array(
        "id" => 5,
        'name' => "Bình giữ nhiệt Owala 710ml 900ml 24oz 32oz hàng cao cấp",
        "image" => "public/images/product_5.jpg",
        "price" => "500.000đ",
    ),
    // Product 6
    6 => array(
        "id" => 6,
        'name' => "Túi đựng hộp cơm trưa thời trang",
        "image" => "public/images/product_6.jpg",
        "price" => "90.000đ",
    ),
);

?>

<div id="content">
    <h1>Sản phẩm</h1>

    <?php if (!empty($list_products)) {
        ?>
        <ul id="list-products">
            <?php foreach ($list_products as $product) {
                ?>
                <li class="product-item">
                    <a href="#"><img src=<?php echo $product['image'] ?> alt=""></a>
                    <div class="price">
                        <?php echo $product['price'] ?>
                    </div>
                    <a href="#" class="product-name">
                        <?php echo $product['name'] ?>
                    </a>
                    <a href="#" class="buy-now">Mua ngay</a>
                </li>
            <?php }
            ?>
        </ul>
    <?php } else { ?>
        <div class="no-data">Không tìm thấy sản phẩm!</div>
    <?php } ?>
</div>