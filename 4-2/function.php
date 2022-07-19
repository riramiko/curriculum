<?php
/**
 * 関数化
 * function.php
 */

/**
 * $_SESSION['name']が空だった場合、ログインページにリダイレクトする
 * @return void
 */
function check_user_logged_in()
{
  // セッション開始
  session_start();
  // セッションにuser_nameの値がなければlogin.phpにリダイレクト
  if (empty($_SESSION['user_name'])) {
    header("Location: login.php");
    exit;
  }
}

/**
 * ボタンが押されたらリダイレクト
 */
function push_redirect($btn, $page) {
    if (!empty($_POST["$btn"])) {
        // signup_book.phpにリダイレクト
        header("Location: $page");
        exit;
    }
}
