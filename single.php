<?php
get_header();
if( have_posts() ) the_post();


?>

<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4><?php the_title( );?> </h4>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

<!-- blog single -->


<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">

      
        <ul class="list-inline d-flex justify-content-between py-3">
          <li class="list-inline-item"><i class="ti-user mr-2"></i>
            
          
                <p class="post-author">Written by: <?php echo get_the_author(); ?> </p>
          
            </li>
          <li class="list-inline-item"><i class="ti-calendar mr-2"></i>
             <p class="post-date">Published on: <?php the_date(); ?></p>
            </li>
        </ul>
        <?php
        //Creating Dynamic Featured Image
        the_post_thumbnail('large', array('class' => 'img-fluid'));
        ?>
        <div class="content">
            <!-- Creating Dynamic Content -->
          <?php the_content();?>
          <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template(); // This will load the comments.php file
            endif;
          ?>
      </div>
      </div>
      <div class="col-lg-4">
        <!-- Creating Dynamic Sidebar -->
        <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
          <aside id="sidebar" class="widget-area">
            <?php dynamic_sidebar( 'main-sidebar' ); ?>
          </aside>
        <?php endif; ?>
      </div>
  </div>
  </div>
</section>
<!-- /blog single -->



<?php
get_footer();
?>
