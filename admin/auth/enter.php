<?php
define('UFK', TRUE);
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';

if($_SESSION['auth']['admin']){
    header("Location: ../");
    exit;
}

if($_POST){
    $login = trim($_POST['user']);
    $pass = trim($_POST['pass']);
    if($login == ADM_LOGIN AND $pass == ADM_PASSWORD){
        $_SESSION['auth']['admin'] = "admin";
        header("Location: ../");
        exit;
    }else{
        $_SESSION['res'] = '<div class="error">Неверный логин или пароль!</div>';
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../<?=ADMIN_TEMPLATE?>inc/style.css" />
<title>Вход в админку</title>
</head>

<body>
<div class="karkas">
	<div class="head">
		<h1 class="logo">УФК по Республике Дагестан</h1>
	</div>  
    <hr />
	<div class="enter">
        <form class="auth" method="post" action="">
            <input type="text" name="user" placeholder="Логин" />
            <input type="password" name="pass"  placeholder="Пароль"  /><br />
            <button type="submit" class="myButton" name="submit" >Войти</button>
        </form>
<?php 
    if(isset($_SESSION['res'])){
    echo $_SESSION['res'];
    unset($_SESSION['res']);}
?>
    </div>
</div>
</body>
</html>
