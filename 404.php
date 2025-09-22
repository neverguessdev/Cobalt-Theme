<?php get_header(); ?>
<style>
    .p404-hero-section {
        background-image: linear-gradient(rgba(32, 32, 32, 0.22), rgba(32, 32, 32, 0.22)),
        linear-gradient(100deg, #A62274 14.66%, #1B4F9E 51.88%, #16A34A 100%);
        background-size: auto;
        background-position: right bottom;
        background-repeat: no-repeat;
        padding-top: 220px;
        padding-bottom: 200px;
    }
    .p404-hero-section h2 {
        font-weight: 600;
        font-size: 50px;
    }

    .p404-hero-section p {
        font-size: 35px;
        margin-top: 8px;
    }
    @media (max-width: 767px){
        .p404-hero-section h2 {
        font-size: 30px;
    }

        .p404-hero-section p {
            font-size: 22px;
        }
    }
</style>
<main>
    <section class="hero-section p404-hero-section text-center">
        <h2>404 - Page Not Found</h2>
        <p>Sorry, the page you are looking for does not exist.</p>
    </section>
</main>
<?php get_footer(); ?>

