<?php defined('UFK') or die('Access denied'); ?>
<!-- =================================================== -->
<!-- =============== ДОБАВИТЬ СОРУДНИКА ================ -->
<!-- =================================================== -->
<div class="content">

    <h2>Добавление сотрудника</h2>
    <?php
        if(isset($_SESSION['add_people']['res'])){
        echo $_SESSION['add_people']['res'];}
    ?>
    <form class="edit_page" action="" method="post">
        <table cellpadding="1" cellspacing="1">
            <tr>
                <td>Должность:</td>
                <td><input type="text" name="post" value="<?=htmlspecialchars($_SESSION['add_people']['post'])?>" /></td>
            </tr>
            <tr>
                <td>*ФИО:</td>
                <td><input type="text" name="name" value="<?=htmlspecialchars($_SESSION['add_people']['name'])?>" /></td>
            </tr>
            <tr>
                <td>ВТС код (0300):</td>
                <td><input type="text" name="vtc" value="<?=htmlspecialchars($_SESSION['add_people']['vtc'])?>" /></td>
            </tr>
            <tr>
                <td>ГТС код (8722):</td>
                <td><input type="text" name="gtc" value="<?=htmlspecialchars($_SESSION['add_people']['gtc'])?>" /></td>
            </tr>
            <tr>
                <td>№ каб.</td>
                <td><input type="text" name="kab" value="<?=htmlspecialchars($_SESSION['add_people']['kab'])?>" /></td>
            </tr>
            <tr>
                <td>*Отдел:</td>
                <td><select style="text-transform: uppercase;" name="otdel">
                <option value="">-</option>
                <?php foreach($otdels as $item): ?>
                <option value="<?=$item['alias']?>"><?=$item['otdel_name']?></option>
                <?php endforeach; ?>
                </select></td>
            </tr>
        </table>
        <p>
            <input class="myButton" type="submit" value="Сохранить" />
        </p>        
    </form>
    <?php unset($_SESSION['add_people']); ?>
    
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>