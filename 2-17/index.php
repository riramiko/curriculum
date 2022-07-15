<?php
// 40マスのすごろくでゴールするための回数を求める
    $n = 0;
    $dice = 0;

    while ($dice < 40) {

        $n++;
        $dice_rand = mt_rand(1, 6);
        echo $n."回目=".$dice_rand.'<br>';
        $dice += $dice_rand;
        
        if ($dice >= 40) {
            
            echo "合計".$n."回でゴールしました".'<br>';
            
        }
            
    }

// 時間帯に応じて挨拶を表示する
    date_default_timezone_set('Asia/Tokyo');
    $h = date('H');
    $greet =["おはようございます", "こんにちは", "こんばんは"];


    if ($h>5 && $h<12) {
        echo "今".$h."時台です".'<br>';
        echo $greet[0];
    }elseif($h>11 && $h<19) {
        echo "今".$h."時台です".'<br>';
        echo $greet[1];
    }else{
        echo "今".$h."時台です".'<br>';
        echo $greet[2];
    }

?>