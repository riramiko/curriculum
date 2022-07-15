<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$choicesq1 = $_POST['choices_q1'];
$choicesq2 = $_POST['choices_q2'];
$choicesq3 = $_POST['choices_q3'];
$answer_q1 = $_POST['answer_q1'];
$answer_q2 = $_POST['answer_q2'];
$answer_q3 = $_POST['answer_q3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function check($choicesq, $answer) {
    if ($choicesq == $answer) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <!--POST通信で送られてきた名前を表示-->
    <p class="title"><?php echo $my_name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo check($choicesq1, $answer_q1); ?></p>
    
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo check($choicesq2, $answer_q2); ?></p>
    
    
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo check($choicesq3, $answer_q3); ?></p>
    
</body>

</html>