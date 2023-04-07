<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сессии и куки - 14-6</title>
    <?php
    session_start();
    ?>
</head>
<body>
<h1 style="color: red; text-align: center;">Модуль 14-6: Сессии и Cooki</h1>
<?php
setcookie(name: 'count', value: 42, expires_or_options: time() + 86400);
echo '$_COOKIE ' . PHP_EOL;
var_dump($_COOKIE);
echo PHP_EOL . 'time() ' . PHP_EOL;
var_dump(time());
echo PHP_EOL . 'session_start() ' . PHP_EOL;
var_dump(session_start());
echo PHP_EOL . '$_SESSION ' . PHP_EOL;
var_dump($_SESSION);
?>
<p2>Ссылка на <a href="/upload-14-6.php">upload-14-6.php</a></p2>

<?php
$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;
?>
<?= '<br>Счетчик сессии <br>' . PHP_EOL;?>
Счетчик <?= $count ?>
</body>
</html>