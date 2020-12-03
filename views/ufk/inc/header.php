<?php defined('UFK') or die('Access denied'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>УФК по Республике Дагестан</title>
	<link rel="stylesheet" href="<?=TEMPLATE?>./css/style.css"/>
    
    <link rel="stylesheet" href="./assets/css/emojione.min.css"/>
    <link rel="stylesheet" href="./assets/css/styles.css" />
</head>
<body>
	<div class="wrapper">


		<div class="header"> <!-- Header -->
			
			<div class="logo"> <!-- Logo -->
                <a href="/" class="headlogo">
    				<img src="<?=TEMPLATE?>./img/logo.png" alt=""/>
    				<h1>УФК по Республике Дагестан</h1>
                </a>
			</div>
            
            <a href="?view=ipadreses" class="hid">123</a>
            
            
			<div class="menu"> <!-- Menu -->
            
				<ul class="mainmenu">
                
                <?php foreach($pages as $key => $item): ?>
					<li><a href="?view=<?=$item['link']?>"><?=$item['title']?></a></li>
                <?php endforeach; ?>
				</ul>
			</div>
		</div> <!-- Header End -->
