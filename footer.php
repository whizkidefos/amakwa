<footer>
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <address class="footer-address">
                <p class="uk-flex">
                    <span uk-icon="icon: location;"></span>
                    <span>&nbsp; Amakwa Unity School Road, Amakwa, Ekwusigo Local Government Area, Anambra State</span>
                </p>
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