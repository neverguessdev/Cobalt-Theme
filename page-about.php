<?php
/*
Template Name: About Us Page
*/
get_header(); ?>
<main class="about-page">
    <?php get_template_part('template-parts/about/hero'); ?>
    <?php get_template_part('template-parts/about/reviews'); ?>
    <?php get_template_part('template-parts/about/meet-cobalt'); ?>
    <?php get_template_part('template-parts/about/who-are-we'); ?>
    <?php get_template_part('template-parts/about/meet-the-team'); ?>
    <?php get_template_part('template-parts/about/testimonials'); ?>
    <?php get_template_part('template-parts/about/contract-winning'); ?>
    <?php get_template_part('template-parts/about/outcome'); ?>
</main>
<?php get_footer(); ?>
