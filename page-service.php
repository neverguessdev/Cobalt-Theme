<?php
/*
Template Name: Services Page
*/
get_header(); ?>
<main class="service-page">
    <?php get_template_part('template-parts/services/hero'); ?>
    <?php get_template_part('template-parts/services/leadership'); ?>
    <?php get_template_part('template-parts/services/hiring-journey'); ?>
    <?php get_template_part('template-parts/services/how-we-work'); ?>
    <?php get_template_part('template-parts/services/process'); ?>
    <?php get_template_part('template-parts/about/testimonials'); ?>
    <?php get_template_part('template-parts/about/contract-winning'); ?>
    <?php get_template_part('template-parts/about/outcome'); ?>
</main>
<?php get_footer(); ?>
