<?php
$pageTitle = 'Опыт';
$pageDescription = 'Практические навыки в web-разработке и обслуживании сайтов';
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main" style="padding-top: 20px;">
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
        <h1 style="margin-top: 0;"><?=$pageTitle?></h1>
        <p><?=$pageDescription?></p>
        <?php require_once 'layouts/sidebar_skill.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>