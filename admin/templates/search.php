<?php defined('UFK') or die('Access denied'); ?>
<div class="content"> <!-- Content -->
    <h2>Результат поиска:</h2>
    <?php include ADMIN_TEMPLATE.'inc/searchstr.php'; ?>
    <?php if (is_array($query)): ?>
    <table class="contact-vts" cellspacing="1"> <!-- Contacts -->
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
        <?php $n = 1; foreach($query as $key => $item): ?>
        <tr <?php if ($n % 2 == 0){echo 'class="even"';}; ?>>
            <td><?=$n?></td>
            <td><?=$item['post']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['vtc']?></td>
            <td><?=$item['gtc']?></td>
            <td><?=$item['kab']?></td>
            <td><?=$item['otdel_name']?></td>
            <td><a href="?view=edit_people&amp;user_id=<?=$item['id']?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp; | &nbsp;<a href="?view=del_people&amp;id=<?=$item['id']?>" class="del"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
        <?php $n++; endforeach; ?>
    </table>
    <?php else: ?>
    <h5 style="text-align: center;"><?=$query?></h5>
    <?php endif; ?>
</div> <!-- Content End -->