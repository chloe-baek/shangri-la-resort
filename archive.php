<?php get_header(); ?>

<?php
    the_archive_title('<h2>','</h2>');

    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title('<h3>','</h3>');
            the_excerpt();
            
            print '<a href="'.get_the_permalink().'" class="archive-link">Read  more &rarr;</a>';
        }
    }
?>

<?php get_footer(); ?>