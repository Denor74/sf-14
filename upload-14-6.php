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

<p2>Ссылка на <a href="/index-14-6.php">index-14-6.php</a></p2>
<?php
echo PHP_EOL . '$_SESSION ' . PHP_EOL;
var_dump($_SESSION);
?>

<?php
$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;
?>

Счетчик <?= $count ?>
</body>
</html>