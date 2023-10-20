<?php get_header(); ?>

<section class="page-banner">
    <div class="uk-container">
        <div class="page-banner-content">
            <h1><?php the_title(); ?></h1>
            <small class="post-page-meta">
                <?php $categories = get_the_category();
                $separator = ',';
                $output = '';
                if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'amakwa' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                    }
                    echo trim( $output, $separator );
                } ?>
            </small>
            <small class="post-page-meta">
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
            </small>
        </div>
    </div>
</section>

<main class="amakwa-post-content">
    
        <figure class="">
            <?php the_post_thumbnail(); ?>
        </figure>
        <article class="">
            <?php the_content(); ?>
        </article>
    
</main>

<?php get_footer(); ?>