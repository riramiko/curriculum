<?php

/**
 * 在庫一覧画面(メインページ)
 * main.php
 */

// db_connect.phpを読み込む
require_once('db_connect.php');
// functuin.phpを読み込む
require_once('function.php');

// セッションにuser_nameの値がなければlogin.phpにリダイレクト
check_user_logged_in();

// PDOのインスタンスを取得
$pdo = db_connect();
try {
    // SQL文の準備
    $sql = "SELECT * FROM books ORDER BY title ASC";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}

// 新規登録ボタンが押された場合の処理
push_redirect('signup', 'signup_book.php');

// ログアウトボタンが押された場合の処理
push_redirect('logout', 'logout.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reest.css">
    <link rel="stylesheet" href="css/main.css">
    <title>在庫一覧画面</title>
</head>

<body>
    <div class="wrap">
        <h2>在庫一覧画面</h2>
        <form method="post" action="">
            <input class="blue_small_btn" type="submit" value="新規登録" name="signup">
            <input class="gray_small_btn" type="submit" value="ログアウト" name="logout">
            <table>
                <tr>
                    <th>タイトル</th>
                    <th>発売日</th>
                    <th>在庫数</th>
                    <th></th>
                </tr>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo date("Y/m/d" ,strtotime($row['date'])); ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><a class="del" href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
</body>

</html>