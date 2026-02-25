<?php require_once 'init.php';

// data.jsonを読み込み
$content = file_get_contents('data.json');
$Task_line = json_decode($content, true);

// null のとき空配列にする
$Task_line = $Task_line ?? [];

// フォームが送信されていない、値が空、未定義、数字以外が含まれる場合はexit
if (!isset($_POST['delete_task']) || !ctype_digit($_POST['delete_task'])) {
    header("Location: index.php");
    exit;
}

// 削除するタスク番号をindex.phpから取得
// 数字かどうかをチェックした後、整数に変換
$number = (int)$_POST['delete_task'];

// 配列が空の場合
if (empty($Task_line)) {
    header("Location: index.php");
    exit;
}

// 範囲チェック
if ($number < 1 || $number > count($Task_line)) {
    header("Location: index.php");
    exit;
}

// 入力された値-1のタスクを配列から削除
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








