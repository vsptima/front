jQuery(document).on('ready',function () {

    var site = location.origin; // http://front.vspds.ru
    var imgTools = site + "/img/tools/"; // http://front.vspds.ru/design/img/tools/
    var tools = "";

    dataArray.forEach(function (item, i, arr) {
        var pathToImg = imgTools + item;
        var imgTag = '<img style="width: 100px;" class="img-thumbnail" src="' + pathToImg + '" alt="">';
        tools += imgTag;
    });

    jQuery('#img-array').html(tools);

    // --------------------

    // Vasin, Semyon, 26.06.1999, male
    var realStr = '';
    for (var key in dataObject) {
        var str = dataObject[key];
        realStr += dataObject[key] + ', ';
    }
    jQuery('#human-object').html('<p style="margin-top: 15px;">'+ realStr +'</p>');
});
