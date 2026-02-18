<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>タスク管理アプリ</title>
  </head>

  <body>
    <ul>
      <?php
      $content = file_get_contents('data.json');
      $Task_line = json_decode($content, true);
      ?>

      <h2>現在のタスク状況</h2>
      <ul>
        <?php //タスクがなければ
        if (empty($Task_line)){
          echo "<sp>" ."未完了タスクはありません"."</sp>" ;}

          else{
            foreach($Task_line as $key =>$input_task){
              echo "<li>" .($key + 1) . '：' . htmlspecialchars($input_task, ENT_QUOTES, 'UTF-8') . "</li>";
              }}?>
              </ul>
              <br>
              <form method="post" action="input.php">
                <input type="text" name="input_task" id="label-input_task" placeholder="追加するタスク">
                <input type="submit" value="登録する">
                <br>
              </form>
              <form method="post" action="delete.php">
                <input type="text" name="delete_task" id="label-delete_task" placeholder="削除するタスク番号">
                <input type="submit" value="削除する">
              </form>
            </body>
            </html>
