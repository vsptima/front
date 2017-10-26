<?php
$pageAuthor = 'Frontender';
$pageOgImage = '/ogimg.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$pageDescription;?>">
    <meta name="author" content="<?=$pageAuthor;?>">
    <meta property="og:image" content="<?=$pageOgImage;?>">
    <link rel="icon" href="/favicon.ico">
    <title><?=$pageTitle;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/src/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/src/starter-template.css" rel="stylesheet">
    <link href="/src/style.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="/src/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/src/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require_once '_menu.php';?>
<div class="container">
