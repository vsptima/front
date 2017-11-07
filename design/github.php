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
        <pre><?php print_r($arrGitHub )?></pre>
    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/sidebar_github.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>