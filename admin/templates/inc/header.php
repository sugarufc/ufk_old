<?php defined('UFK') or die('Access denied'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=ADMIN_TEMPLATE?>inc/style.css" />
<link rel="stylesheet" href="<?=ADMIN_TEMPLATE?>font-awesome/css/font-awesome.min.css"/>
<title>Список страниц</title>
</head>

<body>
<div class="karkas">
	<div class="head">
        <div class="head">
    	   <h1 class="logo">УФК по Республике Дагестан</h1>
           <p>
               <a href="/admin" class="myButton">На главную</a>  
               <a href="<?=PATH?>" target="_blank" class="myButton">На сайт</a>  
               <a href="?do=logout" class="myButton"><strong>Выйти</strong></a>               
           </p>
           <h5>Учетная запись администратора</h5>
        </div>
        <div class="menu"> <!-- Menu -->
			<ul class="mainmenu">
                <li><a <?=active_url("view=otdels")?> href="?view=otdels">Справочник ВТС</a></li>
                <li><a <?=active_url("view=ipadreses")?> href="?view=ipadreses">IP адреса</a></li>
			</ul>
		</div>
	</div> <!-- .head -->