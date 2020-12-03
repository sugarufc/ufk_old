<?php defined('UFK') or die('Access denied'); ?>
<!-- =================================================== -->
<!-- =============== СПИСОК СОТРУДНИКОВ ================ -->
<!-- =================================================== -->
<div class="content">
	<h2>Список сотрудников</h2>
<?php
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>
<p>
    <a href="?view=add_people" class="myButton">Добавить сотрудника</a>
</p>

<?php include ADMIN_TEMPLATE.'inc/searchstr.php'; ?>

<?php if(!empty($vts)): ?>
<table class="contact-vts">
    <tr>
        <th>№</th>
        <th>Должность</th>
        <th>ФИО</th>
        <th>ВТС код (0300)</th>
        <th>ГТС код (8722)</th>
        <th>№ каб.</th>
        <th>Отдел</th>
        <th>Действие</th>		
    </tr>
    <?php $i = 1; ?>
    
    <?php foreach($vts as $item): ?>
    <tr>
        <td class="first"><?=$i?></td>
        <td><?=htmlspecialchars($item['post'])?></td>
        <td><?=htmlspecialchars($item['name'])?></td>
        <td><?=htmlspecialchars($item['vtc'])?></td>
        <td><?=htmlspecialchars($item['gtc'])?></td>
        <td><?=htmlspecialchars($item['kab'])?></td>
        <td><?=htmlspecialchars($item['otdel'])?></td>
        <td><a href="?view=edit_people&amp;user_id=<?=$item['id']?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp; | &nbsp;<a href="?view=del_people&amp;id=<?=$item['id']?>" class="del" onclick="return confirm('Удалить?')"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
    <?php else: ?>
        <h1 style="text-align:center">В отделе нет сотрудников!</h1>
    <?php endif; ?>
</table>
	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>