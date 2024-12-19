<?php
get_header();
?>

<section class="error-404 not-found section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="display-1 text-danger"><?php esc_html_e( '404:Resources Not Found', 'your-theme-textdomain' ); ?></h1>
        <h2 class="mb-4"><?php esc_html_e( 'Oops! That page can’t be found.', 'your-theme-textdomain' ); ?></h2>
        <p class="lead"><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'your-theme-textdomain' ); ?></p>
        
        <!-- Search Form -->
        <?php get_search_form(); ?>

        <!-- Helpful Links Section -->
        <h3 class="mt-4"><?php esc_html_e( 'Or check out some of our popular sections:', 'your-theme-textdomain' ); ?></h3>
        <ul class="list-inline mt-3">
          <li class="list-inline-item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Back to Home', 'your-theme-textdomain' ); ?></a>
          </li>
          <li class="list-inline-item">
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Visit the Blog', 'your-theme-textdomain' ); ?></a>
          </li>
          <li class="list-inline-item">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-info"><?php esc_html_e( 'Contact Us', 'your-theme-textdomain' ); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>
