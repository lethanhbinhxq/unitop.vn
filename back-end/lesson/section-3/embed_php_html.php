<?php
$post_title_1 = "Lorem ipsum dolor sit amet.";
$post_content_1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, illum repellat. Hic atque aliquam eligendi sequi, sapiente sed unde. Quae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident officia veniam debitis nemo enim pariatur esse numquam dignissimos exercitationem cum.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cú pháp PHP</title>
</head>
<body>
    <style>
        h1 {
            color: red;
        }
    </style>
    <div id="content">
        <h1 class="post-title"><?php echo $post_title_1 ?></h1>
        <div class="post-content"><?php echo $post_content_1 ?></div>
    </div>
</body>
</html>