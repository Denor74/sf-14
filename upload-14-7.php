<?php
// Это короткая форма (синтаксический сахар) тернарного оператора с isset()
// если переменной нет или она равна null - то используется значение, указанное после ??

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

// зададим книгу паролей
$users = [
     'admin' => ['id' => '1', 'password' => '123'],
];


if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['admin']['password']) {
    
         // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['admin']['id']; 
        $_SESSION['login'] = $username; 

    }
}

    
$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
?>
// контент для администратора
    <a href="index.php">Вернуться на главную</a>

<?php }