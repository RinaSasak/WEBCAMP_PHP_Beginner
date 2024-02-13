<?php
//
$i = 1;
switch($i) {
    case 0:
        echo "i は 0です \n";
        break;
        
    case 1;
        echo "i は 1です \n";
        break;
        
    default:
        echo "i は 0と1 以外です \n";
        break;
}
// PHP 8未満だと特に注意が必要なコード
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;
        
    case '2':
        echo "i は '2'(string)です \n";
        break;
    
    case 2:
        echo "i は 2(int)です \n";
        break;
}

// PHP 8以降で使えるようになった構文「match式」
$i = 2;
$s = match($i) {
    '2a' => "i は '2a'です \n",
    '2' => "i は '2'(string)です \n",
    2 => "i は 2(int)です \n",
};
//
echo $s;