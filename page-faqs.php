<?php get_header(); ?>

<section class="page-banner">
    <div class="uk-container">
        <div class="page-banner-content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<main class="page-content faq-page-content">
    <div class="uk-container">
        <div class="uk-child-with-expand@s" uk-grid>
            <div class="uk-width-2-3@m">
            <ul uk-accordion>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, totam.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Lorem ipsum dolor sit amet.</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
            </ul>
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