<?php
echo '<pre>';
echo 'REQUEST: ' . PHP_EOL;
var_dump($_REQUEST);
echo 'GET REQUEST: ' . PHP_EOL;
var_dump($_GET);
echo 'POST REQUEST: ' . PHP_EOL;
var_dump($_POST);
echo PHP_EOL;
echo 'Привет, пользователь ' . $_POST['login'] . PHP_EOL;
echo 'Твой пароль ' . $_POST['password'] . PHP_EOL;