<?php
get_header();
?>

<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>
          <?php
          if (is_category()) {
              echo 'Category: ' . single_cat_title('', false);
          } elseif (is_tag()) {
              echo 'Tag: ' . single_tag_title('', false);
          } elseif (is_author()) {
              echo 'Author: ' . get_the_author();
          } elseif (is_date()) {
              echo 'Archives for: ' . get_the_date('F Y');
          } else {
              echo 'Blog Archives';
          }
          ?>
        </h1>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <!-- Main content area -->
      <div class="col-lg-8">
        <?php if ( have_posts() ) : ?>
          <div class="row">
            <?php
            // Start the Loop
            while ( have_posts() ) : the_post();
            ?>
              <div class="col-md-4 mb-4"> <!-- Bootstrap 3-column grid for large screens, with margin-bottom -->
                <div class="post-item">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p class="post-meta">
                    <i class="ti-calendar mr-2"></i> <?php the_date(); ?> 
                    <i class="ti-user mr-2"></i> <?php the_author(); ?>
                  </p>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?></a>
                    </div>
                  <?php endif; ?>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>

          <!-- Pagination -->
          <div class="pagination">
            <?php the_posts_pagination(); ?>
          </div>

        <?php else : ?>
            <p>No posts found in this archive.</p>
        <?php endif; ?>
      </div>

      <!-- Sidebar section moved to the right side -->
      <div class="col-lg-4">
        <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
          <aside id="sidebar" class="widget-area">
            <?php dynamic_sidebar( 'main-sidebar' ); ?>
          </aside>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>
