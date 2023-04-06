<?php

 echo 'Вывод результата загрузки файлов: ' . PHP_EOL;
 var_dump($_FILES['files']);
 echo 'Вывод ошибок: ' . PHP_EOL;
var_dump($_FILES['files']['error']);
echo 'UPLOAD_ERR_OK ' . PHP_EOL;
var_dump(UPLOAD_ERR_OK);
$errorFiles = $_FILES['files']['name'];
echo '<br> errorFiles' . $errorFile . '<br>';
$uploadErr = UPLOAD_ERR_OK;
echo '<br> uploadErr' . $uploadErr . '<br>';
echo 'Файл ' . $_FILES['files']['name'] . ' успешно загружен на сервер!';

// isset() - проверяет, установлена ли переменная, что означате, что она должна быть объявлена и не является нулевой
// UPLOAD_ERR_OK 
if (isset($_FILES['files']) && UPLOAD_ERR_OK !== $_FILES['files']['error']) {
    echo 'Файл ' . $_FILES['files']['name'] . ' успешно загружен на сервер!';
}