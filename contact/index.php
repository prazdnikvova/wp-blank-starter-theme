<?php

function my_acf_block_contact_callback($block)
{   
    $contact_id = get_field('contact_form');

    $custom_from = get_field('from');
    $custom_to = get_field('to');
    $custom_subject = get_field('subject');
    if ($custom_from) {
        $from = explode('@', $custom_from);
    } else {
        $from = array('','');
    }
    if ($custom_to) {
        $to = explode('@', $custom_to);
    } else {
        $to = array('','');
    }
    if ($custom_subject) {
        $subject = $custom_subject;
    } else {
        $subject = '';
    }

    if (file_exists(get_template_directory()."/contact_templates/template-{$contact_id}.php")) {
        include(get_template_directory()."/contact_templates/template-{$contact_id}.php");
    } elseif (file_exists(get_template_directory()."/contact/template.php")) {
        include(get_template_directory()."/contact/template.php");
    }
}


add_action('acf/init', 'my_acf_contact');
function my_acf_contact()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name' => 'contact',
            'title' => __('Contact Form'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_contact_callback',
            'category' => 'common',
            'icon' => 'email-alt',
            'keywords' => array(''),
        ));
        // next block
    }
}




add_action( 'wp_enqueue_scripts', 'blank_load_scripts_contact' );
function blank_load_scripts_contact() {
    global $include_version;
    wp_enqueue_script('contact-js', get_template_directory_uri() . '/contact/js/contact.js', array('jquery'), $include_version, true );

    wp_enqueue_style('contact-css', get_template_directory_uri() . '/contact/css/contact.css', array(), $include_version, 'all');
}

add_action('wp_ajax_contact_form', 'contact_form');
add_action('wp_ajax_nopriv_contact_form', 'contact_form');

function contact_form()
{

    $id = $_POST['id'];
    $uniq_name = 'uniq_contact_'.$id;
    if(function_exists($uniq_name)) {
        $uniq_name();
    } else {
        general_contact();
    }

    wp_die();

}

function general_contact(){
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $info1 = $_POST['info1'];
    $info2 = $_POST['info2'];
    $info3 = $_POST['info3'];
    $info4 = $_POST['info4'];

    $params = array();
    parse_str($_POST['form_serialize'], $params);

    $message = get_field('message_text',$id);

    foreach ($params as $key => $value) {

        if (is_array($value)){
            $value = implode (', ', $value );
        }

        $message = str_replace('['.$key.']', $value, $message);
    } 

    if (!$subject) {
        $subject = get_field('subject',$id);
    }
    if ($info1) {
        $from = $info1.'@'.$info2;
    } else {
        $from = get_field('from',$id);
    }
    if ($info3) {
        $to = $info3.'@'.$info4;
    } else {
        $to = get_field('to',$id);
    }

    $headers[] = 'From: '.get_bloginfo( 'name' ).' <'.$from.'>';

    if (get_field('html',$id)) {
        $headers[] = 'Content-type: text/html; charset=utf-8';
    }

    wp_mail($to, $subject, $message, $headers);
}

?>