<?php

function getCuboidVolume($width, $depth, $height) {
    $area = $width * $depth * $height;
    print "直方体の体積は".$area."㎤です。";
}

getCuboidVolume(10,5,8);

?>