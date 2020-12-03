<?php defined('UFK') or die('Access denied'); ?>
<!-- =================================================== -->
<!-- =============== ДОБАВИТЬ IP ================ -->
<!-- =================================================== -->
<div class="content">
<?php print_arr($get_page) ?>
	
<h2>Добавление IP адреса</h2>
<?php
if(isset($_SESSION['add_ip']['res'])){
    echo $_SESSION['add_ip']['res'];
    unset($_SESSION['add_ip']['res']);
}
?>
<form class="edit_page" action="" method="post">
	
	<table cellspacing="1" cellpadding="1">
	  <tr>
		<td>* IP-адрес:</td>
		<td><input type="text" name="ip"  value="<?=htmlspecialchars($_SESSION['add_ip']['ip'])?>" /></td>
	  </tr>
      <tr>
		<td>* Имя сервера:</td>
		<td><input type="text" name="title" value="<?=htmlspecialchars($_SESSION['add_ip']['title'])?>" /></td>
	  </tr>
	  <tr>
		<td>Функции:</td>
		<td><input type="text" name="description" value="<?=$_SESSION['add_ip']['description']?>" /></td>
	  </tr>
	</table>
	
	<p>
        <input class="myButton" type="submit" value="Сохранить" />
    </p>  

</form>
<?php unset($_SESSION['add_ip']); ?>

	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>