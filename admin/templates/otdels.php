<?php defined('UFK') or die('Access denied'); ?>
<!-- =================================================== -->
<!-- =============== СПИСОК ВСЕХ ОТДЕЛОВ =============== -->
<!-- =================================================== -->
<div class="content">
	<h2>Отделы</h2>
<?php
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>
<p>
    <a href="?view=add_otdel" class="myButton">Добавить отдел</a>
</p>

<?php include ADMIN_TEMPLATE.'inc/searchstr.php'; ?>

<table class="contact-vts">
    <tr>
        <th>№</th>
        <th>Наименование</th>
        <th>Полное наименование</th>
        <th>Действие</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($otdels as $item): ?>
    <tr>
        <td class="first"><?=$i?></td>
        <td><a href="?view=users&otdel=<?=$item['alias']?>&id=<?=$item['otdel_id']?>" class="hov"><?=$item['otdel_name']?></a></td>
        <td><a href="?view=users&otdel=<?=$item['alias']?>&id=<?=$item['otdel_id']?>" class="hov"><?=$item['full_name']?></a></td>
        <td class="first"><a href="?view=edit_otdel&amp;otdel_id=<?=$item['otdel_id']?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp; | &nbsp;<a href="?view=del_otdel&amp;otdel_id=<?=$item['otdel_id']?>" class="del" onclick="return confirm('Удалить?')"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a></td>
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