<?php
$pageTitle = 'GitHub';
$pageDescription = 'Description '.$pageTitle;
$json = file_get_contents('data/github.json');
$arrGitHub = json_decode($json,true);
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main">
        <h1><?=$pageTitle?></h1>
        <p><?=$pageDescription?></p>


        <div class="row grid">
            <?php foreach ($arrGitHub as $val) : ?>
                <div class="col-md-3 grid-item">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= $val['title']; ?></div>
                        <div class="panel-body"><?= $val['description'];?></div>
                        <div class="panel-footer"><a href="<?= $val['url']; ?>" title="<?= $val['title'];?>">Link</a></div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/sidebar_github.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>