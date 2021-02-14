<?php

// ループ文×条件分岐
$sum = 0;
$i = 0;

while($sum>=0){
    if($sum<40){
    $i++;
    $j = mt_rand(1,6);
    echo $i."回目=".$j."<br>";
    $sum += $j;
    }else {
    echo "合計".$i."回でゴールしました";
    break;
    }
}

?>