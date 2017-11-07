<?php
$pageTitle = 'Термины';
$pageDescription = 'Description '.$pageTitle;
$arrTerms = file('data/term.txt');
?>
<?php require_once 'layouts/_top.php';?>
<h1><?=$pageTitle?></h1>
<p><?=$pageDescription?></p>
<pre><?php print_r($arrTerms);?></pre>
<?php require_once 'layouts/_bottom.php';?>