<?php defined('UFK') or die('Access denied'); ?>
    <?php include TEMPLATE.'inc/searchstr.php'; ?> <!-- Поиск -->
        <h1>
            Результат поиска:
        </h1>
        <?php if (is_array($query)): ?>
		<table class="contact-vts"> <!-- Contacts -->
			<tr>
				<th>№</th>
			    <th>Должность</th>
			    <th>ФИО</th>
			    <th>ВТС код (0300)</th>
			    <th>ГТС код (8722)</th>
			    <th>№ каб.</th>
                <th>Отдел</th>
			</tr>
            <?php $n = 1; foreach($query as $key => $item): ?>
			<tr <?php if ($n % 2 == 0){echo 'class="even"';}; ?>>
				<td class="first"><?=$n?></td>
				<td><?=$item['post']?></td>
				<td><?=$item['name']?></td>
				<td class="first"><?=$item['vtc']?></td>
				<td class="first"><?=$item['gtc']?></td>
				<td class="first"><?=$item['kab']?></td>
                <td style="text-transform: uppercase ;"><?=$item['otdel_name']?></td>
			</tr>
            <?php $n++; endforeach; ?>
		</table>
        <?php else: ?>
            <p class="nosearch"><?=$query?></p>
        <?php endif; ?>