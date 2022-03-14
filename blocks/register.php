<?php

// как скрывать неиспользованные блоки
// https://rudrastyh.com/gutenberg/remove-default-blocks.html


// иконки надо ипсользовать по логике, вот список, которые можно использовать (из названия нужно выдрать середину: между dashicons- и кодом иконки “\f101”, например: admin-site):
// http://calebserna.com/dashicons-cheatsheet/
// https://developer.wordpress.org/resource/dashicons/#image-rotate-left

function my_plugin_block_categories($categories, $post)
{
    return array_merge(
        $categories,
        array(
        	/*
            array(
                'slug' => 'test',
                'title' => 'Логическое человеческое название',
                'icon' => '',
            ),
            */
            array(
                'slug' => 'ctas_and_banners',
                'title' => 'CTAs and Banners',
                'icon' => '',
            ),
            array(
                'slug' => 'sliders',
                'title' => 'Sliders',
                'icon' => '',
            ),

            // next category
        )
    );
}

add_filter('block_categories', 'my_plugin_block_categories', 10, 2);


function my_acf_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);
    if (file_exists(get_theme_file_path("/blocks/content-{$slug}.php"))) {
        include(get_theme_file_path("/blocks/content-{$slug}.php"));
    }
}


add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name' => 'margin',
            'title' => __('Margin'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'common',
            'icon' => 'image-flip-vertical',
            'keywords' => array(''),
        ));
        acf_register_block(array(
            'name' => 'cta-full-page',
            'title' => __('CTA Full Page'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'format-aside',
            'keywords' => array(''),
        ));
        acf_register_block(array(
            'name' => 'cta-with-icon',
            'title' => __('CTA with Icon'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'format-aside',
            'keywords' => array(''),
        ));
        acf_register_block(array(
            'name' => 'cta-full-width-extra',
            'title' => __('CTA Full Width Extra'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'format-aside',
            'keywords' => array(''),
        ));

        acf_register_block(array(
            'name' => 'hero-image-left',
            'title' => __('Hero image left'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'editor-spellcheck',
            'keywords' => array(''),
        ));
        acf_register_block(array(
            'name' => 'hero-image-right',
            'title' => __('Hero image right'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'editor-spellcheck',
            'keywords' => array(''),
        ));
        acf_register_block(array(
            'name' => 'features-list',
            'title' => __('Features List'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'editor-spellcheck',
            'keywords' => array(''),
        ));
        acf_register_block(array(
            'name' => 'large-quote',
            'title' => __('Large quote'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'ctas_and_banners',
            'icon' => 'editor-spellcheck',
            'keywords' => array(''),
        ));

        acf_register_block(array(
            'name' => 'news-slider',
            'title' => __('News Slider'),
            'description' => __(''),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sliders',
            'icon' => 'format-gallery',
            'keywords' => array(''),
        ));
        // next block
    }
}


//add_filter( 'allowed_block_types', 'custom_allowed_block_types', 10, 2 );

function custom_allowed_block_types( $allowed_blocks, $post ) {

    $allowed_blocks = array(
        'core/paragraph',
        'core/heading',
        'core/image',
        'core/list',
        'core/video',

        'acf/accordion',
    );

    return $allowed_blocks;

}

?>
