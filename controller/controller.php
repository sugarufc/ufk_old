<?php
	
defined('UFK') or die('Access denied');

session_start();

require_once MODEL;

$otdel = otdel();
$pages = pages();
$ipadreses = ipadreses();
$view = empty($_GET['view']) ? 'phones' : $_GET['view'];
$query = search($_POST['query']);

switch($view){
    case('vts'):
        $otdel = $_GET['otdel'];    
        $tofk_alias = $_GET['tofk_alias'];
        $vts = vts($otdel);          
        $id = $_GET['id'];
        $otdel_name = otdel_name($id);
    break;
    
    case('tofk'):  
       $tofk = tofk();
    break;
    
    case('tofk_vts'):  
       
    break;
};


// подключение вида
require_once $_SERVER['DOCUMENT_ROOT'].'/views/ufk/index.php';
    
?>