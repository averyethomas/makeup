<?php
function theme_customizer ( $wp_customize ) {
        
    //Basic Blog Info
    $wp_customize->add_section('site_info', array(
        'title' => 'Site Info',
        'description' => '',
        'priority' => 30,
    ) );
    $wp_customize->add_setting( 'logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'    => __( 'Logo', 'Wink' ),
        'section'  => 'site_info',
        'settings' => 'logo',
    ) ) );
    $wp_customize->add_setting( 'email' );
    $wp_customize->add_control('email', array(
        'label' => 'Email',
        'section' => 'site_info',
        'settings' => 'email',
        'type' => 'text',
    ) );
    $wp_customize->add_setting( 'phone' );
    $wp_customize->add_control('phone', array(
        'label' => 'Phone',
        'section' => 'site_info',
        'settings' => 'phone',
        'type' => 'text',
    ) );
}
add_action( 'customize_register', 'theme_customizer', 20);
?>