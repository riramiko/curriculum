<?php

    var_dump(time());
    echo '<br>';
    // 現在時刻を取得
    echo date("Y-m-d H:i:s", time());
    echo '<br>';
    echo date("Y年m月d日 H時i分s秒", time());
    echo '<br>';
    
    echo strtotime("2017/2/16 11:25:00");
    echo '<br>';
    
    // 先週の日曜日
    echo strtotime("last Sunday");
    echo '<br>';
    echo date("Y-m-d H:i:s", strtotime("last Sunday"));
    echo '<br>';
    // 2日後
    echo strtotime("+2 day");
    echo '<br>';
    echo date("Y-m-d H:i:s", strtotime("+2 day"));
    
?>