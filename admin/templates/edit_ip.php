<?php defined('UFK') or die('Access denied'); ?>
<!-- =================================================== -->
<!-- ============ РЕДАКТИРОВАНИЕ IP АДРЕСОВ ============ -->
<!-- =================================================== -->
<div class="content">
	
<h2>Редактирование IP</h2>
<?php

if(isset($_SESSION['edit_ip']['res'])){
    echo $_SESSION['edit_ip']['res'];
    unset($_SESSION['edit_ip']['res']);
}
?>
<form class="edit_page" action="" method="post">	
	<table cellspacing="1" cellpadding="1">
	  <tr>
		<td>* IP-адрес:</td>
		<td><input type="text" name="ip" value="<?=htmlspecialchars($get_ip['ip'])?>" /></td>
	  </tr>
      <tr>
		<td>* Имя сервера:</td>
		<td><input type="text" name="title" value="<?=htmlspecialchars($get_ip['title'])?>" /></td>
	  </tr>
	  <tr>
		<td>Функции:</td>
		<td><input type="text" name="description" value="<?=htmlspecialchars($get_ip['description'])?>" /></td>
	  </tr>
	</table>	
	<p>
        <input class="myButton" type="submit" value="Сохранить" />
    </p>
</form>

<?php unset($_SESSION['edit_ip']); ?>

	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>