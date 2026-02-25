<!--セッション開始-->
<!--ログインをしていなければログインページへ-->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

