<?php defined('UFK') or die('Access denied'); ?>
<div class="content">
	
<h2>Редактирование отдела</h2>
<?php
if(isset($_SESSION['edit_otdel']['res'])){
    echo $_SESSION['edit_otdel']['res'];
    unset($_SESSION['edit_otdel']['res']);
}
?>
<form class="edit_page" action="" method="post">	
	<table cellspacing="0" cellpadding="0">
	  <tr>
		<td>*Наименование:</td>
		<td><input type="text" name="otdel_name" value="<?=htmlspecialchars($get_otdel['otdel_name'])?>" /></td>
	  </tr>
      <tr>
		<td>*Полное наименование:</td>
		<td><input type="text" name="full_name" value="<?=htmlspecialchars($get_otdel['full_name'])?>" /></td>
	  </tr>
	  <tr>
		<td>*alias:</td>
		<td><input type="text" name="alias" value="<?=htmlspecialchars($get_otdel['alias'])?>" /></td>
	  </tr>
      <tr>
		<td>Позиция:</td>
		<td><input type="text" name="position" value="<?=$get_otdel['position']?>" /></td>
	  </tr>
	</table>	
	<p>
        <input class="myButton" type="submit" value="Сохранить" />
    </p>
</form>

<?php unset($_SESSION['edit_otdel']); ?>

	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>