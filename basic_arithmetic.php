<?php

/*四則演算と剰余と冪乗（べきじょう）*/
$i = random_int(1, 999);
$j = random_int(1, 999);

$k = $i + $j;
echo "{$i} + {$j} = {$k} \n";

$k = $i - $j;
echo "{$i} - {$j} = {$k} \n";

$k = $i * $j;
echo "{$i} * {$j} = {$k} \n";

$k = $i / $j;
echo "{$i} / {$j} = {$k} \n";

//剰余
$k = $i % $j;
echo "{$i} % {$j} = {$k} \n";

//冪乗 今時のやつ
$k = $i ** 3;
echo "{$i} ** 3 = {$k} \n";

//冪乗　昔のやり方（powを使う）
$k = pow($i, 3);
echo "pow({$i}, 3) = {$k} \n";
