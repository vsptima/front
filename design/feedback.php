<?php
$pageTitle = 'Обратная связь';
$pageDescription = 'Description '.$pageTitle;
?>
<?php require_once 'layouts/_top.php';?>
    <div class="col-md-9 main">
        <h1><?=$pageTitle?></h1>
        <form class="form-horizontal">
            <div class="row">
                <div class="col-md-6">
                    <label for="email">Your name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="ваше имя">
                </div>
                <div class="col-md-6">
                    <label for="email">Your email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="ваша электронная почта">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-message">
                    <textarea class="form-control" rows="10" name="message"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-6 text-right">
                    <input type="reset" class="btn btn-default" value="Reset">
                    <input type="submit" class="btn btn-default" value="Submit">
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3 sidebar">
        <?php require_once 'layouts/_sidebar_index.php';?>
    </div>
<?php require_once 'layouts/_bottom.php';?>