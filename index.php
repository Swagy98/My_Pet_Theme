<?php
get_header();

if (is_single()) {
    include get_template_directory() . '/single.php';
} elseif (is_home()) {
    // Display blog posts or redirect logic
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('content', get_post_format());
        }
    } else {
        echo '<p>' . esc_html__('No posts available.', 'your-theme-textdomain') . '</p>';
    }
} else {
    // Default fallback message
    echo '<p>' . esc_html__('No content found.', 'your-theme-textdomain') . '</p>';
}

get_footer();
?>
