<?php
$fruits = ["apple","grape","melon","orange"];
echo count($fruits);

echo '<br>';
$fruits = ["apple","grape","melon","orange"];
sort($fruits);
var_dump($fruits);

echo '<br>';
$number = [4,8,1,33,48,29,11];
sort($number);
var_dump($number);

echo '<br>';
$fruits = ["apple","grape","melon","orange"];
if(in_array("orange",$fruits)){
    echo "みかんはあるよ！";
}else{
    echo "みかんはないよ。";
}

echo '<br>';
$fruits = ["apple","grape","melon","orange"];
$atstr = implode("*",$fruits);
var_dump($atstr);
echo '<br>';
$re_fruits = explode("*",$atstr);
var_dump($re_fruits);

?>