<footer class="site-footer">
    <div class="container">
        <div class="site-info">
            <?php
            printf(
                esc_html__('© %s %s. All rights reserved.', 'your-text-domain'),
                date('Y'),
                esc_html(get_bloginfo('name'))
            );
            ?>
        </div>
    </div><!-- .container -->
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>
