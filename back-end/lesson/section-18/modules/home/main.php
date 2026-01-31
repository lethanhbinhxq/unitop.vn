<?php get_header() ?>

<?php
require "data/product.php";
require 'lib/product.php';
require 'lib/number.php';

$info_cat_mobile = get_cat_by_id(1);
$info_cat_laptop = get_cat_by_id(2);
$list_mobile = get_list_product_by_cat_id(1);
$list_laptop = get_list_product_by_cat_id(2);

?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_cat_mobile['url']; ?>"><h3 class="section-title"><?php echo $info_cat_mobile['cat_title']; ?></h3></a>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($list_mobile)) {
                            foreach ($list_mobile as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title=""
                                        class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['price']); ?></p>
                                </li>
                            <?php }
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_cat_laptop['url']; ?>"><h3 class="section-title"><?php echo $info_cat_laptop['cat_title']; ?></h3></a>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($list_laptop)) {
                            foreach ($list_laptop as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title=""
                                        class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['price']); ?></p>
                                </li>
                            <?php }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>