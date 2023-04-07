<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МОдуль 14-7</title>
</head>
<body>
    <h1 style="color: red; text-align: center;">Модуль 14-7</h1>
    <?php
session_start();

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { ?>
  <html>
  <body>
      <form action="upload-14-7.php" method="post">
          <input name="login" type="text" placeholder="Логин">
          <input name="password" type="password" placeholder="Пароль">
          <input name="submit" type="submit" value="Войти">
      </form>
  </body>
  </html>

<?php } else {
    echo '<h2>Вы уже авторизованы</h2>';
}

// контент для администратора

?>


</body>
</html>