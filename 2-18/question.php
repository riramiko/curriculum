<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$choices_q1 = [80, 22, 20, 21];
$choices_q2 = ['PHP', 'Python', 'JAVA', 'HTML'];
$choices_q3 = ['join', 'select', 'insert', 'update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer_q1 = 80;
$answer_q2 = "HTML";
$answer_q3 = "select";
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
    <!--POST通信で送られてきた名前を出力-->
    <p class="title">お疲れ様です<?php echo $my_name; ?>さん</p>

    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="POST">

        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach ($choices_q1 as $q1) { ?>
            <input type="radio" name="choices_q1" value="<?php echo $q1; ?>" /><?php echo $q1; ?>
        <?php } ?>

        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach ($choices_q2 as $q2) { ?>
            <input type="radio" name="choices_q2" value="<?php echo $q2; ?>" /><?php echo $q2; ?>
        <?php } ?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach ($choices_q3 as $q3) { ?>
            <input type="radio" name="choices_q3" value="<?php echo $q3; ?>" /><?php echo $q3; ?>
        <?php } ?>

        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <br>
        <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
        <input type="hidden" name="answer_q1" value="<?php echo $answer_q1; ?>">
        <input type="hidden" name="answer_q2" value="<?php echo $answer_q2; ?>">
        <input type="hidden" name="answer_q3" value="<?php echo $answer_q3; ?>">
        <input type="submit" value="回答する">

    </form>
</body>

</html>