<?php
$pageTitle = 'Хобби';
$pageDescription = 'Description '.$pageTitle;
$pdo = new PDO('sqlite:data/hobby');
$games = $pdo->query("SELECT * FROM games"); // PDO::FETCH_ASSOC
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main">
        <h1><?=$pageTitle?></h1>
        <p><?=$pageDescription?></p>
        <?php foreach ($games as $game) : ?>
            <p><?=$game['name']?></p>
        <?php endforeach; ?>
    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/sidebar_hobby.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>