<!doctype html>
<html <?php language_attributes(); ?> style="margin-top:0 !important">

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--  AOS  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

  <!-- ========font awesome ====== -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <!-- CDN sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
	<style>
	.tool-container.tool-top {
    top: 44px !important;
    bottom: auto !important;
}
	</style>
</head>

<body <?php body_class(); ?> >
  <div class="wrapper">
    <div class="header">
      <div class="header-wrap">
        <div class="container-fluid pd-top-bar">

        </div>

        <div class="container pd-menu-bar">
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="logo-wrap">
                <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
                  <img src="<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/main-logo.png" />
                </a>
              </div>
            </div>

            <div class="col-lg-12 text-right">
              <div class="pd-social-icon-div" >
                <a href="<?php echo get_option('instagram_url'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/<?php echo get_option('whatsap_number'); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="tel:<?php echo get_option('phone_number'); ?>"><i class="fas fa-phone"></i></a>
                <a href="<?php echo site_url(); ?>/cart"><i class="fas fa-shopping-cart"></i></a>
              </div>
            </div>



          </div>
        </div>

        <!-- ============= main menu bar -->
        <div class="main-menu-bar ">
          <div class="container">
            <!-- category menu -->
            <div class="col-lg-1">
              <div class="pos-f-t pd-category-menu row">
                <nav class="navbar">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-image: url('<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/hb.png);"></span>
                  </button>
                </nav>

                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="p-4">
                    <?php
                    wp_nav_menu(
                      array(
                        'depth'       => 10,
                        'theme_location'  => 'Category',
                        'container_class' => 'false',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'category-menu',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                      )
                    );
                    ?>

                  </div>
                </div>
              </div>
            </div>
            <!-- category menu end -->

            <!-- search form -->
            <div class="col-lg-12">
              <div class="pd-search-form">
                <form action="<?php echo site_url(); ?>/" method="get">
                  <button type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>"><i class="fas fa-search"></i></button>
                  <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
                </form>
              </div>
            </div>
            <!-- search form end -->

        


            <?php
            /*
          
            <nav class="navbar navbar-expand-lg navbar-dark " id="pd_fixed_nav">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


              <div class="main-menu-wrap collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(
                  array(
                    'depth'       => 10,
                    'theme_location'  => 'primary',
                    'container_class' => 'false',
                    'container_id'    => 'navbarNavDropdown',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => '',
                    'menu_id'         => 'main-menu',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                  )
                );
                ?>

              </div>
            </nav>
              */
            ?>


          </div>
        </div>
        <!-- ==== end menu bar -->

      </div>
    </div>
    <script>
      jQuery(document).ready(function() {
        $(".add_to_cart_button").click(function() {
          swal({
            title: "Success",
            text: "Product has been added to your cart.",
            icon: "success",
            button: "Close",
          });
        });
      });
    </script>