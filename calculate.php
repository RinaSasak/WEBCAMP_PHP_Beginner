<?php

//足し算
$a = 1+2;

//出力
echo $a;
echo "\n";

//出力書式①：一行で書く書き方　カンマで繋げる
echo $a, "\n";

//出力書式②：一行で書く書き方　ダブルクォートの中で変数を展開する
echo "{$a} \n";

//②の方がよく使われるらしい

/*計算する元のほうの値も変数にする*/

//数値を代入
$i=11;
$j=22;

//変数を使って計算
$k=$i+$j;

//出力
echo "{$k} \n";
