<?php
if (isset($_FILES['img1'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES['img1']['name'];
    $file_tname = $_FILES['img1']['tmp_name'];

    move_uploaded_file($file_tname, "upload-images/". $file_name);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="img1" /><br><br>
        <input type="submit" />
    </form>
</body>

</html>