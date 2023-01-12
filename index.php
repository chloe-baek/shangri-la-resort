<?php get_header(); ?>
<h2><?php single_post_title(); ?></h2>
<aside class="news-sidebar">
    <?php
    if(is_active_sidebar('month-sidebar')){
        get_sidebar();
    }
    if(is_active_sidebar('category-sidebar')){
        get_sidebar();
    }
    ?>
</aside>
<?php
$img_id = get_post_thumbnail_id(get_the_ID());
$alt_text = get_post_meta($img_id, '_wp_attachment_image_alt',true);

    if(have_posts()){
         while(have_posts()){
             print '<article class="blog-post">';
             the_post();
             print '<a href="'.get_the_permalink().'">';
         ?>

<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php print $alt_text; ?>">
<?php
        print '</a>';
        the_title('<h3><a href="'.get_the_permalink().'">','</a></h3>');
        the_date();
        the_excerpt();
        
        print '<a href="'.get_the_permalink().'">Read more &rarr;</a>';
        
        print '<p class="author">'.get_avatar(get_the_author_meta('ID')).' by '.get_the_author().'</p>';
     
     print '</article>';
    }
}
?>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>