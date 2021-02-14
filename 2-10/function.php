<?php

function getRectangularVolume($length,$width,$height){
    $volume = $length * $width * $height;
    print "直方体の体積は".$volume."。";
}
getRectangularVolume(5,10,8);

?>