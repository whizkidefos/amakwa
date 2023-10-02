<?php get_header(); ?>

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
            <ul uk-accordion>
                <li>
                    <a class="uk-accordion-title" href>Question example 1</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Question example 2</a>
                    <div class="uk-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                        </p>
                    </div>
                </li>
            </ul>
            </div>
            <div class="uk-width-1-3@m">
                <h3>Quick links</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit quasi accusantium expedita necessitatibus soluta officia, repellendus animi reprehenderit sit.
                </p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>