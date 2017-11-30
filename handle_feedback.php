<?php
/**
 * Created by PhpStorm.
 * User: papasha
 * Date: 30.11.2017
 * Time: 19:35
 */

if(!empty($_POST))
{
    $str = implode(', ', $_POST);
}
?>
<div class="alert alert-success" role="alert">
    Спасибо за письмо! Вы прислали следующие данные: <?=$str;?>
</div>