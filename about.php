<?php
$pageTitle = 'Обо мне';
$pageDescription = 'Description '.$pageTitle;
?>
<?php require_once 'layouts/_top.php';?>
<div class="col-md-9 main">
    <h1><?=$pageTitle?></h1>
    <p><?=$pageDescription?></p>
</div>
<div class="col-md-3 sidebar">
    <?php require_once 'layouts/sidebar_about.php';?>
</div>
<?php require_once 'layouts/_bottom.php';?>