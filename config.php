<?php 

defined('UFK') or die('Доступ запрещен');
define('PATH', 'http://ufk/');
define('MODEL', 'model/model.php');
define('CONTROLLER', 'controller/controller.php');
define('VIEW', 'views/');
define('TEMPLATE', VIEW.'ufk/');

//БД
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'ufk');

define('TITLE', 'УФК ПО РД');

// папка шаблонов административной части
define('ADMIN_TEMPLATE', 'templates/');

// Логин и Пароль от админки
define('ADM_LOGIN', 'admin');
define('ADM_PASSWORD', '555');

/* Подключение к базе данных MySQL с помощью вызова драйвера */
$dsn = 'mysql:dbname=ufk;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
// Соединение с БД