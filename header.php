<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/images/amakwa.png" ?>" type="image/x-icon">
</head>
<?php wp_head(); ?>
<body>

    <header class="main-header">
        <div class="uk-container uk-container-large">
            <div class="nav-wrapper">
                <div class="menu-toggler nav-pills"><span uk-icon="icon: menu"></span> <span class="hide-on-mobile">MENU</span></div>
                <a href="/" class="nav-logo"><img src="<?php echo get_template_directory_uri() . "/images/amakwa.png" ?>" alt="amakwa logo"></a>
                <a href="/contact" class="nav-contact nav-pills"><span uk-icon="icon: location"></span> <span class="hide-on-mobile">CONTACT</span></a>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <span uk-icon="close" class="close-menu"></span>
        <div class="nav-wrapper">
            <div class="nav-group">
                <h4><span uk-icon="icon: thumbnails"></span> Main Navigation</h4>
                <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
        </div>
    </nav>