<?php
/*
 * Hiển thị dữ liệu bài viết lên mục tin tức
 * 1. Tiêu đề (thẻ a)
 * 2. Mô tả ngắn (thẻ p)
 */
require "data/post.php";
?>

<div id="content">
    <h1>Tin tức</h1>

    <?php if (!empty($list_posts)) {
        ?>
        <ul>
            <?php foreach ($list_posts as $post) {
                ?>
                <li class="post-item">
                    <a href="#" class="post-img"><img src=<?php echo $post['thumbnail'] ?> alt=""></a>
                    <div class="post-info">
                        <a href="#" class="post-title">
                            <?php echo $post['title'] ?>
                        </a>
                        <div class="post-category">
                            <?php echo $list_category[$post['cat_id']]['title'] ?>
                        </div>
                        <div class="post-publish">
                            <span class="post-author">
                                <?php echo $post['author'] ?>
                            </span>
                            <span class="post-date">
                                <?php echo $post['date'] ?>
                            </span>
                        </div>
                        <p class="post-desc">
                            <?php echo $post['description'] ?>
                        </p>
                    </div>
                </li>
            <?php }
            ?>
        </ul>
    <?php } else { ?>
        <div class="no-data">Không tìm thấy bài viết!</div>
    <?php } ?>
</div>