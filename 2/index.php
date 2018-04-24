<?php
// 2-1
$tel = "03-0000-0000";
echo $tel."\n";

// 2-2
for ($i=1; $i <= 10; $i++) {
  echo $i."\n";
}

// 2-3
$str = "登録";

if($str == "登録"){
  echo "登録しました。\n";
}

// 2-4
$member = array("name"    => "○田○夫",
                "tel"     => "03-0000-0000",
                "address" => "東京都千代田区");

foreach ($member as $key => $value) {
  echo $key.":".$value."\n";
}

// 2-5
$Rname = test("山田");
echo $Rname;

function test($name)
{
  $rdata = $name."さん、こんにちは!";
  return $rdata;
}
