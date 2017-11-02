<?php
$pageTitle = 'Обратная связь';
$pageDescription = 'Description '.$pageTitle;
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main">
        <h1><?=$pageTitle?></h1>
        <p><?=$pageDescription?></p>
    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/_sidebar_index.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>