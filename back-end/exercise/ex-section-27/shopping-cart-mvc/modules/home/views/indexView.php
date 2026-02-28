<?php

//show_array($list_users);
get_header();
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a href="?mod=product&action=index&id=<?php echo $info_cat_mobile['id'] ?>">
                        <h3 class="section-title"><?php echo $info_cat_mobile['cat_title'] ?></h3>
                    </a>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_mobile)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_mobile as $item) {
                                ?>
                                <li>
                                    <a href="?mod=product&action=detail&id=<?php echo $item['id'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="?mod=product&action=detail&id=<?php echo $item['id'] ?>" title=""
                                        class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price']) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p class="error">Không tìm thấy sản phẩm</p>
                    <?php } ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a href="?mod=product&action=index&id=<?php echo $info_cat_laptop['id'] ?>">
                        <h3 class="section-title"><?php echo $info_cat_laptop['cat_title'] ?></h3>
                    </a>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_laptop)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_laptop as $item) {
                                ?>
                                <li>
                                    <a href="?mod=product&action=detail&id=<?php echo $item['id'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="?mod=product&action=detail&id=<?php echo $item['id'] ?>" title=""
                                        class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price']) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p class="error">Không tìm thấy sản phẩm</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

//show_array($list_users);
get_footer();
?>