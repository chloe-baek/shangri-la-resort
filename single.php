<?php get_header(); ?>

<div id="article">
    <article>
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_title('<h2>','</h2>');
                    the_date('','<p class="date">Posted on ','</p>');
                    print '<p class="author">Posted by <a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author().'</a></p>';
                    the_content();
                    
                    the_tags('<div class="tags"><span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span></div>');
               
        }
        }

        ?>
    </article>

</div>

<?php get_footer(); ?>