<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Pet_Blogging_Theme
 */

// Check if the sidebar is active (i.e., if there are any widgets added).
if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
    <aside id="sidebar" class="sidebar">
        <div class="sidebar-content">
            <?php
                // Display the active widgets in the 'primary-sidebar' widget area.
                dynamic_sidebar( 'primary-sidebar' );
            ?>
        </div>
    </aside>
<?php else : ?>
    <!-- Optional: You can add a message or default content here if no widgets are added. -->
    <aside id="sidebar" class="sidebar">
        <p><?php esc_html_e( 'No widgets added yet. Add widgets from the WordPress admin.', 'yourthemename' ); ?></p>
    </aside>
<?php endif; ?>
