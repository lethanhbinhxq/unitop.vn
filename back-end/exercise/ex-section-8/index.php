<?php
// ======================
// BÀI TẬP 1
// ======================

/*
 * Xây dựng hàm kiểm tra số nguyên chẵn
 * check_even();
 * Tham số đầu vào: Số nguyên $n
 */

# Hàm in ra dòng
/*
 * - Nếu $n là số nguyên chẵn:
 * In ra màn hình: "Đây là số nguyên chẵn"
 * - Ngược lại:
 * In ra màn hình: "Đây là số nguyên lẻ"
 */

// function check_even($n)
// {
//     if ($n % 2 == 0) {
//         echo "{$n} là số nguyên chẵn";
//     } else {
//         echo "{$n} là số nguyên lẻ";
//     }
// }
// check_even(6);


# Hàm trả về
/*
 * - Nếu $n chẵn => trả về true
 * - Nếu $n lẻ => trả về false
 */

function check_even($n)
{
    if ($n % 2 == 0)
        return true;
    return false;
}

if (check_even(2)) {
    echo "Đây là số nguyên chẵn";
} else {
    echo "Đây là số nguyên lẻ";
}
echo "<br>----------<br>";

// ======================
// BÀI TẬP 2
// ======================

/*
 * Hàm tính tổng các số nguyên tố từ 2 -> $n ($n >= 2)
 *  * check_prime()
 * Kiểm tra một số có phải là số nguyên tố hay không
 * Cho chạy vòng lặp $i từ 2 tới căn bậc 2 của n
 * Nếu $n chia hết cho $i 
 * => $n không phải số nguyên tố
 * => trả về false
 * Ngược lại, nếu chạy hết vòng lặp vẫn không có số $i thỏa mãn $n chia hết cho $i
 * => $n là số nguyên tố
 * => trả về true
 * 
 *  * total_prime()
 * Chạy vòng lặp từng số $i từ 2 tới $n
 * Kiểm tra số nguyên tố bằng hàm check_prime()
 * Nếu là số nguyên tố => Cộng vào tổng
 * Ngược lại => Bỏ qua
 */

function check_prime($n)
{
    if ($n < 2)
        return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0)
            return false;
    }
    return true;
}

function total_prime($n)
{
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prime(($i))) {
            $t += $i;
        }
    }
    return $t;
}
echo total_prime(15);
echo "<br>----------<br>";
// ======================
// BÀI TẬP 3
// ======================

/*
 * Hàm lấy thông tin chi tiết một bài viết theo id trong mảng bài viết
 * 1. Khai bào mảng bài viết
 * 2. viết hàm get_post_by_id(), tham số $id là số nguyên
 * 3. hàm trả về thông tin bài viết:
 * * title: Tiêu đề
 * * thumbnail: đường dẫn tới ảnh bài viết
 * * author: tác giả bài viết
 * * date: ngày đăng bài viết
 * * description: mô tả ngắn về bài viết
 * * title: danh mục bài viết
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

function get_post_by_id($id)
{
    global $list_category, $list_posts;
    if (!empty($list_posts) && array_key_exists($id, $list_posts)) {
        return $list_posts[$id];
    } else {
        return false;
    }
}

$post = get_post_by_id(2);
if ($post) {
    echo "Tiêu đề bài viết: {$post['title']} <br>";
    echo "Đường dẫn tới ảnh bài viết: {$post['thumbnail']} <br>";
    echo "Tác giả bài viết: {$post['author']} <br>";
    echo "Ngày đăng bài viết: {$post['date']} <br>";
    echo "Mô tả ngắn về bài viết: {$post['description']} <br>";
    echo "Danh mục bài viết: {$list_category[$post['cat_id']]['title']} <br>";
} else {
    echo "Không tìm thấy bài viết!";
}
