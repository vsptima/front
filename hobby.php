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

        <div class="row">
            <?php foreach ($games as $game) : ?>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong><?=$game['name']?></strong>
                        </div>
                        <div class="panel-body">
                            <img class="img-thumbnail" src="<?=$game['description']?>" alt="<?=$game['name']?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/sidebar_hobby.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>