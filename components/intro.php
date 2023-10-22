<section class="intro">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <figure>
                <img src="<?php echo get_template_directory_uri() . "/images/intro.jpg" ?>" alt="intro-image">
            </figure>
            <article>
                <h2 class="section-heading"><?php the_field('our_story_title'); ?></h2>
                <p><?php the_field('our_story_description'); ?></p>
                <a href="/about" class="amakwa-button">Learn more</a>
            </article>
        </div>
    </div>
</section>