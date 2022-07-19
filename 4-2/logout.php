<?php

/**
 * ログアウト画面
 * logout.php
 */

// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reest.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ログアウト</title>
</head>

<body>
    <div class="wrap">
        <h2>ログアウト画面</h2>
        <p class="return">ログアウトしました</p>
        <a class="return" href="login.php">ログイン画面に戻る</a>
    </div>
</body>

</html>