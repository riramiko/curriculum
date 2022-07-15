<?php

    // count 要素の数を数える
    echo "要素の数を数える".'<br>';
    $colors = ["red", "blue", "green", "yellow", "pink"];
    echo count($colors).'<br>';
    
    
    // sort 要素の並べ替え
    echo "要素の並べ替え".'<br>';
    $colors = ["red", "blue", "green", "yellow", "pink"];
    sort($colors);
    var_dump($colors);
    echo '<br>';
    
    $colors = ["あか", "あお", "みどり", "きいろ", "ももいろ"];
    sort($colors);
    var_dump($colors);
    echo '<br>';
    
    
    // in_array 配列の中にある要素が存在しているか
    echo "配列の中にある要素が存在しているか".'<br>';
    $colors = ["red", "blue", "green", "yellow", "pink"];
    var_dump(in_array("green", $colors));
    echo '<br>';
    
    $colors = ["red", "blue", "green", "yellow", "pink"];
    if (in_array("yellow", $colors)) {
        echo "黄色で塗ってね！".'<br>';
    } else {
        echo "黄色じゃない色で塗ってね！".'<br>';
    }
    
    
    // implode 配列を結合して文字列を変換
    echo "配列を結合して文字列を変換".'<br>';
    $colors = ["red", "blue", "green", "yellow", "pink"];
    $atstr = implode("&", $colors);
    var_dump($atstr);
    echo '<br>';
    
    $atstr = implode($colors);
    var_dump($atstr);
    echo '<br>';
    
    // explode 文字列を指定の区切りで配列にする
    echo "文字列を指定の区切りで配列にする".'<br>';
    $colors = ["red", "orange", "yellow", "green", "blue", "lndigo", "purple"];
    $atstr = implode("&", $colors);
    var_dump($atstr);
    echo '<br>';
    $re_members = explode("&", $atstr);
    var_dump($re_members);
    echo '<br>';
    
?>