<?php
function boendepost_post_type() {

    $args = array(

        'public'              => true, // bool (default is FALSE)

        'publicly_queryable'  => true, // bool (defaults to 'public').

        'exclude_from_search' => false, // bool (defaults to 'public')

        'show_in_nav_menus'   => true, // bool (defaults to 'public')

        'show_ui'             => true, // bool (defaults to 'public')

        'show_in_menu'        => true, // bool (defaults to 'show_ui')

        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

        'menu_position'       => 5, // int (defaults to 25 - below comments)

        'menu_icon'           => 'dashicons-building', // string (defaults to use the post icon)

        'can_export'          => true, // bool (defaults to TRUE)

        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

        'hierarchical'        => false, // bool (defaults to FALSE)

        'has_archive'         => 'boendepost', // bool|string (defaults to FALSE)

        'query_var'           => 'boendepost', // bool|string (defaults to TRUE - post type name)

        'capability_type'     => 'post', // string|array (defaults to 'post')

        'map_meta_cap'        => true, // bool (defaults to FALSE)

        'rewrite' => array(
         'slug'                  => 'boendepost',
         'with_front'            => false,
         'pages'                 => true,
         'feeds'                 => false,
       ),

        'supports' => array(

            /* Post titles ($post->post_title). */
            'title',

            /* Post content ($post->post_content). */
            'editor',

            /* Post excerpt ($post->post_excerpt). */
            //'excerpt',

            /* Post author ($post->post_author). */
            'author',

            /* Featured images (the user's theme must support 'post-thumbnails'). */
            'thumbnail',

            /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
            //'comments',

            /* Displays meta box to send trackbacks from the edit post screen. */
            //'trackbacks',

            /* Displays the Custom Fields meta box. Post meta is supported regardless. */
            //'custom-fields',

            /* Displays the Revisions meta box. If set, stores post revisions in the database. */
            //'revisions',

            /* Displays the Attributes meta box with a parent selector and menu_order input box. */
            /*'page-attributes',*/

            /* Displays the Format meta box and allows post formats to be used with the posts. */
            //'post-formats',
        ),

       /*'taxonomies'            => array( 'boende_skill', 'boende_type' ),*/
        'labels' => array(
            'name'               => __( 'Boendeposter',                   'Boende-textdomain' ),
            'singular_name'      => __( 'Boendepost',                    'boendepost-textdomain' ),
            'menu_name'          => __( 'Boendeposter',                   'boendepost-textdomain' ),
            'name_admin_bar'     => __( 'Boendeposter',                   'boendepost-textdomain' ),
            'add_new'            => __( 'Lägg till ny',                    'boendepost-textdomain' ),
            'add_new_item'       => __( 'Lägg till ny boendepost',            'boendepost-textdomain' ),
            'edit_item'          => __( 'Redigera boendepost',               'boendepost-textdomain' ),
            'new_item'           => __( 'Ny boendepost',                'boendepost-textdomain' ),
            'view_item'          => __( 'Se boendepost',               'boendepost-textdomain' ),
            'search_items'       => __( 'Sök boendepost',            'boendepost-textdomain' ),
            'not_found'          => __( 'Hittade inga boendeposter',          'boendepost-textdomain' ),
            'not_found_in_trash' => __( 'Hittade inga boendeposter i papperskorgen', 'boendepost-textdomain' ),
            'all_items'          => __( 'Alla boendeposter',               'boendepost-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type(
        'boendepost', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'boendepost_post_type' );
?>
