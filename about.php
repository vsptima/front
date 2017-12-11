<?php
$pageTitle = 'Обо мне';
$pageDescription = 'Коротко о себе, своей учебе и увлечениях';
$bd = strtotime('22-06-1999');
$now = time();
$diff = $now - $bd;
$days = ceil($diff / (24 * 3600));
$age = date('Y') - date('Y', $bd);
?>
<?php require_once 'layouts/_top.php';?>
<div class="col-md-9 main">
    <h1><?=$pageTitle?></h1>
    <p><?=$pageDescription?></p>
    <p>
        Привет! Меня зовут Семён. Живу в городе Долгопрудный.<br>
        Родился я 22 июня 1999 года. На данный момент мне <strong><?=$age?></strong> лет или, если быть более точным, <strong><?=$days?></strong> дней.
    </p>
    <p>
        Учился в школе до 9-го класса на тройки-четверки-пятерки.<br>
        Потом поступил в Колледж информатики и программирования при финансовом университете при Правительстве Москвы.
    </p>
    <p>
        Личные увлечения:
    </p>
    <ul>
        <li>Компьютерные игры</li>
        <li>Социальные сети</li>
    </ul>
    <p>
        Немного карт вам в ленту
    </p>
    <h4>Долгопрудный <small>Яндекс. Карты</small></h4>
    <div>-</div>
    <h4>Колледж информатики и программирования <small>Google. Maps</small></h4>
    <div>-</div>
</div>
<div class="col-md-3 sidebar">
    <?php require_once 'layouts/sidebar_about.php';?>
</div>
<?php require_once 'layouts/_bottom.php';?>