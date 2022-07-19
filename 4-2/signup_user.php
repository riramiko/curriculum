<?php

/**
 * ユーザー登録
 * signup_user.php
 */

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');

// POSTで送られていれば処理実行
if (isset($_POST["signup"])) {
    // ユーザー名が入力されていない場合の処理
    if (empty($_POST["name"])) {
        echo "ユーザー名が未入力です。";
    } else if (empty($_POST["pass"])) {
        // パスワードが入力されていない場合の処理
        echo "ユーザー名が未入力です。";
    } else {
        // nameとpassword両方送られてきたら処理実行
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "INSERT INTO users (name, password) VALUES (:name, :pass)";
            // パスワードをハッシュ化
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            // プリペアドステートメントの作成
            $stmt = $pdo->prepare($sql);
            // 値をバインド
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':pass', $hash);
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
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reest.css">
    <link rel="stylesheet" href="css/main.css">
    <title>新規ユーザー登録ページ</title>
</head>

<body>
    <div class="wrap">
    <h2>ユーザー登録画面</h2>
    <form method="post" action="">
        <input type="text" name="name" id="name" placeholder=" ユーザー名" size="35"><br><br>
        <input type="text" name="pass" id="pass" placeholder=" パスワード" size="35"><br><br>
        <input class="blue_btn" type="submit" value="新規登録" name="signup" id="signup">
    </form>
</div>
</body>

</html>