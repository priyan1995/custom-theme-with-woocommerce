<?php

include_once('inc/class-wp-bootstrap-navwalker.php');

// Register Resources
function kfm() {


	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_register_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_register_style( 'stylesheet', get_stylesheet_uri() );

	wp_enqueue_style('owl-css');
	wp_enqueue_style('owl-theme-css');
	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_style( 'aos-css' );

	
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.1', true );
	wp_register_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_script('owl-js');
	wp_enqueue_script('main-js');


}
add_action( 'wp_enqueue_scripts', 'kfm' );

// Menus
add_action( 'after_setup_theme', 'register_nero_primary_menu' );
function register_nero_primary_menu() {
	register_nav_menus(array( 
		// 'home'		=> 	__( 'Home Menu', 'dox_pro' ),
		'primary'	=> 	__( 'Primary Menu', 'KFM' ),
		'Category'	=>	__( 'Category Menu', 'KFM' )

	 ));
}


add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}


// ----------------- theme options page

add_action("admin_menu", "mythemeoptions");

function mythemeoptions()
{

  add_menu_page(
    "theme-options", //page title
    "Theme-options", //Menu title
    "manage_options", //Capability
    "theme-options", //Menu Slug
    "mycustom_options", //callback funtion
    "dashicons-admin-generic" //icon

  );
}
// ==========

function mycustom_options()
{
  // we have to link our custom settings
  ?>
  <div>
  <h1>Theme Options Panel</h1>
  <?php settings_errors(); ?>
    <form action="options.php" method="post">
      <?php
      settings_fields("section");
      do_settings_sections("theme-options");
      submit_button();
      ?>
    </form>
  </div>
<?php
}

// ===========
// theme options settings page
function theme_options_setting()
{
	add_settings_section(
		"section", //id of setting section
		"All Page", // title
		"", // callback function
		"theme-options" // page
	  );

   add_settings_field(
    "instagram_url",
    "Instagram Url",
    "display_insta_url",
    "theme-options",
    "section"

  );

  add_settings_field(
    "whatsap_number",
    "Whatsap Number",
    "display_whatsap_number",
    "theme-options",
    "section"

  );

  add_settings_field(
    "phone_number",
    "Phone Number",
    "display_phone_number",
    "theme-options",
    "section"

  );

  add_settings_field(
    "email_address",
    "Email Address",
    "display_email_add",
    "theme-options",
    "section"

  );

  add_settings_field(
    "address",
    "Address",
    "display_add",
    "theme-options",
    "section"

  );

  add_settings_field(
    "location",
    "Location",
    "display_location",
    "theme-options",
    "section"

  );

  


  register_setting("section", "instagram_url");
  register_setting("section", "whatsap_number");
  register_setting("section", "phone_number");
  register_setting("section", "email_address");
  register_setting("section", "address");
  register_setting("section", "location");

}

add_action("admin_init", "theme_options_setting");

function display_insta_url()
{?>
  <input type="url" name="instagram_url" value="<?php echo get_option('instagram_url'); ?>" id="instagram_url" /> 
<?php
}

function display_whatsap_number()
{?>
  <input type="text" name="whatsap_number" value="<?php echo get_option('whatsap_number'); ?>" id="whatsap_number" /> 
<?php
}

function display_phone_number()
{?>
  <input type="text" name="phone_number" value="<?php echo get_option('phone_number'); ?>" id="phone_number" /> 
<?php
}

function display_email_add()
{?>
  <input type="email" name="email_address" value="<?php echo get_option('email_address'); ?>" id="email_address" /> 
<?php
}

function display_location()
{?>
  <input type="text" name="location" value="<?php echo get_option('location'); ?>" id="location" /> 
<?php
}

function display_add()
{?>
  <textarea  name="address"  id="address" ><?php echo get_option('address'); ?> </textarea> 
<?php
}

// add_action( 'init', 'custom_fix_thumbnail' );

// function custom_fix_thumbnail() {
//     add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');

//     function custom_woocommerce_placeholder_img_src( $src ) {
//         $upload_dir = wp_upload_dir();
//         $uploads = untrailingslashit( $upload_dir['baseurl'] );
//         $src = $uploads . '2020/06/test.png';

//         return $src;
//     }
// }




add_action ('woocommerce_single_product_summary', 'show_weight', 20);
function show_weight() {
global $product;
$weight_unit = get_option('woocommerce_weight_unit');
$attributes = $product->get_attributes();
if ( $product->has_weight() ) {
print '<p>Weight: '.$product->get_weight(). $weight_unit . '</p>'.PHP_EOL;
}
}

add_action( 'woocommerce_after_shop_loop_item', 'rs_show_weights', 9 );

function rs_show_weights() {

    global $product;
    $weight = $product->get_weight();

    if ( $product->has_weight() ) {
        echo '<div class="product-meta"><span class="product-meta-label">W: </span>' . $weight . get_option('woocommerce_weight_unit') . '</div></br>';
    }else{
      echo '<div class="product-meta"><span class="product-meta-label">W: </span> </div></br>';
    }
}



/**
 * Override loop template and show quantities next to add to cart buttons
 */
// add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
// function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
// 	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
// 		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
// 		$html .= woocommerce_quantity_input( array(), $product, false );
// 		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
// 		$html .= '</form>';
// 	}
// 	return $html;
// }


function custom_quantity_field_archive() {

	$product = wc_get_product( get_the_ID() );

	if ( ! $product->is_sold_individually() && 'variable' != $product->product_type && $product->is_purchasable() ) {
		woocommerce_quantity_input( array( 'min_value' => 1, 'max_value' => $product->backorders_allowed() ? '' : $product->get_stock_quantity() ) );
	}

}

add_action( 'woocommerce_after_shop_loop_item', 'custom_quantity_field_archive', 9, 9 );


function custom_add_to_cart_quantity_handler() {
wc_enqueue_js( '
jQuery( "body" ).on( "click", ".quantity input", function() {
return false;
});
jQuery( "body" ).on( "change input", ".quantity .qty", function() {
var add_to_cart_button = jQuery( this ).parents( ".product" ).find( ".add_to_cart_button" );
// For AJAX add-to-cart actions
add_to_cart_button.attr( "data-quantity", jQuery( this ).val() );
// For non-AJAX add-to-cart actions
add_to_cart_button.attr( "href", "?add-to-cart=" + add_to_cart_button.attr( "data-product_id" ) + "&quantity=" + jQuery( this ).val() );
});
' );
}
add_action( 'init', 'custom_add_to_cart_quantity_handler' );