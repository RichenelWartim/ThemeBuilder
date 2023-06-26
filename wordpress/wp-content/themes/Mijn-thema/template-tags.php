<?php
/**
 * Custom template tags for your theme.
 */

if ( ! function_exists( 'your_theme_entry_meta' ) ) :
    /**
     * Display the entry meta for posts and pages.
     */
    function your_theme_entry_meta() {
        if ( 'post' === get_post_type() || 'page' === get_post_type() ) {
            $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
            if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                $time_string .= '<time class="updated screen-reader-text" datetime="%3$s">%4$s</time>';
            }
            printf(
                '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
                __( 'Posted on', 'your-text-domain' ),
                esc_url( get_permalink() ),
                sprintf( $time_string, esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ), esc_attr( get_the_modified_date( 'c' ) ), esc_html( get_the_modified_date() ) )
            );
        }
    }
endif;
