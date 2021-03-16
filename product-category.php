<?php
/*
Template Name: Home Category Template
*/
get_header();
?>



<?php echo do_shortcode('[metaslider id="97"]'); ?>

<section class="pd-category-main-sec" style="background-image:url('<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/background.png')">
    <div class="container text-center">
        <?php echo do_shortcode('[product_categories columns="4"]'); ?>
    </div>
</section>

<section class="pd-number-counter" style="background-image: url('<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/background-counter.jpg');">
    <div class="pd-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="pd-card-num">
                        <i class="fas fa-box-open"></i>
                        <p><span class="count">10</span>+</p>
                        <h3>Categories</h3>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="pd-card-num">
                        <i class="fas fa-luggage-cart"></i>
                        <p><span class="count">200</span>+</p>
                        <h3>Product</h3>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="pd-card-num">
                        <i class="fas fa-truck"></i>
                        <p><span class="count">20</span>+</p>
                        <h3>Orders</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pd-top-selling-product">
    <div class="container">
        <h2 class="text-center">Top Selling Product</h2>
        <br>
        <?php echo do_shortcode('[products limit="8" columns="4" best_selling="true" ]'); ?>
    </div>
</section>





<?php
get_footer();
?>

<script>
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 6000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
