<?php defined('UFK') or die('Access denied'); ?>
    <div class="content">
    <!-- =================================================== -->
    <!-- =============== ДОБАВИТЬ ОТДЕЛ =============== -->
    <!-- =================================================== -->
    <h2>Добавление отдела</h2>
    <?php
        if(isset($_SESSION['add_otdel']['res'])){
        echo $_SESSION['add_otdel']['res'];
        unset($_SESSION['add_otdel']['res']);
    }
    ?>
    <form action="" method="post" class="edit_page">    
        <table cellspacing="1" cellpadding="1">
            <tr>
                <td>*Наименование:</td>
                <td><input type="text" name="otdel_name"  value="<?=htmlspecialchars($_SESSION['add_otdel']['otdel_name'])?>" /></td>
            </tr>
            <tr>
                <td>*Полное наименование:</td>
                <td><input type="text" name="full_name" value="<?=htmlspecialchars($_SESSION['add_otdel']['full_name'])?>" /></td>
            </tr>
            <tr>
                <td>*alias (уникальное значение):</td>
                <td><input type="text" name="alias" value="<?=$_SESSION['add_otdel']['alias']?>" /></td>
            </tr>
            <tr>
                <td>Позиция:</td>
                <td><input type="text" name="position" value="                
                <?php if(isset($_SESSION['add_otdel']['position'])){
                echo ($_SESSION['add_otdel']['position']);
                }else{
                echo "2";
                }    
                ?>" /></td>
            </tr>
        </table>    
        <p>
            <input class="myButton" type="submit" value="Сохранить" />
        </p>  
    </form>
    
    <?php unset($_SESSION['add_otdel']); ?>
    
    </div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>