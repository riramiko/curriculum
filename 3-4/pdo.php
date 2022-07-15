<?php

define('DB_DATABASE', 'checktest4'); //DB名
define('DB_USERNAME', 'root'); // MySQLのユーザー名
define('DB_PASSWORD', 'root'); // MySQLのログインパスワード
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE); // DSNとは、プログラムからDBを参照する場合の名前

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */
function connect() {
    try {
        // PDOインスタンスの作成
        $pdh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // エラー処理方法の設定
        $pdh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdh;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}