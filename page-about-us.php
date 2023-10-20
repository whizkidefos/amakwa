<?php get_header(); ?>

<section class="page-banner">
    <div class="uk-container">
        <div class="page-banner-content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<summary class="our-story uk-container uk-container-small">
    <div class="">
        <h2 class="uk-text-center section-heading"><?php the_field('our_story_title'); ?></h2>
        <small class="uk-text-center"><?php the_field('our_story_subtitle'); ?></small>
        <p class="uk-text-center"><?php the_field('our_story_summary'); ?>
        </p>
    </div>
</summary>

<main class="about-us">
    <div class="uk-container">
        <section class="our-mission ltr-flex" id="our-mission">
            <figure>
                <img src="<?php the_field('our_mission_image'); ?>" alt="amakwa students">
            </figure>
            <article>
                <h2 class="section-heading"><?php the_field('our_mission_title'); ?></h2>
                <p>
                <?php the_field('our_mission_description'); ?>
                </p>
            </article>
        </section>

        <section class="our-vision rtl-flex" id="our-vision">
        <article>
                <h2 class="section-heading"><?php the_field('our_vision_title'); ?></h2>
                <p>
                <?php the_field('our_vision_description'); ?>
                </p>
            </article>
            <figure>
                <img src="<?php the_field('our_vision_image'); ?>" alt="our vision">
            </figure>
        </section>

        <section class="principals-statement" id="principals-statement">
            
            <article class="">
                <h2 class="section-heading">Principals Statement</h2>
                <p><?php the_field('principals_statement'); ?></p>
            </article>
        </section>

        <section class="faculty-and-staff ltr-flex" id="faculty-and-staff">
            <figure>
                <img src="<?php the_field('faculty_and_staff_image'); ?>" alt="faculty and staff">
            </figure>
            <article>
                <h2 class="section-heading"><?php the_field('faculty_and_staff_title'); ?></h2>
                <p>
                <?php the_field('faculty_and_staff_description'); ?>
                </p>
            </article>
        </section>

        <section class="school-policies rtl-flex" id="school-policies">
        <article>
                <h2 class="section-heading"><?php the_field('school_policies'); ?></h2>
                <p>
                <?php the_field('school_policies_description'); ?>
                </p>
            </article>
            <figure>
                <img src="<?php the_field('school_policies_image'); ?>" alt="amakwa students">
            </figure>
        </section>

    </div>
</main>

<?php get_footer(); ?>