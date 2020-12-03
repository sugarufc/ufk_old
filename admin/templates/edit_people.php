<?php defined('UFK') or die('Access denied'); ?>
<div class="content">
	
<h2>Редактировать сотрудника</h2>
<?php
if(isset($_SESSION['edit_people']['res'])){
    echo $_SESSION['edit_people']['res'];
}
?>
<form class="edit_page" action="" method="post">
	
<table cellspacing="1" cellpadding="1">
    <tr>
        <td>Должность:</td>
        <td><input type="text" name="post" value="<?=htmlspecialchars($get_people['post'])?>" /></td>
    </tr>
    <tr>
        <td>*ФИО:</td>
        <td><input type="text" name="name" value="<?=htmlspecialchars($get_people['name'])?>" /></td>
    </tr>
    <tr>
        <td>ВТС код (0300):</td>
        <td><input type="text" name="vtc" value="<?=htmlspecialchars($get_people['vtc'])?>" /></td>
    </tr>
    <tr>
        <td>ГТС код (8722):</td>
        <td><input type="text" name="gtc" value="<?=htmlspecialchars($get_people['gtc'])?>" /></td>
    </tr>
    <tr>
        <td>№ каб.</td>
        <td><input type="text" name="kab" value="<?=htmlspecialchars($get_people['kab'])?>" /></td>
    </tr>
    
    <tr>
        <td>*Отдел:</td>
        <td>        
            <?php if($otdels): ?>
            <select style="text-transform: uppercase;" name="otdel">
                <?php foreach($otdels as $item): ?>
                    <option <?php 
                        if($get_people['otdel'] == $item['alias']){
                            echo("selected");
                        }
                    ?> value="<?=$item['alias']?>"><?=$item['otdel_name']?></option>
                <?php endforeach; ?>
            </select>
            <?php endif; ?>
        </td>
    </tr>
	
	<tr>
        <td class="add-edit-txt">Сортировка:</td>
        <td><input class="head-text" type="text" name="positions" value="<?=htmlspecialchars($get_people['positions'])?>" /></td>
    </tr>
    
    
</table>
	
	<p>
        <input class="myButton" type="submit" value="Сохранить" />
    </p>

</form>
<?php unset($_SESSION['edit_people']); ?>

	</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>