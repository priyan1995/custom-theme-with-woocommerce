<?php
/*
Template Name: Home Page Template
*/
get_header();
?>




<section class="pd-home-trans">
  <div class="container text-center">

    <img src="<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/home-logo.png" class="home-main-logo">

    <div class="btn-div">
      <!-- <a href="home" class="pd-btn">English</a>-->
      <?php echo do_shortcode('[google-translator]'); ?>
    </div>
    <!-- <div class="marg-15tb">
      <a class="pd-home-main-pge" href="<?php echo site_url(); ?>/home" class="pd-btn">Visit Home</a> 
      </div> -->
    <img src="<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/veg-vehic-home.png" class="veg-vehic">



    <div class="home-bottom-text">
      <!-- <p class="pd-uppercase">طازجة من مزارعنا إلى منزلك</p>
      <p class="pd-uppercase">Fresh from our farms to your home</p> -->
      <img src="<?php echo site_url(); ?>/wp-content/themes/KFM/assets/img/main-page-bott.png">
    </div>

  </div>
</section>




<script>
  var flags_ele = $("#flags")

  flags_ele.find("a").on("click", function(event) {
    var location_obj = document.location
    var redirect_url = location_obj.origin + "/KFM/home"
    document.location.href = redirect_url;
  })
</script>

<?php

get_footer();
?>