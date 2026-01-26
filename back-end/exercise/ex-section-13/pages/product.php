<?php
/*
 * Hiển thị dữ liệu sản phẩm lên mục sản phẩm
 * 1. Tiêu đề (thẻ a)
 * 2. Mô tả ngắn (thẻ p)
 */

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