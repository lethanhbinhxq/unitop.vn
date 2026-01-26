<?php
/*
 * Hiển thị dữ liệu bài viết lên mục tin tức
 * 1. Tiêu đề (thẻ a)
 * 2. Mô tả ngắn (thẻ p)
 */

$list_category = array(
    1 => array(
        "id" => 1,
        "title" => "Kinh doanh"
    ),
    2 => array(
        "id" => 1,
        "title" => "Thể thao"
    ),
    3 => array(
        "id" => 1,
        "title" => "Thời sự"
    ),
    4 => array(
        "id" => 1,
        "title" => "Giải trí"
    ),
);
$list_posts = array(
    // Post 1
    1 => array(
        "id" => 1,
        'title' => "Việt Nam hấp dẫn hơn với đầu tư dài hạn",
        "thumbnail" => "public/images/post_1.jpg",
        "author" => "Nhóm Tác Giả",
        "date" => "20/01/2026 15:04",
        "description" => "Đây là chia sẻ của Đại sứ EU tại Việt Nam Julien Guerrier khi nhìn lại quan hệ giữa hai bên trong 5 năm qua.",
        "cat_id" => 1,
    ),

    // Post 2
    2 => array(
        "id" => 2,
        'title' => "Tỉ phú bóng đá Anh sẽ thưởng 305 tỉ đồng cho U23 Trung Quốc nếu thắng U23 Việt Nam",
        "thumbnail" => "public/images/post_2.jpg",
        "author" => "Huy Đăng",
        "date" => "20/01/2026 06:46",
        "description" => "Theo thông tin từ truyền thông Trung Quốc, đội bóng đá U23 của họ sẽ nhận khoản thưởng cực lớn, lên đến 81 triệu nhân dân tệ nếu giành vé vào chung kết Giải U23.",
        "cat_id" => 2,
    ),

    // Post 3
    3 => array(
        "id" => 3,
        'title' => "Ông Kim Jong Un cách chức Phó thủ tướng ngay tại nhà máy vì thiếu trách nhiệm",
        "thumbnail" => "public/images/post_3.jpg",
        "author" => "Hà Đào",
        "date" => "20/01/2026 07:05",
        "description" => "Nhà lãnh đạo Triều Tiên Kim Jong Un đã cách chức một quan chức cấp cao phụ trách chính sách kinh tế và công khai chỉ trích đội ngũ cán bộ điều hành mà ông cho là 'kém năng lực', trong chuyến thị sát dự án hiện đại hóa tổ hợp cơ khí trọng điểm.",
        "cat_id" => 3,
    ),

    // Post 4
    4 => array(
        "id" => 4,
        'title' => "Cú sốc từ 6 trang tâm thư của Brooklyn: Gia đình từng bắt tôi từ bỏ họ Beckham để đổi lấy tiền",
        "thumbnail" => "public/images/post_4.jpg",
        "author" => "Thiên Phương",
        "date" => "20/01/2026 07:56",
        "description" => "Ở tuổi 26, Brooklyn Beckham vừa gây chấn động dư luận thế giới bằng những tuyên bố đanh thép, bóc trần mặt tối sau ánh hào quang của gia đình nổi tiếng nhất hành tinh.",
        "cat_id" => 4,
    ),
);

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