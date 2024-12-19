<?php
/**
 * The template for displaying comments.
 *
 * This template displays the comment section, the form for submitting a new comment, and lists existing comments.
 *
 * @package Your_Theme_Name
 */

// If the post is password protected, display a message.
if ( post_password_required() ) {
    echo '<p class="no-comments">This post is password protected. Enter the password to view comments.</p>';
    return;
}
?>

<!-- Comments Section -->
<div id="comments" class="comments-area">

    <!-- Display existing comments -->
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
                $comment_count = get_comments_number();
                if ( '1' === $comment_count ) {
                    printf( 'One Comment', get_the_title() );
                } else {
                    printf(
                        '%1$s Comments',
                        number_format_i18n( $comment_count )
                    );
                }
            ?>
        </h3>

        <ul class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'avatar_size'=> 50,
                ) );
            ?>
        </ul>

        <!-- Display Pagination for Comments -->
        <?php
            the_comments_navigation( array(
                'prev_text' => '&larr; Older Comments',
                'next_text' => 'Newer Comments &rarr;',
            ) );
        ?>

    <?php endif; // End of comments check ?>

    <!-- Display a message if there are no comments yet -->
    <?php if ( ! have_comments() ) : ?>
        <p class="no-comments">Be the first to comment!</p>
    <?php endif; ?>

    <!-- Comment Form -->
    <?php
    // Check if comments are open or there are existing comments
    if ( comments_open() ) :
        comment_form( array(
            'title_reply' => 'Leave a Comment', // Change the title if needed
            'label_submit' => 'Post Comment', // Change the submit button label
            'comment_field' => '<p class="comment-form-comment"><label for="comment">Your Comment</label><textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea></p>', // Customize textarea
            'fields' => array(
                'author' => '<p class="comment-form-author"><label for="author">Name</label><input id="author" name="author" type="text" value="" size="30" required="required" /></p>',
                'email'  => '<p class="comment-form-email"><label for="email">Email</label><input id="email" name="email" type="email" value="" size="30" required="required" /></p>',
                'url'    => '<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="url" value="" size="30" /></p>',
            ),
        ) );
    endif;
    ?>

</div><!-- #comments -->
