<?php 


add_action('wp_enqueue_scripts', 'template_scripts');

function template_scripts()
{

    // IZITOAS

    wp_enqueue_style('Izitoast-CSS', 'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Izitoast-JS', 'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js', array('jquery'), 'false', 'false');

    // BOOTSTRAP

    // wp_enqueue_style('FontAwesome', get_template_directory_uri() . '/libraries/css/all.min.css', 'null', 'false', 'all');

    wp_enqueue_style('Bootstrap-CSS', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css', 'null', 'false', 'all');

    // UIKIT
    wp_enqueue_style('UuKit-CSS', '//cdn.jsdelivr.net/npm/uikit@3.2.2/dist/css/uikit.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Uikit-JS', '//cdn.jsdelivr.net/npm/uikit@3.2.2/dist/js/uikit.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Uikit-icons-JS', '//cdn.jsdelivr.net/npm/uikit@3.2.2/dist/js/uikit-icons.min.js', array('jquery'), 'false', 'false');

     wp_enqueue_script('Form-JS', get_template_directory_uri() . '/libraries/formr.js', array('jquery'), 'false', 'false');
     
    // FANCYBOX
    wp_enqueue_style('Fancybox-CSS', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Fancybox-JS', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), 'false', 'false');


    // SLICKSLIDER
    wp_enqueue_style('Slick-CSS', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', 'null', 'false', 'all');

    wp_enqueue_style('Slick-Theme-CSS', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Slick-JS', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), 'false', 'false');


    // wp_enqueue_script('Bootstrap-JS', get_template_directory_uri() . '/libraries/js/bootstrap.min.js', array('jquery'), 'false', 'false');

    // BARBA
    // wp_enqueue_script('Barba-JS', '//cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js', array('jquery'), 'false', 'false');

    // TWEENMAX
    // wp_enqueue_script('TweenMax-JS', '//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array('jquery'), 'false', 'false');

    // // TWEENLITE
    // wp_enqueue_script('Tweenlite-JS', '//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js', array('jquery'), 'false', 'false');

    // SCROLLMAGIX
    // wp_enqueue_script('ScrollMagic-JS', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), 'false', 'false');

    // SCROLLMAGIXANIMATION
    // wp_enqueue_script('ScrollMagicAnimation-JS', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js', array('jquery'), 'false', 'false');

    // NORMALIZE

    wp_enqueue_style('NormalizeCSS', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', 'null', 'false', 'all');

    wp_enqueue_script('mainjs', get_template_directory_uri() . '/libraries/main.js', array('jquery'), 'false', 'false');

     $database = array(
        'ajaxurl'          => admin_url('admin-ajax.php'),
        'redirection_home' => home_url(),
        'loadingmessage'   => __('Sending user info, please wait...'),
    );

    wp_localize_script('mainjs', 'ajax_option', $database);

    // CSS DEL SITIO

    wp_enqueue_style('Fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css', 'null', 'false', 'all');
    wp_enqueue_style('Fonts2', get_template_directory_uri() . '/assets/fonts_2/stylesheet.css', 'null', 'false', 'all');

    wp_enqueue_style('Estilos', get_template_directory_uri() . '/style.css', 'null', 'false', 'all');


}


function init_functions()
{
    add_action('wp_ajax_nopriv_ajaxcontactclient', 'ajax_contact_client');
    // add_action('wp_ajax_nopriv_ajaxsavedatacotizar', 'ajax_save_data_cotizar');
}
add_action('init', 'init_functions');


function ajax_contact_client()
{
    // check_ajax_referer('ajax-contactar-nonce', 'security');

    if (!empty($_POST['data'])) {
        $data_p = $_POST['data'];

        $nombres = $data_p['nombres'];
        $apellidos = $data_p['apellidos'];
        $correo = $data_p['correo'];
        $telefono = $data_p['telefono'];
        
        $page = get_page_by_path( 'inicio','','page' );

        // $to = 'renzo.castillo@nextperience.net';
        // $to ='josefc9512@gmail.com';
        $to = get_field('general', $page->ID)['correo_de_envio_del_formulario'];
        $subject = 'Alguien desea comunicarse contigo';
        $body = 'El ciente ' . $nombres  .', quiere comunicarse contigo, el telefono del cliente es: ' . $telefono . ', el correo es: ' . $correo;
        $headers = array('Content-Type: text/html; charset=UTF-8');
         
        wp_mail( $to, $subject, $body, $headers );

        $array_response = array('status' => 'success', 'message' => 'El correo fue enviado');

        wp_send_json($array_response);


    } else {
        $array_response = array('status' => 'error');
        wp_send_json_error($array_response, 500);

    }
    die();
}

function ajax_response($status)
{
    wp_send_json($status);
    die();
}

function jump_words($oracion)
{

    $new_sf = explode(' ', $oracion);

    $leng_c = count($new_sf);

    $word = "";

    foreach ($new_sf as $key => $value) {
        if ($key == $leng_c - 1) {
            $word .= str_replace('_', ' ', $value);
        } else {
            $word .= str_replace('_', ' ', $value) . "</br>";
        }

    }

    echo $word;

}

