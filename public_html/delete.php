<?php
//data.jsonを読み込み
$content = file_get_contents('data.json');
$Task_line = json_decode($content, true);

//削除するタスク番号をindex.phpから取得
$number = ctype_digit($_POST['delete_task']);
echo $number ;
unset($Task_line[$number-1]);

// ナンバリングを詰める
$Task_line = array_values($Task_line);

//data.jsonを上書き
$file_path = "data.json";
file_put_contents($file_path,json_encode($Task_line, JSON_UNESCAPED_UNICODE));

// 一覧へ戻す
header("Location: index.php");
exit;
?>








