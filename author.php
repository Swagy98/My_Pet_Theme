<?php
/**
 * Author Template
 * 
 * Used to display the author's information and their posts.
 */

get_header(); ?>

<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Posts by: <?php the_author(); ?></h1>
        
        <!-- Author Bio (optional) -->
        <div class="author-bio">
          <p><strong>About the Author:</strong></p>
          <p><?php the_author_meta('description'); ?></p>
          <?php 
            // Display Author's Avatar
            echo get_avatar( get_the_author_meta( 'ID' ), 100 ); 
          ?>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <!-- Main content section on the left side -->
      <div class="col-lg-8">
        
        <?php if ( have_posts() ) : ?>
          <div class="row author-posts">
            <?php
            // Start the Loop
            while ( have_posts() ) : the_post();
            ?>
              <div class="col-sm-6 col-md-4 mb-4">
                <article <?php post_class(); ?> class="post-item">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><i class="ti-calendar mr-2"></i><?php the_date(); ?></p>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                </article>
              </div>
            <?php endwhile; ?>

            <!-- Pagination -->
            <div class="col-12">
              <div class="pagination">
                <?php the_posts_pagination(); ?>
              </div>
            </div>
        
        <?php else : ?>
            <p>No posts found by this author.</p>
        <?php endif; ?>
      </div>

      <!-- Sidebar section on the right side -->
      <div class="col-lg-4">
         <!-- Sidebar  -->
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
