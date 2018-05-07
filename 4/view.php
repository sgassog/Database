<?php
// 4-3
// 画像が大きすぎると、環境にもよりますがアップロードできません
// 注意をお願いします
$path = "img/".$_FILES['upfile']['name'];
move_uploaded_file($_FILES['upfile']['tmp_name'],$path);
 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img src="<?php echo "img/".$_FILES['upfile']['name']; ?>" alt="">
  </body>
</html>
