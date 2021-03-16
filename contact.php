<?php
/*
Template Name: Contact Page Template
*/
get_header();
?>

<section class="pd-contact-section">
    <div class="container">
        <h1 class="page-title">Contact Page</h1>
        <div class="row">
            <div class="col-lg-4" data-aos="flip-up" data-aos-delay="200">
                <div class="pd-cont-card">
                    <h3>Call us</h3>
                    <a href="tel:<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a>
                </div>
            </div>
            <div class="col-lg-4" data-aos="flip-up" data-aos-delay="300">
                <div class="pd-cont-card">
                    <h3>Email Us</h3>
                    <a href="mailto:<?php echo get_option('email_address'); ?>"><?php echo get_option('email_address'); ?></a>
                </div>
            </div>
            <div class="col-lg-4" data-aos="flip-up" data-aos-delay="400">
                <div class="pd-cont-card">
                    <h3>Find Us</h3>
                    <p><?php echo get_option('address'); ?></p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">            
            <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="pd-cont-form">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]');  ?>
                </div>
            </div>
            <div class="col-lg-6 pad-bot-33" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="pd-map">
                    <iframe src="<?php echo get_option('location'); ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>