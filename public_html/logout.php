<?php
session_start();              // セッション開始
$_SESSION = [];               // セッション変数を空にする
session_destroy();            // セッションを破棄する
header("Location: login.php"); // ログイン画面へ戻す
exit;
?>