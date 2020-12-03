<?php defined('UFK') or die('Access denied'); ?>
<div class="content">
<h2>Справочник ВТС</h2>
<?php
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>
<a href="?view=otdels">Отделы</a>
<a href="?view=otdelsvtc">Сотрудники</a>
<div id="sotr_inf">
</div> <!-- #sotr_inf -->

		</div> <!-- .content -->
<div class="load"></div> <!-- .load -->
<div class="res"></div> <!-- .res -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>