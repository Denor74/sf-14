<?php
// ====================================================================
// В коде ошибка - $_FILES['files']['name'] результатом является массив!!!!!
// =======================================================================

echo 'Вывод результата загрузки файлов: ' . PHP_EOL;
// fileToUpload - поле name в форме загрузки файла
var_dump($_FILES['fileToUpload']);
  echo 'Вывод ошибок: ' . PHP_EOL;
 var_dump($_FILES['fileToUpload']['error']);
 echo 'UPLOAD_ERR_OK ' . PHP_EOL;
  var_dump(UPLOAD_ERR_OK);
// $errorFiles = $_FILES['files']['name'];
// echo '<br> errorFiles' . $errorFile . '<br>';
// $uploadErr = UPLOAD_ERR_OK;
// echo '<br> uploadErr' . $uploadErr . '<br>';
// echo 'Файл ' . $_FILES['files']['name'] . ' успешно загружен на сервер!';

// // isset() - проверяет, установлена ли переменная, что означате, что она должна быть объявлена и не является нулевой
// // UPLOAD_ERR_OK 
// if (isset($_FILES['files']) && UPLOAD_ERR_OK !== $_FILES['files']['error']) {
//     echo 'Файл ' . $_FILES['files']['name'] . ' успешно загружен на сервер!';
// }

// =======================================================================
// Переменные в hph.ini
/*
; Разрешение на загрузку файлов
file_uploads = On
  
; Максимальное время выполнения скрипта в секундах
max_execution_time = 60
  
; Максимальное потребление памяти одним скриптом
memory_limit = 64M
  
; Максимально допустимый размер данных, отправляемых методом POST
post_max_size = 50M
  
; Папка для хранения файлов во время загрузки
upload_tmp_dir = home/user/temp
  
; Максимальный размер загружаемого файла
upload_max_filesize = 5M
  
; Максимально разрешенное количество одновременно загружаемых файлов
max_file_uploads = 10
*/
// путь, где временно хранится загруженный файл
$tmpName = $_FILES['fileToUpload']['tmp_name'];
echo 'tmpName ' . PHP_EOL;
var_dump($tmpName);

// путь для сохранения загруженного файла
// нескольких файлов нужно использовать цикл
$savePath = 'uploads/' . $_FILES['fileToUpload']['name'][0];
//$savePath1 = 'uploads/' . $_FILES['fileToUpload']['name'][1];

// копируем файл 
/*copy() - функция берет уже существующий файл и копирует его по новому адресу.
Возвращает TRUE в случае успешного завершения или FALSE в случае возникновения ошибки.
Она принимает два обязательных параметра:
- путь к исходному файлу
- путь, куда мы хотим сохранить этот файл.
*/

//-----------------------------------------------------------------------
// Вывод одного загруженного файла

// ****************************
// При загрузке нескольих файлов выдает ошибку
 copy($tmpName[0], $savePath);
 //copy($tmpName[1], $savePath1);
// echo 'Вывод загруженного файла: ' . PHP_EOL;
// var_dump($savePath);
// echo PHP_EOL;
// ****************************
?>
<?php 
# <?= - Это сокращенное от <?php echo $a; //? //>  
   ?>
<p class="text-align: center;"><img src="<?= $savePath ?>"></p>
<p class="text-align: center;"><img src="<?//= $savePath1 ?>"></p>
<?php
// ---------------------------------------------------------------------
?>

<?php
$files = $_FILES['fileToUpload'];
var_dump($files);

// empty - проверяет пустая ли переменная
if(empty($files)) {
    echo 'Файлы не загружены.';
} else {
?>

    <table border="1">
        <tr>
            <th colspan=2>Загруженные файлы</th>
        </tr>
        
    <?php foreach ($files['name'] as $key => $name) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $name ?></td>
        </tr>
    <?php } ?>
    </table> 

<?php } ?>



