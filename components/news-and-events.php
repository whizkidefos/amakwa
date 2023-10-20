<?php

$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
);
$articles = new WP_Query($args);

?>

<section class="news-and-events">
    <div class="uk-container">
        <h2 class="uk-text-center section-heading">News & Events</h2>
        <br><br>
        <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
        <?php if ($articles->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
            <div>
                <article class="news-and-events-card">
                    <figure class="news-and-events-image">
                        <?php the_post_thumbnail(); ?>
                        <div class="news-and-events-meta">
                            <small><?php
                                $categories = get_the_category();

                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );
                                }
                            ?> | </small>
                            <small>
                                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </small>
                        </div>
                    </figure>
                    <div class="news-and-events-content">
                        <h4 class="news-and-events-title"><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>

                        <div class="news-and-events-cta">
                            <a href="<?php the_permalink() ?>" rel="bookmark" class="amakwa-button">
                                Learn more
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</section>