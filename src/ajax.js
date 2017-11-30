/**
 * Created by papasha on 30.11.2017.
 */
jQuery(document).on('ready',function () {

    jQuery('#foo').submit(function(){
        var formData = $('#foo').serializeArray();
        console.log('formData',formData);
        jQuery.post(
            "/handle_feedback.php",
            formData,
            function (data) {
                jQuery('#succes').html(data);
            }
        );
        return false;
    });



});