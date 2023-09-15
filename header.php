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
        <div class="uk-container">
            <div class="nav-wrapper">
                <div class="menu-toggler nav-pills"><span uk-icon="icon: menu"></span> MENU</div>
                <a href="/" class="nav-logo"><img src="<?php echo get_template_directory_uri() . "/images/amakwa.png" ?>" alt="amakwa logo"></a>
                <a href="/contact" class="nav-contact nav-pills"><span uk-icon="icon: location"></span> CONTACT</a>
            </div>
        </div>
    </header>