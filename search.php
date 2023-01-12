<?php get_header(); ?>
<h2>Search results for &ldquo;<?php print $_GET['s']; ?>&rdquo;</h2>

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title('<h3>','</h3>');
            the_date('','<p class="date">Posted on ','</p>');
            the_excerpt();
            print '<a href="'.get_the_permalink().'" class="archive-link">Read more&rarr;</a>';
        }
    }else{
        print '<p>No results found.</p>';
    }
?>

<?php get_footer(); ?>