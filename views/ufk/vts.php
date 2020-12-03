<?php defined('UFK') or die('Access denied'); ?>
			<h1>
                <?=$otdel_name['full_name']?>
            </h1>
            <?php if ($vts): ?>
			<table class="contact-vts"> <!-- Contacts -->
				<tr>
					<th>№</th>
				    <th>Должность</th>
				    <th>ФИО</th>
				    <th>ВТС код (0300)</th>
				    <th>ГТС код (8722)</th>
				    <th>№ каб.</th>
				</tr>
                <?php $n = 1; foreach($vts as $key => $item): ?>
				<tr <?php if ($n % 2 == 0){echo 'class="even"';}; ?>>
					<td><?=$n?></td>
					<td><?=$item['post']?></td>
					<td><?=$item['name']?></td>
					<td class="first"><?=$item['vtc']?></td>
					<td class="first"><?=$item['gtc']?></td>
					<td class="first"><?=$item['kab']?></td>
				</tr>
                <?php $n++; endforeach; ?>
			</table>
            <?php else: ?>
            <h2 style="text-align: center;">В данном отделе пока  нет сотрудников c ВТС </h2>
            <?php endif; ?>