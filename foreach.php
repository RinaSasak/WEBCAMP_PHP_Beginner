<?php
// 配列の作成
$array = [
    "key1" => "Hello",
    0 => '1st',
    1 => '2nd',
    "key2" => 3.14,
];

// foreachで処理
foreach($array as $k => $v) {
    echo "{$k} -> {$v} \n";
}

// foreachで処理（値のみを受け取る書き方：keyが受け取れないので注意）
echo "\n";
foreach($array as $value) {
    echo "{$value} \n";
}

// chapter8演習問題　問1 やってみた
$array_ch8 = [
    0 => "Red",
    1 => "Yellow",
    2 => "Green",
    3 => "Blue",
    4 => "Black",
];

echo "\n";
foreach($array_ch8 as $color) {
    echo "{$color} \n";
}
echo "\n";

// 解答
$colors = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];
foreach($colors as $v) {
    echo "{$v} \n";
}

// 問2 やってみた
$array_colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];

echo "\n";
foreach($array_colors as $key => $valu) {
    echo "{$key} / {$valu} \n";
}