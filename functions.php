<?php
/**
 * The functions for theme
 */

function get_resource_full_url($resource)
{
    return implode('',array(
        get_stylesheet_directory_uri(),
        '/',
        $resource
    ));
}

function get_logo()
{
    if (get_custom_logo())
        return get_custom_logo();

    return implode(array(
        '<h2 style="text-transform: uppercase; font-size: 36px; color: #29C7C3">',
        str_replace(' ', '<br>', get_bloginfo('title')),
        '</h2>'
    ));
}

/**
 * Require file of part
 *
 * @param $part
 */
function part_include($part)
{
    require get_template_directory()."/parts/{$part}.php";
}

/**
 * Get current title
 *
 * @return string
 */
function get_current_title()
{
    return implode(' | ', array(
        the_title(),
        get_bloginfo('name')
    ));
}

/**
 * Get post meta field by id
 *
 * @param $id
 * @param $need
 * @return mixed
 */
function get_field_by_post_id($id, $need)
{
    return get_field($need, $id);
}

/**
 * @param $field
 * @return mixed
 */
function get_contact_field($field)
{
    return get_field_by_post_id(49, $field);
}

/**
 * @param $field
 * @return mixed
 */
function get_header_field($field)
{
    return get_field_by_post_id(57, $field);
}

/**
 * @param $field
 * @return mixed
 */
function get_footer_field($field)
{
    return get_field_by_post_id(59, $field);
}

/**
 * Menu li tag classes
 *
 * @param $classes
 * @param $item
 * @return mixed
 */
function special_nav_class ($classes, $item) {
    $classes[] = 'recarc-nav-item';

    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }

    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class', 10, 2);

/**
 * Menu a tag classes
 *
 * @param $attributes
 * @return mixed
 */
function add_link_atts($attributes) {
    $attributes['class'] = "recarc-nav-link";

    return $attributes;
}

add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 1);

/**
 * Register Main navigation
 */
register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'samarqand-minora'),
) );

/**
 * Get posts by type
 *
 * @param $type
 * @param string $sort
 * @param integer $limit
 * @return WP_Query
 */
function get_posts_by_type($type, $sort = 'ASC', $limit = -1)
{
    return new WP_Query(array(
        'post_status'    => 'publish',
        'post_type'      => $type,
        'order'          => $sort,
        'posts_per_page' => $limit
    ));
}

/**
 * Register new post types for other items (CRUD)
 */
function create_post_types() {
    //Register image support
    add_theme_support('post-thumbnails');
    add_post_type_support( 'slide', 'thumbnail');
    add_post_type_support( 'portfolio', 'thumbnail');
    add_post_type_support( 'testimonial', 'thumbnail');
    add_post_type_support( 'team', 'thumbnail');
    add_post_type_support( 'service', 'thumbnail');

    //Register custom post types
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Teams' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teams'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt',' thumbnail', 'custom-fields'),
            'taxonomies'  => array('custom-fields')
        )
    );

    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolios' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt',' thumbnail'),
            'taxonomies'  => array('category')
        )
    );

    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Service' ),
                'singular_name' => __( 'Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'service'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt',' thumbnail')
        )
    );
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'Slide' ),
                'singular_name' => __( 'Slides' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slide'),
            'supports' => array('title', 'editor', 'excerpt',' thumbnail')
        )
    );
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonials' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonial'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt',' thumbnail')
        )
    );

    //Theme logo support
    add_theme_support( 'custom-logo' );
}

add_action( 'init', 'create_post_types' );

/**
 * Request from feedback form
 * Create endpoint
 */
add_action( 'rest_api_init', function(){
        register_rest_route( 'feedback/v1', 'send', [
        'methods'  => 'POST',
        'callback' => 'feedback_process',
        'body'     => [
            'name' => [
                'type'     => 'string',
                'required' => true,
            ],
            'email' => [
                'type'    => 'string',
                'required' => true,
            ],
            'phone' => [
                'type'    => 'string',
                'required' => true,
            ],
        ],
        'permission_callback' => '__return_true',
    ]);
} );

add_filter('rest_authentication_errors', '__return_false');

/**
 * @param WP_REST_Request $request
 * @return mixed|null
 */
function feedback_process(WP_REST_Request $request) {
    $self = get_bloginfo('admin_email');
    $message = "Name: {$request['name']}\nEmail: {$request['email']}\nPhone: {$request['phone']}";
    $subject = 'Message from site';

    $result = wp_mail($self, $subject, $message);

    $response = [
        'status' => false,
        'message' => 'Not sended!'
    ];

    if ($result)
        $response = [
            'status' => true,
            'message' => 'Sent!'
        ];

    return $response;
}

/**
 * Get team first name
 *
 * @param $name
 * @return mixed|string
 */
function get_first_name($name)
{
    return explode(" ", $name)[0];
}

/**
 * Language register
 */
add_action('init', function() {
    pll_register_string('samarqand-minora', 'contact_link_title');
    pll_register_string('samarqand-minora', 'about_title');
    pll_register_string('samarqand-minora', 'about_connect_info');
    pll_register_string('samarqand-minora', 'submit');
    pll_register_string('samarqand-minora', 'how_we_title');
    pll_register_string('samarqand-minora', 'team_title');
    pll_register_string('samarqand-minora', 'team_info_title');
    pll_register_string('samarqand-minora', 'arch_title');
    pll_register_string('samarqand-minora', 'arch_mini_title');
    pll_register_string('samarqand-minora', 'porfolio_title');
    pll_register_string('samarqand-minora', 'porfolio_content');
    pll_register_string('samarqand-minora', 'post_title');
    pll_register_string('samarqand-minora', 'post_content');
    pll_register_string('samarqand-minora', 'contact_title');
    pll_register_string('samarqand-minora', 'contact_content');
    pll_register_string('samarqand-minora', 'input_name');
    pll_register_string('samarqand-minora', 'input_email');
    pll_register_string('samarqand-minora', 'input_phone');
});