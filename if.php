<?php
//
$age = 20;
if ($age > 20) {
    echo "成人　\n";
} else if($age === 20) {
    echo "新成人おめでとう!! \n";
} else if($age === 19) {
    echo "来年は新成人ですね!! \n";
} else {
    echo "未成年 \n";
}

//
if (true) {
    echo "true だとここを通る? \n";
}
//
if (false) {
    echo "false だとここを通る? \n";
}

//
$age = 20;
if ($age >= 20) {
    echo "成人です \n";
}
if ($age < 20) {
    echo "未成年です \n";
}

//elseで書き換え
if ($age >= 20) {
    echo "成人です \n";
} else {
    echo "未成年です　\n";
}

//elseif付き
if ($age > 20) {
    echo "成人 \n";
} else if($age === 20) {
    echo "新成人おめでとう!! \n";
} else {
    echo "未成年 \n";
}