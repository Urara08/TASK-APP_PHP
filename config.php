<?php session_start(); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['id'];
    $password = $_POST['password'];

    if ($username === 'Andy' && $password === 'secret') {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $message = 'IDまたはパスワードが違います。';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<!--メッセージを表示-->
<h1>Login<?php echo $message; ?></h1>
</body>
</html>


