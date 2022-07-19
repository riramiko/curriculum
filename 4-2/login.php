<?php

/**
 * ログイン
 * login.php
 */

// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');

// セッション開始
session_start();

// 新規登録ボタンが押された場合の処理
push_redirect('signup', 'signup_user.php');

// ログインボタンが押された場合の処理
if (!empty($_POST["login"])) {
    // ユーザー名が入力されていない場合の処理
    if (empty($_POST["name"])) {
        echo "ユーザー名が未入力です。";
    } else if (empty($_POST["pass"])) {
        // パスワードが入力されていない場合の処理
        echo "ユーザー名が未入力です。";
    } else {
        // 両方が入力されている場合の処理
        if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
            // ユーザー名とパスワードのエスケープ処理
            $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
            $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);

            // ログイン開始
            // PDOのインスタンスを取得
            $pdo = db_connect();
            try {
                // データベースアクセスの処理文章。ユーザー名があるか判定
                // SQL分の準備
                $sql = "SELECT * FROM users WHERE name = :name";
                // プリペアドステートメントの準備
                $stmt = $pdo->prepare($sql);
                // nameをバインド
                $stmt->bindParam(':name', $name);
                // 実行
                $stmt->execute();
            } catch (PDOException $e) {
                // エラーメッセージの出力
                echo 'Error: ' . $e->getMessage();
                // 終了
                die();
            }

            // 結果が1行取得できたら
            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // ハッシュ化されたパスワードを判定する定型関数password_verify
                // 入力された値と引っ張ってきた値が同じか判定
                if (password_verify($pass, $row['password'])) {
                    // セッションに値を保存
                    $_SESSION["user_id"] = $row['id'];
                    $_SESSION["user_name"] = $row['name'];
                    // main.phpにリダイレクト
                    header("Location: main.php");
                    exit;
                } else {
                    // パスワードが違っていた場合の処理
                    echo "パスワードに誤りがあります。";
                }
            } else {
                // ユーザー名がなかった場合の処理
                echo "ユーザー名かパスワードに誤りがあります。";
            }
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
    <title>ログインページ</title>
</head>

<body>
    <div class="wrap">
        <form method="post" action="">
            <div class="byside">
                <h2>ログイン画面</h2>
                <input class="green_btn" type="submit" name="signup" id="signup" value="新規ユーザー登録"><br><br>
            </div>
            <input type="text" name="name" id="name" placeholder=" ユーザー名" size="35"><br><br>
            <input type="text" name="pass" id="pass" placeholder=" パスワード" size="35"><br><br>
            <input class="blue_btn" type="submit" name="login" value="ログイン">
        </form>
    </div>
</body>

</html>