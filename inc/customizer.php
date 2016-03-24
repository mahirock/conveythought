<?php
/*
 * this is customizer.
 *
 * @package conveythought
 */

/*--------------------------------------------------------------
  background
--------------------------------------------------------------*/
add_theme_support( 'custom-background',
apply_filters( 'conveythought_custom_background_args',
array(
  'default-color' => 'ffffff',
  'default-image' => '',
  'wp-head-callback'       => '_custom_background_cb',
  'admin-head-callback'    => '',
  'admin-preview-callback' => ''
  )));


/*--------------------------------------------------------------
  headercustomize
--------------------------------------------------------------*/
$custom_header_defaults = array(
  'default-image' => '',
  'width'         => 300,
  'height'        => 70,
  'header-text'   => false,
);
add_theme_support( 'custom-header', $custom_header_defaults );


/*--------------------------------------------------------------
  color customizer
--------------------------------------------------------------*/
function conveythought_customizer_color( $wp_customize ) {

//Base Color
$wp_customize->add_setting( 'basecolor',
  array(
    'type' => 'theme_mod',
    'default'     => '#000000',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'basecolor',
  array(
    'label' => esc_attr(__( 'Base Color', 'conveythought')),
    'section' => 'colors',
    'settings' => 'basecolor',
)));

//Main Color
$wp_customize->add_setting( 'maincolor',
  array(
    'type' => 'theme_mod',
    'default'     => '#ffafbd',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'maincolor',
  array(
    'label' => esc_attr(__( 'Main Color', 'conveythought')),
    'section' => 'colors',
    'settings' => 'maincolor',
)));

//Nav Color
$wp_customize->add_setting( 'navlinkcolor',
  array(
    'type' => 'theme_mod',
    'default'     => '#ffffff',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navlinkcolor',
  array(
    'label' => esc_attr(__( 'Navigation Color', 'conveythought')),
    'section' => 'colors',
    'settings' => 'navlinkcolor',
)));
}
add_action( 'customize_register', 'conveythought_customizer_color' );

//customizer css set
function conveythought_customize_css() {
    ?>
         <style type="text/css">
         /*Main Color*/
            a:hover,
            a:active,
            h1:first-letter,
            .breadcrumb,
            .widget ul li,
            .tagcloud a:hover span,
            #copyright-area a,
            #wp-calendar tbody th a,
            #wp-calendar tbody td a { color: <?php echo get_theme_mod( 'maincolor' ); ?>;}
            h2::after, h3:before,
            .toggle a,
            .nav-links a,
            .link-page-nav a span,
            .reply a,
            .tag-area a,
            .category-area a:hover,
            .tagcloud a:hover,
            #footer .widget-categories li:hover,
            .current-menu-item,
            .current-menu-parent,
            .current-menu-ancestor,
            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav li a:hover { background-color: <?php echo get_theme_mod( 'maincolor' ); ?>; }
            h3{ border-color: <?php echo get_theme_mod( 'maincolor' ); ?>; }
            body, .navbar-fixed-top { border-top-color: <?php echo get_theme_mod( 'maincolor' ); ?>; }

         /*Base Color*/
            body, a, h1, h2, h3, h4, h5,h6,
            #header h1 a,.nav-links a,
            .link-page-nav a:hover span,
            .reply a,
            .pager .current { color: <?php echo get_theme_mod( 'basecolor' ); ?>; }
            .navbar-default,
            .header-nav,
            .breadcrumb,
            #copyright-area,
            .nav li .dropdown-menu { background-color: <?php echo get_theme_mod( 'basecolor' ); ?>; }
            h1, h2,
            .comment-body,
            .comment-author { border-bottom-color: <?php echo get_theme_mod( 'basecolor' ); ?>;}
            .post-title { border-top-color: <?php echo get_theme_mod( 'basecolor' ); ?>;
                          border-bottom-color: <?php echo get_theme_mod( 'basecolor' ); ?>; }
            .entry-footer { border-top-color: <?php echo get_theme_mod( 'basecolor' ); ?>;
                            border-bottom-color: <?php echo get_theme_mod( 'basecolor' ); ?>; }
            h6 { border-bottom-color: <?php echo get_theme_mod( 'basecolor' ); ?>; }

            /*Nav Color*/
            .navbar-default .navbar-nav li a,
            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus { color: <?php echo get_theme_mod( 'navlinkcolor' ); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'conveythought_customize_css');


/*--------------------------------------------------------------
  Related Article
--------------------------------------------------------------*/
add_action( 'customize_register', 'conveythought_customize_related_article' );

function sanitize_checkbox($input){
  if($input==true){
    return true;
  }else{
    return false;
  }
}

function conveythought_customize_related_article($wp_customize) {

$wp_customize->add_section( 'conveythought_related_article',
  array(
    'title'          => esc_attr(__( 'Related Article', 'conveythought')),
    'priority'       => 30,
));
$wp_customize->add_setting('conveythought_related_article',
  array(
    'default' => 'checked',
    'type'  => 'theme_mod',
    'sanitize_callback' => 'sanitize_checkbox',
));
$wp_customize->add_control( 'conveythought_related_article',
  array(
    'settings' => 'conveythought_related_article',
    'label' =>esc_attr(__( 'Display of the related article', 'conveythought')),
    'section' => 'conveythought_related_article',
    'type' => 'checkbox',
    'priority' => 35,
));
$wp_customize->add_setting( 'conveythought_related_article_count',
  array(
    'default'     => 6,
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control( 'conveythought_related_article_count',
  array(
    'label'    => esc_attr(__( 'The number of articles to display.Please change it.', 'conveythought')),
    'section'  => 'conveythought_related_article',
    'settings' => 'conveythought_related_article_count',
    'type'     => 'text',
    'priority' =>37,
));
}
function is_related_article_visible(){
    return get_theme_mod( 'conveythought_related_article', 'checked' );
}

/*--------------------------------------------------------------
  mainvisu slider
--------------------------------------------------------------*/
add_action( 'customize_register', 'conveythought_customize_register' );
function conveythought_customize_register($wp_customize) {

$priority = 300;

$wp_customize->add_panel( 'panel_id',
  array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_attr(__( 'Slide Image', 'conveythought')),
    'description'    => '',
));

for ( $i = 1; $i <= 5; ) {
    // Default images
    if ($i <= 3) {
      $default_img = get_template_directory_uri() . '/img/mainvisu_' . $i . '.png';
    } else {
      $default_img = '';
    }

  $priority = $priority + 1;
  $wp_customize->add_section( 'conveythought_mainvisu_image_' . $i,
    array(
      'title'          => esc_attr(__( 'Slide Image', 'conveythought')).$i,
      'priority'       => $priority,
      'panel'  => 'panel_id',
  ));
  $wp_customize->add_setting( 'conveythought_mainvisu_image_'.$i,
    array(
      'default'        => $default_img,
      'type'           => 'option',
      'capability'     => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize,
    'main_Image_'.$i,
    array(
      'label'     => esc_attr(__( 'Image', 'conveythought')).$i,
      'section'   => 'conveythought_mainvisu_image_'.$i,
      'settings'  => 'conveythought_mainvisu_image_'.$i,
      'priority' => $priority,
  )));

  $priority = $priority + 1;
  $wp_customize->add_setting( 'conveythought_mainvisu_link_'.$i,
    array(
      'type'        => 'option',
      'default'     => '',
      'transport'   => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    ));
  $wp_customize->add_control( 'conveythought_mainvisu_link_'.$i,
    array(
        'label'    => esc_attr(__( 'If you put a link to the image', 'conveythought')),
        'section'  => 'conveythought_mainvisu_image_'.$i,
        'settings' => 'conveythought_mainvisu_link_'.$i,
        'type'     => 'text',
        'priority' => $priority,
    ));
    $i++;
  }
}
