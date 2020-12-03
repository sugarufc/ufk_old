<?php defined('UFK') or die('Access denied'); ?>
    <?php include TEMPLATE.'inc/searchstr.php'; ?> <!-- Поиск -->
    
   
        <h1 class="vts">ТОФК</h1>
    <table class="contacts"> <!-- Contacts -->
    <tr><td>
    
    <?php $nnn=1; foreach ($tofk as $key => $item): ?>
    <a href="?view=tofk_vts&tofk_alias=<?=$item['tofk_alias']?>" style="text-align: left;" title="<?=$item['tofk_name']?>"><?=$item['tofk_name']?></a>
    <?php if ($nnn%3==0) echo "</td></tr><tr><td>"; else echo "</td><td>"; $nnn++; ?>
    <?php  endforeach; echo "</td></tr></table>"; ?>