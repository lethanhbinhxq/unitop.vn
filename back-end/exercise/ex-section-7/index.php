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
echo "Bài tập 1: Tạo mảng lưu các số lẻ từ 3 tới 150";
echo "<pre>";
print_r($list_odd);
echo "</pre>";

# Bài 2: Tạo mảng đa chiều quản lý các bài viết trong website tin tức

/*
 * Mỗi bài viết tin tức gồm:
 * 1. id: số thứ tự bài viết
 * 2. title: tiêu đề
 * 3. post_thumb: hình ảnh bài viết, lưu trong folder assets/images
 * 4. author: tác giả bài viết
 * 5. date: Thời gian đăng bài
 * 6. description: Mô tả ngắn về bài viết
 * 7. detail: Chi tiết bài viết
 * 8. category: Danh mục bài viết
 */

$list_posts = array(
    // Post 1
    1 => array(
        "id" => 1,
        'title' => "Việt Nam hấp dẫn hơn với đầu tư dài hạn",
        "post_thumb" => "assets/images/post_1.jpg",
        "author" => "Nhóm Tác Giả",
        "date" => "20/01/2026 15:04",
        "description" => "Đây là chia sẻ của Đại sứ EU tại Việt Nam Julien Guerrier khi nhìn lại quan hệ giữa hai bên trong 5 năm qua.",
        "category"=> "Kinh doanh",
    ),

    // Post 2
    2 => array(
        "id" => 2,
        'title' => "Tỉ phú bóng đá Anh sẽ thưởng 305 tỉ đồng cho U23 Trung Quốc nếu thắng U23 Việt Nam",
        "post_thumb" => "assets/images/post_2.jpg",
        "author" => "Huy Đăng",
        "date" => "20/01/2026 06:46",
        "description" => "Theo thông tin từ truyền thông Trung Quốc, đội bóng đá U23 của họ sẽ nhận khoản thưởng cực lớn, lên đến 81 triệu nhân dân tệ nếu giành vé vào chung kết Giải U23",
        "category"=> "Thể thao",
        ),

    // Post 3
    3 => array(
        "id" => 3,
        'title' => "Ông Kim Jong Un cách chức Phó thủ tướng ngay tại nhà máy vì thiếu trách nhiệm",
        "post_thumb" => "assets/images/post_3.jpg",
        "author" => "Hà Đào",
        "date" => "20/01/2026 07:05",
        "description" => "Nhà lãnh đạo Triều Tiên Kim Jong Un đã cách chức một quan chức cấp cao phụ trách chính sách kinh tế và công khai chỉ trích đội ngũ cán bộ điều hành mà ông cho là 'kém năng lực', trong chuyến thị sát dự án hiện đại hóa tổ hợp cơ khí trọng điểm.",
        "category"=> "Thời sự",
        ),

    // Post 4
    4 => array(
        "id" => 4,
        'title' => "Cú sốc từ 6 trang tâm thư của Brooklyn: Gia đình từng bắt tôi từ bỏ họ Beckham để đổi lấy tiền",
        "post_thumb" => "assets/images/post_4.jpg",
        "author" => "Thiên Phương",
        "date" => "20/01/2026 07:56",
        "description" => "Ở tuổi 26, Brooklyn Beckham vừa gây chấn động dư luận thế giới bằng những tuyên bố đanh thép, bóc trần mặt tối sau ánh hào quang của gia đình nổi tiếng nhất hành tinh.",
        "category"=> "Giải trí",
        ),

);
# Bài 3: Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 7</title>
</head>
<body>
    <!-- Bài 4: Hiển thị danh sách bài viết lên giao diện -->
     <div id="news-wrapper">

     </div>

    <!-- Bài 5: Hiển thị danh sách sản phẩm lên giao diện -->
     <div id="product-wrapper">

     </div>
</body>
</html>