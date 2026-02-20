<?php session_start();
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['id']?? '';
    $password = $_POST['password']?? '';

    if ($username === $config_id && $password === $config_password) {
        $_SESSION['username'] = $username; 
        header('Location: index.php');
        exit;
    } else {
        $message = 'IDまたはパスワードが違います。';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>タスク管理アプリ</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main  class="container">
      <div class="dq-window-2">
        <div class="dq-window-3">
<!--メッセージを表示-->
    <a href="login.php">戻る</a><br>
    <sp>Login<?php echo $message; ?></sp>
    <br>
                  </div>
                </div>
              </main>
            </body>
            </html>
