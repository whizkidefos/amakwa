<?php get_header(); ?>

<section class="page-banner">
    <div class="uk-container">
        <div class="page-banner-content">
            <h1>404</h1>
        </div>
    </div>
</section>

<main class="page-content faq-page-content">
    <div class="uk-container">
        <div class="uk-child-with-expand@s" uk-grid>
            <div class="uk-width-2-3@m">
                <h2>Page not found!</h2>
                <p>Sorry, the page you are looking for does not exist.</p>
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