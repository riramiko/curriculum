<?php

/**
 * 本 登録画面
 * signup_book.php
 */

//  db_connect.phpの読み込み
require_once('db_connect.php');
//  function.phpの読み込み
require_once('function.php');

// セッションにuser_nameの値がなければlogin.phpにリダイレクト
check_user_logged_in();

// 登録ボタンが押された場合の処理
if (isset($_POST["signup"])) {
    // title・date・stockの入力チェック 
    if (empty($_POST["title"])) {
        echo "タイトルが未入力です。";
    } else if (empty($_POST["date"])) {
        echo "発行日が未入力です。";
    } else if (empty($_POST["stock"])) {
        echo "在庫数が未入力です。";
    } else {
        // すべての情報が送られてきた場合の処理実行
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];

        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
            // プリペアドステートメントの作成
            $stmt = $pdo->prepare($sql);
            // 値をバインド
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':stock', $stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    }
}

// 戻るボタンが押された場合の処理
push_redirect('return', 'main.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reest.css">
    <link rel="stylesheet" href="css/main.css">
    <title>本 新規登録ページ</title>
</head>

<body>
    <div class="wrap">
        <form method="post" action="">
            <h2>本 登録画面</h2>
            <input type="text" name="title" placeholder=" タイトル" size="35"><br><br>
            <input type="date" name="date" placeholder=" 発売日" size="35"><br><br>
            在庫数：<br>
            <select name="stock">
                <option hidden>選択してください</option>
                <option value=5>5</option>
                <option value=10>10</option>
                <option value=15>15</option>
                <option value=20>20</option>
                <option value=25>25</option>
                <option value=30>30</option>
                <option value=35>35</option>
                <option value=40>40</option>
                <option value=45>45</option>
                <option value=50>50</option>
            </select><br><br>
            <input class="blue_btn" type="submit" name="signup" value="新規登録"><br><br>
            <input class="gray_btn" type="submit" name="return" value="登録せず戻る">
        </form>
    </div>
</body>

</html>