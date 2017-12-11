<?php
$pageTitle = 'Термины';
$pageDescription = 'Некоторые термины и определения из профессиональной деятельности';
$arrTerms = file('data/term.txt');
?>
<?php require_once 'layouts/_top.php';?>
    <h1><?=$pageTitle?></h1>
    <p><?=$pageDescription?></p>
    <div class="row grid">
        <?php foreach($arrTerms as $val):?>
            <?php $term = explode("#",$val); ?>
            <div class="col-md-4 grid-item">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong><?=$term[0];?></strong></div>
                    <div class="panel-body"><?=$term[1];?></div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
<?php require_once 'layouts/_bottom.php';?>