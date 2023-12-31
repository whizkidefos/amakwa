<?php get_header();
/* Template Name: News and Events */

$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
);
$articles = new WP_Query($args);
?>

<section class="page-banner">
    <div class="uk-container">
        <div class="page-banner-content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<main class="page-content">
    <div class="uk-container">
        <div class="uk-child-with-expand@s" uk-grid>
            <div class="uk-width-2-3@m">
            <?php if ($articles->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
                <div class="archive-page-content-blocks">
                    
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail(); ?>
                        <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                    </a>
                    
                </div>
            <?php endwhile; endif; ?>
                
            </div>
            <div class="uk-width-1-3@m">
                <div class="quick-links">
                    <img src="<?php echo get_template_directory_uri() . "/images/students.jpg" ?>" alt="amakwa students">
                    <div class="quick-links-content">
                        <h3>Quick links</h3>
                        <hr>
                        <a class="quick-link" href="/faqs"><span uk-icon="question"></span> Frequently asked questions</a>
                        <a class="quick-link" href="/news-events"><span uk-icon="info"></span> News & events</a>
                        <a class="quick-link" href="/about#principals-statement"><span uk-icon="comment"></span> Principals statement</a>
                        <a class="quick-link" href="/admissions"><span uk-icon="copy"></span> Admissions</a>
                        <a class="quick-link" href="/academics"><span uk-icon="bookmark"></span> Academics</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
