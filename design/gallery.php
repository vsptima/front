<?php
$pageTitle = 'Фотогаллерея';
$pageDescription = 'Description '.$pageTitle;
$arrGallery = require_once 'data/gallery.php';
?>
<?php require_once 'layouts/_top.php';?>
<h1><?=$pageTitle?></h1>
<p><?=$pageDescription?></p>
    <div class="row marketing">
        <?php foreach($arrGallery as $val):?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="wrap-img">
                            <img class="img-responsive" src="<?= $val['url'];?>" alt="<?= $val['title'];?>">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
        <br>
    </div>
<?php require_once 'layouts/_bottom.php';?>