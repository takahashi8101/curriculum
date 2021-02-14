<?php

// 関数×条件分岐

$time = date("H");

if($time >= 5 && $time<10){
    echo "おはようございます";
}else if($time >= 10 && $time <17){
    echo "こんにちは";
}else{
    echo "こんばんは";
}

?>