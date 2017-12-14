/**
 * Created by papasha on 14.12.2017.
 */
jQuery(document).on('ready',function () {
    var urlClear = location.pathname.split('.')[0];
    urlClear = urlClear.split('/')[1];
    var link = jQuery('.nav a[href*="' + urlClear + '"]');
    link.parents('.dropdown').addClass('active');
    link.parents('.navbar-nav').addClass('active');
    link.parent('li').addClass('active');
});
