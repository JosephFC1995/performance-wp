jQuery(document).ready(function($) {
	
    $('.__fly_button.hambuerguer.__menu__.a, .__menu_floating__ .__content_links__ .__link_menu__con a').click(function(event) {
        $('body').toggleClass('overflow__hidden');
        $('.menu .__content_menu ._rigth__ .hambuerguer').toggleClass('_active');
        $('.__menu_floating__').toggleClass('__shower');
        $('#_menu_floating__close').toggleClass('d-none');
        // $(this).toggleClass('_active');
    });
    $('.__menu___fixed__ .__button_fixed.___fxx, #_menu_floating__close_fixed').click(function(event) {
        $('body').toggleClass('overflow__hidden');
        $('.__menu___fixed__ .__button_fixed.___fxx').toggleClass('_active');
        $('#_menu_floating__close_fixed').toggleClass('d-none');
        $('.__menu_floating__').toggleClass('__shower');
    });
    let form_a = document.forms['form_contacto'];
    let form_send_data = $('#form_contacto')
    form_send_data.submit(function(event) {
    	show_loading_contacto()
        event.preventDefault();
        let gorm_e = $(this)
        const validator = new Formr(form_a);
        validator.required('nombres', 'apellidos', 'correo', 'telefono',).string('nombres', 'apellidos').number('telefono').email('correo');
        if (!validator.isValid()) {
            iziToast.warning({
                class: 'toast-vm',
                pauseOnHover: false,
                close: false,
                progressBar: false,
                title: 'Nota:',
                message: 'Debe llenar todos los campos'
            });
            show_loading_contacto()
            return false
        }
        var data = getFormData(form_send_data);
        $.ajax({
            url: ajax_option.ajaxurl,
            method: 'POST',
            data: {
                action: 'ajaxcontactclient',
                data: data,
            },
            success: function(data) {
                // iziToast.show({
                //     class: 'toast-vm',
                //     pauseOnHover: false,
                //     close: false,
                //     progressBar: false,
                //     title: 'Genial',
                //     message: data.message
                // });
                window.location.replace('/gracias');
            }
        }).done(function() {
            // console.log("success");
        }).fail(function() {
            show_loading_contacto()
            // console.log("error");
        }).always(function() {
            // console.log("complete");
        });
        return false;
    });
});

function getFormData($form) {
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};
    $.map(unindexed_array, function(n, i) {
        indexed_array[n['name']] = n['value'];
    });
    return indexed_array;
}

function show_loading_contacto()
{
	$('.loading_e_sp').toggleClass('show');
}