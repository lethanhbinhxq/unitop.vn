<?php get_header("product") ?>
<?php
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
$list_users = array();
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_users[] = $row;
    }
}

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
                        <td><?php echo $user['gender'] ?></td>
                        <td><a href="<?php echo $user['url_update'] ?>">Sửa</a>
                            <a href="<?php echo $user['url_delete'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p class="num_rows">Có <?php echo $num_rows ?> thành viên trong hệ thống</p>
    <?php } else { ?>
        <p>Không có dữ liệu user</p>
    <?php } ?>

</div>
<?php get_footer() ?>