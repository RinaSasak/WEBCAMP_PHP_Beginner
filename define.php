<?php

/*定数の定義*/
define('DEF_INT', 123); //整数
define('DEF_FLOAT', 3.14); //小数
define('DEF_STRING', "string"); //文字列

//定数の使用
var_dump(DEF_INT);
var_dump(DEF_FLOAT);
VAR_dump(DEF_STRING);

//演習問題
$num_string = "999";
$num_int = 999;

var_dump($num_string);
var_dump($num_int);

define('TEST_FLOAT', 1.23);
var_dump(TEST_FLOAT);