<?php
/**
 * Template for displaying taxonomy archive pages.
 *
 * @package Your_Theme
 */

// Get the header
get_header(); ?>

<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Taxonomy Title -->
        <h1><?php single_term_title(); ?></h1>
        
        <!-- Taxonomy Description -->
        <div class="taxonomy-description">
          <?php echo term_description(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php if ( have_posts() ) : ?>
          <div class="taxonomy-posts">
            <?php
            // Start the Loop
            while ( have_posts() ) : the_post();
            ?>
              <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><i class="ti-calendar mr-2"></i><?php the_date(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
              </article>
            <?php endwhile; ?>

            <!-- Pagination -->
            <div class="pagination">
              <?php the_posts_pagination(); ?>
            </div>
        
        <?php else : ?>
            <p>No posts found for this term.</p>
        <?php endif; ?>
      </div>

      <div class="col-lg-4">
        <!-- Sidebar -->
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
// Get the footer
get_footer();
