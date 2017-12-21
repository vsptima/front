<?php
$pageTitle = 'Фотогаллерея';
$pageDescription = 'Подборка моих фотографий разных лет';
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
                            <a class="group1" href="<?= $val['url'];?>">
                                <img class="img-responsive" src="<?= $val['url'];?>" alt="<?= $val['title'];?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
        <br>
    </div>
<?php require_once 'layouts/_bottom.php';?>