<?php
$pageTitle='Редактор';
$pageDescription='On-line редактор текста';
?>
<?php require_once '_top.php';?>
<script src="http://cdn.vpvd.ru/ckeditor/moono-color/full/ckeditor.js"></script>
<textarea name="editor1"></textarea>
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.config.height = 550;
</script>
<?php require_once '_bottom.php';?>

