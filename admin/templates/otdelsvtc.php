<?php defined('UFK') or die('Access denied'); ?>
<div class="content">
	<h2>Отделы</h2>
<?php
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>
	<a href="?view=add_otdel">Добавить отдел</a>
	<table id="sort" class="tabl sort" cellspacing="1">
	  <tr class="no_sort">
		<th class="number">№</th>
		<th class="str_name">Наименование</th>
        <th class="str_name">Полное наименование</th>
        <th class="str_sort">alias</th>
		<th class="str_action">Действие</th>
	  </tr>
<?php $i = 1; ?>

<?php foreach($otdels as $item): ?>
<tr id="<?=$item['otdel_id'];?>">
	<td class="position" style="width:25px"><?=$i?></td>
	<td style="width:80px; text-transform: uppercase;" class="name_page"><?=$item['otdel_name']?></td>
	<td class="position" style="width:300px; text-align: left;"><?=$item['full_name']?></td>
    <td class="position" style="width:80px"><?=$item['alias']?></td>
	<td style="width:160px" class="first"><a href="?view=edit_otdel&amp;otdel_id=<?=$item['otdel_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_otdel&amp;otdel_id=<?=$item['otdel_id']?>" class="del">удалить</a></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>      
	</table>	

	</div> <!-- .content -->
<div class="load"></div> <!-- .load -->
<div class="res"></div> <!-- .res -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>