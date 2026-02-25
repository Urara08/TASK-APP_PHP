<?php require_once 'init.php';
//data.jsonを読み込み
$content = file_get_contents('data.json');
$Task_line = json_decode($content, true);

// nullや未定義の場合は空配列を格納
$Task_line = $Task_line ?? []; 

//新規タスクを取得//配列に格納
$Task_line[] = $_POST['input_task'];

// 空入力の場合はexit
if (empty($_POST['input_task'])) {
    header("Location: index.php");
    exit;
}

// ナンバリングを詰める
$Task_line = array_values($Task_line);

//data.jsonを上書き
$file_path = "data.json";
file_put_contents($file_path,json_encode($Task_line, JSON_UNESCAPED_UNICODE));

// 一覧へ戻す
header("Location: index.php");
exit;
?>








