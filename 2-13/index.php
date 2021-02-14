<?php
$x = 8.3;
echo ceil($x);

echo '<br>';
$x = 12.5;
echo floor($x);

echo '<br>';
$x = 7.8;
echo round($x);

echo '<br>';
echo pi();
function circleArea($r){
    $circle_area = $r * $r * pi();
    echo $circle_area;
}
circleArea(7);

echo '<br>';
echo mt_rand(400,600);

echo '<br>';
$str = "booooooooooooooooooon";
echo strlen($str);

echo '<br>';
$str = "thermos";
echo strpos($str, "m");

echo '<br>';
$str = "thermos";
echo substr($str,2,5);

echo '<br>';
$str = "ther mos";
echo str_replace("ther","Such",$str);
echo '<br>';
echo str_replace(" ","",$str);

echo '<br>';
$str = "おはようございます";
echo mb_strlen($str);

echo '<br>';
$name = "健康体重";
$limit_number = 2;
printf("%sまであと%dkgです",$name,$limit_number);

echo '<br>';
$limit_min = 5;
$limit_sec = 3;
printf("残り%02d分%02d秒",$limit_min,$limit_sec);

echo '<br>';
$limit_time = sprintf("残り%02d分%02d秒",$limit_min,$limit_sec);
echo $limit_time;

?>
