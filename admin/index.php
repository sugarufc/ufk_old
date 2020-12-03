<?php

// запрет прямого обращения
define('UFK', TRUE);

session_start();

// подключение файла функций административной части
require_once 'functions/functions.php';

// подключение файла функций пользовательской части
require_once '../functions/functions.php';

// выход из админки
if($_GET['do'] == "logout"){
    unset($_SESSION['auth']);
}

if(!$_SESSION['auth']['admin']){
   // подключение авторизации
   include $_SERVER['DOCUMENT_ROOT'].'/admin/auth/index.php';
}

// подключение файла конфигурации
require_once '../config.php';

// подключение файла функций пользовательской части
//require_once '../functions/functions.php';

// подключение файла функций административной части
//require_once 'functions/functions.php';

$query = search($_POST['query']);

// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'otdels' : $_GET['view'];

$ipadreses = ipadreses();

switch($view){
    case('pages'):
        // страницы
        $pages = pages();       
    break;
    
    case('add_page'):
        if($_POST){
            if(add_page()) redirect('?view=pages');
                else redirect();
        }
    break;
    
    case('del_page'):
        $page_id = (int)$_GET['page_id'];
        del_page($page_id);
        redirect();
    break;
    
    case('edit_page'):
        // редактирование страницы
        $page_id = (int)$_GET['page_id'];
        $get_page = get_page($page_id);
        
        if($_POST){
            if(edit_page($page_id)) redirect('?view=pages');
                else redirect();
        }
    break;
    
    case('edit_ip'):
        // редактирование ip
        $ip_id = (int)$_GET['id'];
        $get_ip = get_ip($ip_id);
        
        if($_POST){
            if(edit_ip($ip_id)) redirect('?view=ipadreses');
                else redirect();
        }
    break;
    
    case('otdels'):
        $otdels = otdel();
    break;
	    
    case('add_otdel'):
        if($_POST){
            if(add_otdel()) redirect('?view=otdels');
                else redirect();
        }
    break;
    
    case('add_ip'):
        if($_POST){
            if(add_ip()) redirect('?view=ipadreses');
                else redirect();
        }
    break;
    
    case('del_otdel'):
        $otdel_id = (int)$_GET['otdel_id'];
        del_otdel($otdel_id);
        redirect();
    break;
    
    case('del_ip'):
        $id = (int)$_GET['id'];
        del_ip($id);
        redirect();
    break;
    
    case('edit_otdel'):
        // редактирование отдела
        $otdel_id = (int)$_GET['otdel_id'];
        $get_otdel = get_otdel($otdel_id);
        
        if($_POST){
            if(edit_otdel($otdel_id)) redirect('?view=otdels');
                else redirect();
        }
    break;
    
    case('otdelsvtc'):
        $otdels = otdel();
    break;
    
    case('users'):
        $otdel = $_GET['otdel']; 
        $vts = vts($otdel);
        $all_users = all_users();
    break;
    
    case('add_people'):
        $otdel = $_GET['otdel']; 
        $vts = vts($otdel);
        $otdels = otdel();
        
        if($_POST){
            if(add_people()) redirect('?view=otdels');
                else redirect();
        }
    break;
    
    case('del_people'):
        $id = (int)$_GET['id'];
        del_people($id);
        redirect();
    break;
    	
    case('edit_people'):
        // редактирование сотрудника
        $user_id = (int)$_GET['user_id'];
        $get_people = get_people($user_id);
        $otdels = otdel();
		$ot = $get_people['otdel'];
        
        if($_POST){
            if(edit_people($user_id)) redirect("?view=users&otdel=$ot");
                else redirect();
        }
    break;
    
    case('search'):
        //$query = search($_POST['query']);
    break;
}

// HEADER
include ADMIN_TEMPLATE.'inc/header.php';

// CONTENT
include ADMIN_TEMPLATE.$view.'.php';

// FOOTER
//include ADMIN_TEMPLATE.'inc/footer.php';

?>