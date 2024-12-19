<?php 
get_header();
?>
<!-- page-title -->
<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4><?php printf( esc_html__( 'Search Results for: %s', 'your-theme-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

<!-- search result -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
            <!-- Post Loop -->
            <?php if ( have_posts() ) : ?>
                <ul class="list-unstyled">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <li class="border-bottom mb-4 pb-3">
                            <h4><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
                            <p><?php echo get_the_date(); ?></p>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-transparent pl-0"><?php esc_html_e( 'Read More', 'your-theme-textdomain' ); ?></a>
                        </li>
                    <?php endwhile; ?>

                </ul>
                <!-- Pagination -->
                <div class="pagination">
                    <?php
                        the_posts_pagination( array(
                        'prev_text' => __( 'Previous', 'your-theme-textdomain' ),
                        'next_text' => __( 'Next', 'your-theme-textdomain' ),
                        ) );
                    ?>
                </div>
                <?php else : ?>
                <!-- No results found, show image and message -->
                <div class="no-results text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/weepingdog.jpg'?>" alt="Nothing Found" class="img-fluid" style="max-width: 300px;">
                    <p class="no-results-text"><?php esc_html_e( 'Sorry, nothing relevant found. Please try again with different keywords.', 'your-theme-textdomain' ); ?></p>
                </div>
            <?php endif;?>
      </div>
    </div>
  </div>
</section>
<!-- /search result -->

<?php
get_footer();
?>