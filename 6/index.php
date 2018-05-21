<?php
$user = "user01";
$pass = "abcdefg";
$dbname = "mysql:host=localhost;dbname=member";

$dbh = new PDO($dbname, $user, $pass);

try {
    echo "DBにログインしました。";
    $dbh = null;
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}
 ?>
