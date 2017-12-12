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
    <div>
        <a href="https://yandex.ru/maps/?um=constructor%3Aa700374dfe756a2c82a459d97d18567f43015dfbbffd1e48593ae7d32c1c5c2f&amp;source=constructorStatic"
           target="_blank">
            <img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Aa700374dfe756a2c82a459d97d18567f43015dfbbffd1e48593ae7d32c1c5c2f&amp;width=600&amp;height=450&amp;lang=ru_RU"
                 alt="" style="border: 0;" />
        </a>
    </div>
    <h4>Колледж информатики и программирования <small>Google. Maps</small></h4>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2239.8241684615928!2d37.503283116267355!3d55.84836588057912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b537efe3d882af%3A0x377ee0f35802c5ce!2z0JrQvtC70LvQtdC00LYg0LjQvdGE0L7RgNC80LDRgtC40LrQuCDQuCDQv9GA0L7Qs9GA0LDQvNC80LjRgNC-0LLQsNC90LjRjw!5e0!3m2!1sru!2sru!4v1513097471265"
                width="600" height="450"
                frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div>
</div>
<div class="col-md-3 sidebar">
    <?php require_once 'layouts/sidebar_about.php';?>
</div>
<?php require_once 'layouts/_bottom.php';?>