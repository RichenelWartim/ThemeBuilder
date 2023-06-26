<?php
/**
 * The template for displaying individual pages
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
