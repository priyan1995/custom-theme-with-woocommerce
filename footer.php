<section class="pd-footer text-center">
	<div class="container">
		<!-- <p>copyright <i class="far fa-copyright"></i>startup</p>
		<p><a>Terms</a> | <a>Policy</a></p> -->
		<div class="row">
			<div class="col-lg-4 pd-flex-footer">
				<a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/main-logo.png" />
				</a>
			</div>
			<div class="col-lg-4 logo-footer">
				<div>
					<a href="<?php echo site_url(); ?>/home">Home</a>
				</div>
				<div>
					<a href="<?php echo site_url(); ?>/product-page">Product</a>
				</div>
				<div>
					<a href="<?php echo site_url(); ?>/contact-page">Contact</a>
				</div>
			</div>

			<div class="col-lg-4 social-footer">
				<div class="ss-icons">
					<a href="<?php echo get_option('instagram_url'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://wa.me/<?php echo get_option('whatsap_number'); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
					<!-- <a href="tel:<?php echo get_option('phone_number'); ?>"><i class="fas fa-phone"></i></a> -->

				</div>
				<div class="foot-ss-cont">
					<p>Call Us: <a href="tel:<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>

					<p>Email Us: <a href="mailto:<?php echo get_option('email_address'); ?>"><?php echo get_option('email_address'); ?></a></p>
				</div>

			</div>
		</div>
	</div>
</section>

<script>
	AOS.init({
		once: true
	});
</script>


<?php wp_footer();  ?>
</body>

</html>