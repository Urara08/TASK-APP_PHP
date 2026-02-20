<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>タスク管理アプリ</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<!--セッション開始-->
<!--ログインをしていなければログインページへ-->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<html>
    <main  class="container">
      <div class="dq-window-2">
        <div class="dq-window-3">
          <ul>
            <?php
            $content = file_get_contents('data.json');
            $Task_line = json_decode($content, true);
            ?>
            <p class="title">現在のタスク状況</p>
            <ul>
              <?php //タスクがなければ
              if (empty($Task_line)){
                echo "<sp class=>" ."＊未完了タスクはありません"."</sp>" ;}
                else{
                  foreach($Task_line as $key =>$input_task){
                    echo "<li>" .($key + 1) . '：' . htmlspecialchars($input_task, ENT_QUOTES, 'UTF-8') . "</li>";
                    }}?>
                    </ul>
                    <form method="post" action="input.php">
                      <input type="text" name="input_task" id="label-input_task" placeholder="追加するタスク">
                      <input type="submit" value="登録" class="button">
                      <br>
                    </form>
                    <form method="post" action="delete.php">
                      <input type="text" name="delete_task" id="label-delete_task" placeholder="削除するタスク番号">
                      <input type="submit" value="削除" class="button">
                    </form>
                    <img src="img/pic.png" class="picture" alt="キャラクター画像">
                  </div>
                  <a href="logout.php">ログアウト</a>
                </div>
              </main>
              <footer>
              </footer>
            </body>
            </html>
