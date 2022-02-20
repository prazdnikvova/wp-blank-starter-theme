jQuery(document).ready(function( $ ) {


    function isFunction(functionToCheck)  {
        var getType = {};
        return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
    }


    function general_contact($form){
        var ajaxurl = $form.data('action');
        var id = $form.data('id');
        var info1 = $form.data('info1');
        var info2 = $form.data('info2');
        var info3 = $form.data('info3');
        var info4 = $form.data('info4');
        var subject = $form.data('info5');

        var form_serialize = $form.serialize();

        var result = false;

        $form.find ('input.required').each(function(required){

            if ($(this).val().length > 1) {
                result = true;
                $(this).removeClass('error');
            } else {
                result = false;
                $(this).addClass('error');
            }

            if ($(this).hasClass('email')) {
                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
                if( !pattern.test( $(this).val() ) ) {
                    result = false;
                    $(this).addClass('error');
                }
            }

        });

        $form.find ('textarea.required').each(function(required){

            if ($(this).val().length > 1) {
                result = true;
                $(this).removeClass('error');
            } else {
                result = false;
                $(this).addClass('error');
            }

        });

        if (result) {
            $form.find('.container_any').css('display', 'block');
            var data = {
                action: 'contact_form',
                id: id,
                info1: info1,
                info2: info2,
                info3: info3,
                info4: info4,
                subject: subject,
                form_serialize: form_serialize,
            };

            jQuery.post( ajaxurl, data, function(response) {
                $form.find('.message_ok').css('display', 'block');
                $form.find('.container_any').css('display', 'none');
                $form[0].reset();
            });
        }

    }



    $('.contact_form').submit(function(e){
        e.preventDefault();
        var uniq_js = $(this).data('js');
        var id = $(this).data('id');
        if ( isFunction(window['uniq_contact_'+id]) ) {
            window['uniq_contact_'+id]($(this));
        } else {
            general_contact($(this));
        }
    });


});