<?php
// ============================
// BÀI TẬP 1
// ============================

/*
 * Đầu vào:
 * 1. $total_rows: tổng số bài
 * 2. $num_per_page: số bài trên mỗi trang
 * Đầu ra: Tính số trang hiển thị $num_page
 * Cách làm: Lấy $total_rows chia $num_per_page rồi làm tròn lên
 * Dùng hàm ceil
 */

$total_rows = 1000;
$num_per_page = 12;
$num_page = ceil($total_rows / $num_per_page);
echo "{$num_page}";
echo "<br>-------------<br>";

// ============================
// BÀI TẬP 2
// ============================

/*
 * Đầu vào: Cho 1 mảng số nguyên
 * Đầu ra: Mảng số nguyên chẵn từ mảng cho trước
 * Cách làm: Dùng hàm array_filter($array, $filter_function)
 */

$list_number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function check_even($n)
{
    if ($n % 2 == 0)
        return true;
    return false;
}

$list_even_number = array_filter($list_number, "check_even");
echo "<pre>";
print_r($list_even_number);
echo "</pre>";
echo "<br>-------------<br>";

// ============================
// BÀI TẬP 3
// ============================

/*
 * Hiển thị mảng danh mục theo đa cấp
 * Giáo dục
 * -- Khuyến học
 * -- Du học
 * Thể thao
 * -- Châu Âu
 * -- Châu Á
 */

$list_post_cat = array(
    1 => array(
        "id" => 1,
        "cat_title" => "Giáo dục",
        "level" => 0,
    ),
    2 => array(
        "id" => 2,
        "cat_title" => "Khuyến học",
        "level" => 1,
    ),
    3 => array(
        "id" => 3,
        "cat_title" => "Du học",
        "level" => 1,
    ),
    4 => array(
        "id" => 4,
        "cat_title" => "Thể thao",
        "level" => 0,
    ),
    5 => array(
        "id" => 5,
        "cat_title" => "Châu Âu",
        "level" => 1,
    ),
    6 => array(
        "id" => 6,
        "cat_title" => "Ngoại hạng Anh",
        "level" => 2,
    ),
    7 => array(
        "id" => 7,
        "cat_title" => "Châu Á",
        "level" => 1,
    ),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện hàm php</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($list_post_cat)) {
                foreach ($list_post_cat as $cat) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $cat['id'] ?>
                        </td>
                        <td>
                            <?php echo str_repeat("--", $cat["level"]) . ' ' . $cat['cat_title'] ?>
                        </td>
                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>
</body>

</html>