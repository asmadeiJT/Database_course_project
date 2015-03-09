<?php
include_once 'header.php';
include_once 'functions.php';
include_once 'classes/Main.php';

$Main = new Main();
?>
<div class="container">
    <div class="col-xs-9"><?php $Main->show_students_table() ?></div>
    <div class="col-xs-3"><?php include_template('control_panel')?></div>
</div>
<?php
include_once 'footer.php';