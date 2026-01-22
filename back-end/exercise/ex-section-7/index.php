<?php
// ===============================
// BÀI TẬP PHẦN 7
// ===============================

# Bài 1: Tạo mảng lưu các số lẻ từ 3 tới 150

/*
 * Khai báo $list_odd là mảng rỗng
 * Chạy for loop từ bắt đầu từ 3 đến 150, tạo bước nhảy là 2 để đảm bảo số lẻ
 * Thêm từng phần tử $i vào mảng $list_odd
 */
$list_odd = array();
for ($i = 3; $i <= 150; $i += 2) {
    $list_odd[] = $i;
}
// echo "Bài tập 1: Tạo mảng lưu các số lẻ từ 3 tới 150";
// echo "<pre>";
// print_r($list_odd);
// echo "</pre>";

# Bài 2: Tạo mảng đa chiều quản lý các bài viết trong website tin tức

/*
 * Mỗi bài viết tin tức gồm:
 * 1. id: id bài viết
 * 2. title: tiêu đề
 * 3. thumbnail: hình ảnh bài viết, lưu trong folder assets/images
 * 4. author: tác giả bài viết
 * 5. date: Thời gian đăng bài
 * 6. description: Mô tả ngắn về bài viết
 * 8. cat_id: ID danh mục bài viết
 * 
 * Lưu category tại $list_category:
 * 1. id: ID danh mục bài viết
 * 2. title: Tên danh mục
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
        "thumbnail" => "assets/images/post_1.jpg",
        "author" => "Nhóm Tác Giả",
        "date" => "20/01/2026 15:04",
        "description" => "Đây là chia sẻ của Đại sứ EU tại Việt Nam Julien Guerrier khi nhìn lại quan hệ giữa hai bên trong 5 năm qua.",
        "cat_id" => 1,
    ),

    // Post 2
    2 => array(
        "id" => 2,
        'title' => "Tỉ phú bóng đá Anh sẽ thưởng 305 tỉ đồng cho U23 Trung Quốc nếu thắng U23 Việt Nam",
        "thumbnail" => "assets/images/post_2.jpg",
        "author" => "Huy Đăng",
        "date" => "20/01/2026 06:46",
        "description" => "Theo thông tin từ truyền thông Trung Quốc, đội bóng đá U23 của họ sẽ nhận khoản thưởng cực lớn, lên đến 81 triệu nhân dân tệ nếu giành vé vào chung kết Giải U23.",
        "cat_id" => 2,
    ),

    // Post 3
    3 => array(
        "id" => 3,
        'title' => "Ông Kim Jong Un cách chức Phó thủ tướng ngay tại nhà máy vì thiếu trách nhiệm",
        "thumbnail" => "assets/images/post_3.jpg",
        "author" => "Hà Đào",
        "date" => "20/01/2026 07:05",
        "description" => "Nhà lãnh đạo Triều Tiên Kim Jong Un đã cách chức một quan chức cấp cao phụ trách chính sách kinh tế và công khai chỉ trích đội ngũ cán bộ điều hành mà ông cho là 'kém năng lực', trong chuyến thị sát dự án hiện đại hóa tổ hợp cơ khí trọng điểm.",
        "cat_id" => 3,
    ),

    // Post 4
    4 => array(
        "id" => 4,
        'title' => "Cú sốc từ 6 trang tâm thư của Brooklyn: Gia đình từng bắt tôi từ bỏ họ Beckham để đổi lấy tiền",
        "thumbnail" => "assets/images/post_4.jpg",
        "author" => "Thiên Phương",
        "date" => "20/01/2026 07:56",
        "description" => "Ở tuổi 26, Brooklyn Beckham vừa gây chấn động dư luận thế giới bằng những tuyên bố đanh thép, bóc trần mặt tối sau ánh hào quang của gia đình nổi tiếng nhất hành tinh.",
        "cat_id" => 4,
    ),
);

# Bài 3: Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
/*
 * Mỗi sản phẩm gồm:
 * 1. id: id sản phẩm
 * 2. name: tên sản phẩm
 * 3. image: hình ảnh sản phẩm, lưu trong folder assets/images
 * 4. price: giá sản phẩm
 */
$list_products = array(
    // Product 1
    1 => array(
        "id" => 1,
        'name' => "Balo đi học unisex thời trang nhiều ngăn tặng túi rút chống nước B42",
        "image" => "assets/images/product_1.jpg",
        "price" => "255.000đ",
    ),
    // Product 2
    2 => array(
        "id" => 2,
        'name' => "Ống Hút Thép Không Gỉ 304 Thân Thiện Với Môi Trường",
        "image" => "assets/images/product_2.jpg",
        "price" => "24.000đ",
    ),
    // Product 3
    3 => array(
        "id" => 3,
        'name' => "Set sticker chống nước đồ vật màu hồng ngọt ngào dễ thương",
        "image" => "assets/images/product_3.jpg",
        "price" => "16.000đ",
    ),
    // Product 4
    4 => array(
        "id" => 4,
        'name' => "Cân Tiểu Ly Điện Tử Nhà Bếp Mini Định Lượng 1g-10kg",
        "image" => "assets/images/product_4.jpg",
        "price" => "130.000đ",
    ),
    // Product 5
    5 => array(
        "id" => 5,
        'name' => "Bình giữ nhiệt Owala 710ml 900ml 24oz 32oz hàng cao cấp",
        "image" => "assets/images/product_5.jpg",
        "price" => "500.000đ",
    ),
    // Product 6
    6 => array(
        "id" => 6,
        'name' => "Túi đựng hộp cơm trưa thời trang",
        "image" => "assets/images/product_6.jpg",
        "price" => "90.000đ",
    ),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 7</title>
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            max-width: 1170px;
            padding: 15px;
            margin: 0 auto;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        li.post-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        a.post-img {
            display: block;
            padding-right: 15px;
            flex: 300px;
            overflow: hidden;
        }

        .post-info {
            flex: 800px;
        }

        .post-title {
            display: block;
            font-size: 21px;
            font-weight: 600;
            color: #111111;
            text-decoration: none;
        }

        .post-title:hover {
            color: #4db2ec;
            text-decoration: none;
        }

        .post-category {
            text-transform: uppercase;
            padding-top: 10px;
            font-size: 18px;
        }

        .post-publish {
            padding-top: 10px;
        }

        .post-author {
            padding-right: 15px;
        }

        h1 {
            text-align: center;
            padding-bottom: 20px;
        }

        ul#list-products {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        li.product-item {
            border: 1px solid #e1e1e1;
            flex-basis: 32%;
            padding-top: 15px;
            padding-bottom: 15px;
            position: relative;
            text-align: center;
            overflow: hidden;
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 30px;
        }

        li.product-item:hover {
            border: 1px solid orange;
        }

        li.product-item:hover img {
            transform: scale(1.05);
            transition: all 0.25s;
        }

        .price {
            color: orange;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 0;
        }

        .buy-now {
            color: white;
            background-color: orange;
            padding: 20px;
            position: absolute;
            width: 100%;
            bottom: -60px;
            left: 0px;
            transition: all 0.1s;
            text-decoration: none;
        }

        li.product-item:hover .buy-now {
            bottom: 0px;
        }

        .product-name {
            color: gray;
            padding-bottom: 5px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
        }

        .no-data {
            font-weight: bold;
            color: red;
            font-size: 20px;
        }
    </style>
    <!-- Bài 4: Hiển thị danh sách bài viết lên giao diện -->
    <div id="news-wrapper" class="container">
        <h1>Danh sách bài viết website tin tức</h1>
        <?php if (!empty($list_posts)) {
            ?>
            <ul>
                <?php foreach ($list_posts as $post) {
                    ?>
                    <li class="post-item">
                        <a href="#" class="post-img"><img src=<?php echo $post['thumbnail'] ?> alt=""></a>
                        <div class="post-info">
                            <a href="#" class="post-title"><?php echo $post['title'] ?></a>
                            <div class="post-category">
                                <?php echo $list_category[$post['cat_id']]['title'] ?>
                            </div>
                            <div class="post-publish">
                                <span class="post-author"><?php echo $post['author'] ?></span>
                                <span class="post-date"><?php echo $post['date'] ?></span>
                            </div>
                            <p class="post-desc"><?php echo $post['description'] ?></p>
                        </div>
                    </li>
                <?php }
                ?>
            </ul>
        <?php } else { ?>
            <div class="no-data">Không tìm thấy bài viết!</div>
        <?php } ?>
    </div>

    <!-- Bài 5: Hiển thị danh sách sản phẩm lên giao diện -->
    <div id="product-wrapper" class="container">
        <h1>Danh sách sản phẩm website bán hàng</h1>
        <?php if (!empty($list_products)) {
            ?>
        <ul id="list-products">
            <?php foreach ($list_products as $product) {
                    ?>
            <li class="product-item">
                <a href="#"><img src=<?php echo $product['image'] ?> alt=""></a>
                <div class="price"><?php echo $product['price'] ?></div>
                <a href="#" class="product-name"><?php echo $product['name'] ?></a>
                <a href="#" class="buy-now">Mua ngay</a>
            </li>
            <?php }
                ?>
        </ul>
        <?php } else { ?>
            <div class="no-data">Không tìm thấy sản phẩm!</div>
        <?php } ?>
    </div>
</body>

</html>