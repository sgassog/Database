<?php
// 4-2
session_start();
$_SESSION['name']++;
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>練習問題4</title>
</head>
<body>
  <?php
    echo "SESSION['name']は現在".$_SESSION['name']."です。";
    // /4-2
    // 4-1
    if(isset($_POST['address'])){
      echo $_POST['address']."が送信されました。";
    }
   ?>
  <form action="" method="post">
    <input type="text" name="address">
    <input type="submit" value="送信">
  </form>
  <!-- /4-1 -->
  <hr>
  <!-- 4-3 -->
  <!-- 画像が大きすぎると、環境にもよりますがアップロードできません
  注意をお願いします -->
  <form name="form1" action="view.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    画像：<input type="file" name="upfile">
    <br>
    <input type="submit" value="ファイルアップロード">
  </form>
</body>
</html>
