<?php
function midterm_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'midterm-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'midterm_scripts' );
//add_action( 'wp_enqueue_scripts', 'cis_add_hello_script' );
function hello_script() {
	//die('cis_add_hello_script');
	wp_register_script(
        'hello-script', // name the script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/assets/js/hello.js', // this is the location of the script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
	wp_enqueue_script('hello-script');
}
add_action( 'wp_head', 'hello_script' );
/* alternate alert but doesnt use the js file specified
function js_alert()
{
    ?>
    <script type="text/javascript">
        function codeAddress() {
            alert('Well Hello');
        }
        window.onload = codeAddress;
    </script>

    <?php
}

add_action('wp_head', 'js_alert');
*/
function midterm_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
 
}
//register sidebar
add_action( 'widgets_init', 'midterm_sidebar' );
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 //////////// Customizer ///////////////////////

