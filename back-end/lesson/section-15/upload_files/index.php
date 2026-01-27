<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file lên server với php</title>
</head>
<body>
    <h1>Upload file</h1>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        Chọn file: <br> <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>