<footer>
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <address class="footer-address">
                <p><span uk-icon="icon: location;"></span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, reiciendis ipsam? Libero voluptas tenetur doloribus ab quos repudiandae deleniti corporis eius praesentium quae quis dicta, illo animi velit vel. Assumenda.</p>
            </address>
            <div class="">
                <?php
                    $args = array(
                        'theme_location' => 'footer-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu'
                    );
                    wp_nav_menu( $args );
                ?>
                <small class="uk-text-center">
                    &copy; <?php echo date("Y"); ?> Amakwa Community Model School | All rights reserved.
                </small>
            </div>
        </div>
        
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>