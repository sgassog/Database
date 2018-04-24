<?php
// 3-1
$data = "TEL:03-0000-0000（代表）";
$tel = substr($data,4,12);
echo $tel."\n";

// 3-2
$data = array(0,1,2,3,4,5);
$last = array_pop($data);
echo $last."\n";

// 3-3
$time = time() + (60*60*24);
$today = date("Y年m月d日 H時i分s秒",$time);
echo $today;
