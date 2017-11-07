<?php
$pageTitle = 'Фотогаллерея';
$pageDescription = 'Description '.$pageTitle;
$arrGallery = require_once 'data/gallery.php';
?>
<?php require_once 'layouts/_top.php';?>
<h1><?=$pageTitle?></h1>
<p><?=$pageDescription?></p>
<pre><?php print_r($arrGallery)?></pre>
<?php require_once 'layouts/_bottom.php';?>