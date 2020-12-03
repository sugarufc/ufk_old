<?php defined('UFK') or die('Access denied'); ?>

<table class="contact-vts"> <!-- Contacts -->
	<tr>
        <th>№</th>
		<th>IP адрес</th>
	    <th>Имя сервера</th>
        <th>Функции</th>
	</tr>
    <?php $n = 1; foreach($ipadreses as $key => $item): ?>
	<tr <?php if ($n % 2 == 0){echo 'class="even"';}; ?>>
		<td class="first"><?=$n?></td>
		<td><?=$item['ip']?></td>
        <td><?=$item['title']?></td>
		<td style="text-align: left;" ><?=$item['description']?></td>        
	</tr>
    <?php $n++; endforeach; ?>
</table>