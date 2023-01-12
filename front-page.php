<?php get_header(); ?>

<div class="section">
    <section class="main-content">
        <?php
        if( have_posts()){
            // ⬇︎ Loop (iterate)
            while( have_posts() ){

                the_post();
                the_title('<h2>','</h2>');
                the_content();
                
            }

        }
        ?>
    </section>
    <section class="side-bar">
        <?php
        if(is_active_sidebar('home-sidebar')){
            get_sidebar();
        }
        ?>
    </section>

</div>

<?php get_footer(); ?>