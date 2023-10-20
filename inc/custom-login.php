<?php

function amakwaLoginStylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'amakwaLoginStylesheet' );

function amakwaLoginLogo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/amakwa.png);
		height: 100px;
		width: 130px;
        border-radius: 100%;
		background-size: cover;
		background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'amakwaLoginLogo' );

function amakwaLoginLogoUrl() {
    return home_url();
}
add_filter( 'login_headerurl', 'amakwaLoginLogoUrl' );

function amakwaLoginLogoUrlTitle() {
    return 'Amakwa Unity Model School';
}
add_filter( 'login_headertext', 'amakwaLoginLogoUrlTitle' );

function loginCheckedRememberMe() {
    add_filter( 'login_footer', 'remembermeChecked' );
}
add_action( 'init', 'loginCheckedRememberMe' );

function remembermeChecked() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
}