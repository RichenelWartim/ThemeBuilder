<?php
/**
 * The template for displaying individual posts
 */

get_header(); // Include the header.php template

while (have_posts()) :
    the_post();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <footer class="entry-footer">
            <?php
            // Display the post's metadata
            if (has_category() || has_tag() ||get_the_author()) {
                echo '<div class="entry-meta">';
                if (has_category()) {
                    echo '<span class="entry-categories">' . esc_html__('Categories: ', 'your-text-domain') . get_the_category_list(', ') . '</span>';
                }
                if (has_tag()) {
                    echo '<span class="entry-tags">' . esc_html__('Tags: ', 'your-text-domain') . get_the_tag_list('', ', ') . '</span>';
                }
                if (get_the_author()) {
                    echo '<span class="entry-author">' . esc_html__('Posted by ', 'your-text-domain') . get_the_author() . '</span>';
                }
                echo '</div>';
            }
            ?>
        </footer>

        <?php
        // If comments are open or there's at least one comment, display the comment section
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    </article>

    <?php
endwhile;

get_footer(); // Include the footer.php template
