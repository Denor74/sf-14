<?php

 echo 'Вывод результата загрузки файлов: ' . PHP_EOL;
 var_dump($_FILES['files']);
 echo 'Вывод ошибок: ' . PHP_EOL;
var_dump($_FILES['files']['error']);

// isset() - проверяет, установлена ли переменная, что означате, что она должна быть объявлена и не является нулевой
// UPLOAD_ERR_OK 
if (isset($_FILES['files']) && UPLOAD_ERR_OK === $_FILES['files']['error']) {
    echo 'Файл ' . $_FILES['files']['name'] . ' успешно загружен на сервер!';
}