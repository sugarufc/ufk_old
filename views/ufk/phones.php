<?php defined('UFK') or die('Access denied'); ?>
    <?php include TEMPLATE.'inc/searchstr.php'; ?> <!-- Поиск -->
        <h1 class="vts">Телефонный справочник</h1>
    <table class="contacts"> <!-- Contacts -->
    <tr><td>
    
    <?php $nnn=1; foreach ($otdel as $key => $item): ?>
    <a href="?view=vts&otdel=<?=$item['alias']?>&id=<?=$item['otdel_id']?>" title="<?=$item['full_name']?>"><?=$item['otdel_name']?></a>
    <?php if ($nnn%4==0) echo "</td></tr><tr><td>"; else echo "</td><td>"; $nnn++; ?>
    <?php  endforeach;?> <a href="?view=tofk">ТОФК</a> <?php echo "</td></tr></table>"; ?>
    
  <!--   <a href="/files/vtc.docx" class="down">Скачать справочник</a> -->
    			