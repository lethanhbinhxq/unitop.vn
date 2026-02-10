<?php get_header("product") ?>
<?php
$num_rows = db_num_rows("SELECT * FROM `tbl_users`");

$num_per_page = 5;
$total_row = $num_rows;
// TỔng số trang
$num_page = ceil($total_row / $num_per_page);
echo $num_page;

$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$start = ($page - 1) * $num_per_page;
echo " {$start}";

$list_users = get_users($start, $num_per_page);

foreach ($list_users as $key => $user) {
    $list_users[$key]['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $list_users[$key]['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
?>
<div id="content">
    <a class="add_new" href="?mod=users&act=add">Thêm mới</a>
    <h1>Danh sách thành viên</h1>
    <?php if (!empty($list_users)) {
        ?>
        <table class="table_data">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Fullname</td>
                    <td>Email</td>
                    <td>Giới tính</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
                foreach ($list_users as $user) {
                    $temp++;
                    ?>
                    <tr>
                        <td><?php echo $temp ?></td>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo show_gender($user['gender']) ?></td>
                        <td><a href="<?php echo $user['url_update'] ?>">Sửa</a> | 
                            <a href="<?php echo $user['url_delete'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
       <?php echo get_paging($num_page, $page, "?mod=users&act=main") ?>
        <p class="num_rows">Có <?php echo $num_rows ?> thành viên trong hệ thống</p>
        <div class="clearfix"></div>
    <?php } else { ?>
        <p>Không có dữ liệu user</p>
    <?php } ?>

</div>
<?php get_footer() ?>