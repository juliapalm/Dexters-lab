<?php
//Defining a menu location
function register_my_menu() {
  register_nav_menu(
    'header-nav', __('Page Menu')
  );
}
add_action( 'init', 'register_my_menu' );
?>

<?php
//Echo out menu HTML
//wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>
