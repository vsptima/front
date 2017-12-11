<?php
$pageTitle = 'Жаргон';
$pageDescription = 'Жаргонные слова и словосочетания используемые в профессиональной среде программистов';
$handle = fopen("data/jargon.csv", "r");
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main" style="padding-top: 20px;">
        <div class="row grid">
                <?php if($handle !== FALSE):?>
                        <?php while(($data = fgetcsv($handle, 1000, ",")) !== FALSE):?>
                            <div class="col-md-4 grid-item">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><strong><?= $data[0]; ?></strong></div>
                                    <div class="panel-body">
                                        <?= $data[1];?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    <?php fclose($handle);?>
                <?php endif;?>
        </div>
    </div>
    <div class="col-md-3 grid-item sidebar">
        <h1 style="margin-top: 0;"><?=$pageTitle?></h1>
        <p><?=$pageDescription?></p>
        <?php require_once 'layouts/sidebar_jargon.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>