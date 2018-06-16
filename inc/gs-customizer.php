<?php
/**
 * Listable Theme Customizer.
 *
 * @package Listable
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ekoufonisia_customize_register( $wp_customize ) {
  // custom by george simos
  // Add Theme Options Pannel
        $wp_customize->add_panel( 'front_page_options',
                array(
            'title'          => __( 'Front Page Options', 'listable-child-theme' ),
            'description'   => __( 'Our Front Page Options Pannel '), // Include html tags such as <p>.
            'priority'      => 1, // Mixed with top-level-section hierarchy.
          ) );

          // Add option to select index content
          $wp_customize->add_section( 'featured-hotel-id',
            array(
              'title'			=> __( 'featured Hotel ID', 'listable-child-theme' ),
                                'panel'                 => 'front_page_options',
              'priority'		=> 1,
              'capability'	=> 'edit_theme_options',
              'description'	=> __( 'Change how much of a post is displayed on index and archive pages.', 'listable-child-theme' )
            )
          );

          // add id for the hotel
          $wp_customize->add_setting(	'id_setting',
            array(
              'default'			=> '11366',
              'type'				=> 'option',

            )
          );

          $wp_customize->add_control('id_control', array(
     'label'      => __('ID', 'listable-child-theme'),
     'section'    => 'featured-hotel-id',
     'settings'   => 'id_setting',
  ));
}
add_action( 'customize_register', 'ekoufonisia_customize_register' );
