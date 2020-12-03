<?php defined('UFK') or die('Access denied'); ?>
<!-- =================================================== -->
<!-- =============== СПИСОК IP АДРЕСОВ ================ -->
<!-- =================================================== -->
<div class="content">
	<h2>IP адреса</h2>
<?php
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>
<p>
    <a href="?view=add_ip" class="myButton">Добавить IP адрес</a>
</p>

        <table class="contact-vts"> <!-- IP -->
        	<tr>
                <th>№</th>
        		<th>IP адрес</th>
        	    <th>Имя сервера</th>
                <th>Функции</th>
                <th>Действие</th>
        	</tr>
            <?php $n = 1; foreach($ipadreses as $key => $item): ?>
        	<tr <?php if ($n % 2 == 0){echo 'class="even"';}; ?>>
        		<td><?=$n?></td>
        		<td><?=$item['ip']?></td>
                <td><?=$item['title']?></td>
        		<td style="text-align: left;" ><?=$item['description']?></td>
                <td class="first" style="width:80px"><a href="?view=edit_ip&amp;id=<?=$item['id']?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp; | &nbsp;<a href="?view=del_ip&amp;id=<?=$item['id']?>" class="del" style="color: red" onclick="return confirm('Удалить ?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>      
        	</tr>
            <?php $n++; endforeach; ?>
        </table>

	</div> <!-- .content -->
<div class="load"></div> <!-- .load -->
<div class="res"></div> <!-- .res -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>