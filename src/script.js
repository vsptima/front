/**
 * Created by papasha on 31.10.2017.
 */
jQuery(document).on('ready',function () {
    // селектор по тегу
    jQuery('strong').on('click', function () {
        console.log('click on strong');
    });
    // селектор по объекту
    jQuery(window).on('resize', function () {
        console.log('resize window');
    });
    // селектор по css классу
    jQuery('.glava').on('click', function () {
        console.log('click on span glava');
    });
    // работа со стилями класса glava
    jQuery('.glava').css("font-size", "30px");
    // работа с набором данных по определённому классу
    jQuery('.gad li').each(function (index) {
        var text = jQuery( this ).text();
        console.log( index + ": " + text );
    });
});