<?php
$pageTitle = 'Фотогаллерея';
$pageDescription = 'Description '.$pageTitle;
$arrGallery = file('data/gallery.php');
$i = 0;
?>
<?php require_once 'layouts/_top.php';?>
<h1><?=$pageTitle?></h1>
<p><?=$pageDescription?></p>
    <div class="row marketing">
        <?php foreach($arrGallery as $key=>$val):?>
            <?= $key.$val; ?>
        <?php endforeach;?>
        <br>
    </div>
<?php require_once 'layouts/_bottom.php';?>