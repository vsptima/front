<?php
$pageTitle = 'Опыт';
$pageDescription = 'Description '.$pageTitle;
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main">
        <h1><?=$pageTitle?></h1>
        <p><?=$pageDescription?></p>
        <div class="row marketing">
            <?php
            $xml = simplexml_load_file('data/skill.xml');
            ?>
            <?php foreach ($xml as $val):?>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= (string)$val->title; ?></div>
                        <div class="panel-body">
                            <?= (string)$val->content; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/sidebar_skill.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>