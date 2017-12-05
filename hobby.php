<?php
$pageTitle = 'Хобби';
$pageDescription = 'Компьютерные игры';
$pdo = new PDO('sqlite:data/hobby');
$games = $pdo->query("SELECT * FROM games"); // PDO::FETCH_ASSOC
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main" style="margin-top: 20px; padding-left: 0;">
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
        <h1 style="margin-top: 0"><?=$pageTitle?></h1>
        <p><strong><?=$pageDescription?></strong></p>
        <?php require_once 'layouts/sidebar_hobby.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>