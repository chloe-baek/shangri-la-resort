    <footer>
        <div class="social-icons">
            <?php
            if(is_active_sidebar('footer-sidebar')){
                dynamic_sidebar('footer-sidebar');
            }
            ?>
        </div>

        <p>Photographs by <a href="https://www.flickr.com/photos/eeko/4694978995/">Easa Shamih</a>, <a
                href="https://www.flickr.com/photos/rdeut/3903085069/">Raj Deutunder</a> , and <a
                href="https://www.flickr.com/photos/prayitnophotography/">Paryitno</a> under a <a
                href="https://creativecommons.org/licenses/by/2.0/">Creative Commons Attribution 2.0 Generic (CC BY 2.0)
                license</a></p>
        <p>&copy; Shangri-La Resorts <?php print date('Y'); ?></p>
    </footer>
    <?php wp_footer(); ?>
    </div>
    </body>

    </html>