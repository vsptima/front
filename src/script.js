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
    // ---------------------------------------------
    var urlClear = location.pathname.split('.')[0];
    urlClear = urlClear.split('/')[2];
    var linkHasUrl = jQuery('a[href*="'+urlClear+'"]');
    linkHasUrl.parents('.dropdown').addClass('active');
    linkHasUrl.parent('.navbar-nav').addClass('active');
    linkHasUrl.parent('li').addClass('active');
    linkHasUrl.addClass('active');
    // --------------------------------------------
    console.log('dataArray');
    console.log('dataObject');
    // --------------------------------------------
    jQuery('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        //columnWidth: 200
    });

    $(".group1").colorbox({rel:'group1'});
    $(".group2").colorbox({rel:'group2', transition:"fade"});
    $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
    $(".group4").colorbox({rel:'group4', slideshow:true});
    $(".ajax").colorbox();
    $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
    $(".inline").colorbox({inline:true, width:"50%"});
    $(".callbacks").colorbox({
        onOpen:function(){ alert('onOpen: colorbox is about to open'); },
        onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
        onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
        onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
        onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
    });
});