<?php 
get_header();
?>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Displaying Page Title -->
        <h2 class="mb-4"><?php the_title();?></h2>

         <!-- Dynamic Featured Image -->
              <?php  
                if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100 mb-4">
              <?php endif; ?>      
         <!-- Displaying Page Content -->
        <p><?php the_content();?></p>
      </div>
    </div>
  </div>
</section>


<!-- instagram -->
<!-- <section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section> -->
<!-- /instagram -->




<?php
get_footer( );
?>