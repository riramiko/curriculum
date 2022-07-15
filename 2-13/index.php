<?php

// ceil 切り上げ
    echo "切り上げ".'<br>';
    $x = 2.2;
    $y = 2.22;
    $z = 12.22;
    echo ceil($x).'<br>';
    echo ceil($y).'<br>';
    echo ceil($z).'<br>';

// floor 切り捨て
    echo "切り捨て".'<br>';
    $x = 2.2;
    $y = 2.22;
    $z = 12.22;
    echo floor($x).'<br>';
    echo floor($y).'<br>';
    echo floor($z).'<br>';

// round 四捨五入
    echo "四捨五入".'<br>';
    $x = 2.2;
    $y = 2.55;
    $z = 12.45;
    echo round($x).'<br>';
    echo round($y).'<br>';
    echo round($z).'<br>';

// pi 円周率
    echo "円周率".'<br>';
    function circumference($r) {
        $circumference = $r * 2 *pi();
        echo $circumference;
    }
    // 半径が5の円周の計算
    circumference(5);
    echo '<br>';

// mt_rand 乱数
    echo "乱数".'<br>';
    echo mt_rand(-10, 10).'<br>';

// strlen 文字列の長さ
    echo "文字列の長さ".'<br>';
    $str = "Hello";
    echo strlen($str).'<br>';

    $str = "こんにちは。";
    echo mb_strlen($str).'<br>';

// strpos 検索
    echo "検索".'<br>';
    $str = "hello";
    echo strpos($str, "l");

// substr 文字列の切り取り
    echo "文字列の切り取り".'<br>';
    $str = "Hello World";
    echo substr($str, 4, 3).'<br>';

// str_replace 置換
    echo "置換".'<br>';
    $str = "hello";
    echo str_replace("h", "H", $str).'<br>';
    
    $str = "I am Yoneyama";
    echo str_replace(" ", "", $str).'<br>';
    
// printf フォーマット化した文字列を出力
    echo "フォーマット化した文字列を出力".'<br>';
    $sep = 9;
    $sep_jc = "長月";
    printf ("%d月は和暦で%sです。", $sep, $sep_jc);
    echo '<br>';

    $sep = 9;
    $sep_jc = "長月";
    $sep_gc = "September";
    printf ("%d月は和暦で%s、英語で%sです。",  $sep, $sep_jc, $sep_gc);
    echo '<br>';

    $m = 7;
    $d = 1;
    printf ("私の誕生日は、%02d月%02d日です。", $m, $d);










?>