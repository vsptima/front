jQuery(document).on('ready',function () {

    var site = location.origin; // http://front.vspds.ru
    var imgTools = site + "/img/tools/"; // http://front.vspds.ru/design/img/tools/
    var tools = "";

    dataArray.forEach(function (item, i, arr) {
        var pathToImg = imgTools + item;
        // var imgTag = '<img style="width: 100px;" class="img-thumbnail" src="' + pathToImg + '" alt="">';
        var imgTag = '<div class="col-md-3"><div class="panel panel-default"><div class="panel-body"><img class="img-responsive" src="' + pathToImg + '" alt=""></div></div></div>';
        tools += imgTag;
    });

    jQuery('#img-array').html(tools);

    // --------------------

    // Vasin, Semyon, 26.06.1999, male
    var realStr = '';
    var fio = '';
    var result = '';
    for (var key in dataObject) {
        if (key == 'lastName' || key == 'firstName') {
            fio += dataObject[key]+' ';
        } else {
            var str = dataObject[key];
            realStr += dataObject[key] + ', ';
        }
        result = fio+', '+realStr;
    }
    jQuery('#human-object').html('<p style="margin-top: 15px;">'+ result +'</p>');
});
