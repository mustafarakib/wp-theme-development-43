<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function stock_theme_options( $options ){
    $options = array(); // remove default theme options

    $options[]    = array(
        'name'      => 'stock_mr_typography_settings',
        'title'     => 'Typography Settings',
        'icon'      => 'fa fa-file-code-o',
        'fields'    => array(
            array(
                'id'        => 'body_font',
                'type'      => 'typography',
                'title'     => 'Body Font',
                'default'   => array(
                    'family'  => 'Roboto',
                    'variant' => 'regular',
                    'font'    => 'google',
                ),
            ),
            array(
                'id'       => 'body_font_variant',
                'type'     => 'checkbox',
                'title'    => 'Body font type',
                'options'  => array(
                    '100'  => '100',
                    '100i' => '100i',
                    '200'  => '200',
                    '200i' => '200i',
                    '300'  => '300',
                    '300i' => '300i',
                    '400'  => '400',
                    '400i' => '400i',
                    '500'  => '500',
                    '500i' => '500i',
                    '700'  => '700',
                    '700i' => '700i',
                    '900'  => '900',
                    '900i' => '900i',
                ),
                'default'  => array( '400', '400i', '700', '700i',)
            ),
            array(
                'id'        => 'heading_font',
                'type'      => 'typography',
                'title'     => 'Heading Font',
                'default'   => array(
                    'family'  => 'Noto Serif',
                    'variant' => '700',
                    'font'    => 'google',
                ),
            ),
            array(
                'id'       => 'heading_font_variant',
                'type'     => 'checkbox',
                'title'    => 'Heading font type',
                'options'  => array(
                    '100'  => '100',
                    '100i' => '100i',
                    '300'  => '300',
                    '300i' => '300i',
                    '400'  => '400',
                    '400i' => '400i',
                    '500'  => '500',
                    '500i' => '500i',
                    '700'  => '700',
                    '700i' => '700i',
                    '900'  => '900',
                    '900i' => '900i',
                ),
                'default'  => array( '400', '400i', '700', '700i',)
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_styling_settings',
        'title'     => 'Styling Settings',
        'icon'      => 'fa fa-pencil-square-o',
        'fields'    => array(
            array(
                'id'        => 'enable_preloader',
                'type'      => 'switcher',
                'default'   => true,
                'title'     => 'Enable Preloader',
            ),

            array(
                'id'        => 'enable_boxed_layout',
                'type'      => 'switcher',
                'default'   => false,
                'title'     => 'Enable Boxed Layout',
            ),
                array(
                    'id'    => 'body_bg_color',
                    'type'  => 'color_picker',
                    'title' => 'Body Background Color',
                    'dependency'   => array('enable_boxed_layout', '==', 'true'),
                ),
                array(
                    'id'        => 'body_bg_img',
                    'type'      => 'image',
                    'title'     => 'Body Background Image',
                    'dependency'=> array('enable_boxed_layout', '==', 'true')
                ),
                array(
                    'id'        => 'body_bg_repeat',
                    'type'      => 'select',
                    'title'     => 'Body Background Repeat',
                    'default'   => 'repeat',
                    'options'   => array(
                        'repeat'        => 'Repeat',
                        'no-repeat'     => 'No Repeat',
                        'cover'         => 'Cover',
                    ),
                    'dependency'=> array('enable_boxed_layout', '==', 'true')
                ),
                array(
                    'id'        => 'body_bg_attachment',
                    'type'      => 'select',
                    'title'     => 'Body Background Attachment',
                    'default'   => 'scroll',
                    'options'   => array(
                        'scroll'  => 'Scroll',
                        'fixed'   => 'Fixed',
                    ),
                    'dependency'=> array('enable_boxed_layout', '==', 'true')
                ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_script_settings',
        'title'     => 'Script Settings',
        'icon'      => 'fa fa-file-text',
        'fields'    => array(
            array(
                'id'        => 'head_script',
                'type'      => 'textarea',
                'sanitize'   =>  false,
                'title'     => 'Head Script',
                'desc' => 'Scripts goes before closing < / head >',
            ),
            array(
                'id'        => 'body_start_script',
                'type'      => 'textarea',
                'sanitize'   =>  false,
                'title'     => 'Body Start Script',
                'desc' => 'Scripts goes just after < body > starts',
            ),
            array(
                'id'        => 'body_end_script',
                'type'      => 'textarea',
                'sanitize'   =>  false,
                'title'     => 'Body End Script',
                'desc' => 'Scripts goes just before closing < / body >',
            ),
        )
    );
    return $options ;
}
add_filter('cs_framework_options','stock_theme_options');

