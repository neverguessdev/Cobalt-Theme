<?php
/**
 * Template part for displaying the About Hero section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .about-hero-section {
        background: url('/wp-content/uploads/2025/09/about-hero.png') no-repeat center center;
        background-size: cover;
    }

    .about-hero-content {
        display: flex;
    }

    .about-hero-text {
        max-width: 717px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 46px;
    }

    .about-hero-container {
        margin-top: 40px;
        overflow: visible;
    }

    .about-text-header {
        display: flex;
        flex-direction: column;
        gap: 48px;
        padding-right: 30px;
    }

    .about-hero-title {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 56px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
    }

    .about-hero-subtitle {
        color: #FFF;
        font-family: Roboto, sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 160%; /* 48px */
        letter-spacing: 0.6px;
    }

    .about-hero-cards {
        width: 100%;
        max-width: 723px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .tricolor-card-stack {
        position: relative;
        width: 100%;
        max-width: 558px;
    }

    .tricolor-card {
        border-radius: 30px;
        background: #A62274;
        width: 100%;
        position: relative;
        margin-top: 15px;
        z-index: 3;
    }

    .tricolor-card-blue,
    .tricolor-card-green {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 30px;
    }

    .tricolor-card-blue {
        background: #1B4F9E;
        transform: rotate(-4deg) translate(26px, 14px);
        z-index: 2;
    }

    .tricolor-card-green {
        background: #16A34A;
        transform: rotate(2deg) translate(-32px, -7px);
        z-index: 1;
    }

    .tricolor-card-blue.lift-hover:hover {
        transform: rotate(-5deg) translate(26px, 10px);
    }

    .tricolor-card-green.lift-hover:hover {
        transform: rotate(3deg) translate(-32px, -11px);
    }

    .tricolor-header,
    .tricolor-list {
        position: relative;
        z-index: 10;
    }

    .tricolor-header {
        color: #FFF;
        font-family: Roboto;
        font-size: 28px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 33.6px */
        padding: 30px;
        border-bottom: 1px solid #fff;
    }

    .tricolor-list {
        padding: 28px 30px 47px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .tricolor-list li {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .tricolor-icon {
        background: #fff;
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tricolor-icon-text p:first-child {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 4px;
    }

    .tricolor-icon-text p:last-child {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    @media (max-width: 1400px) {
        .about-hero-cards {
            padding-right: 30px;
        }
    }

    @media (max-width: 991px) {
        .about-hero-cards {
            display: none;
        }
        .about-hero-text.text-center.text-sm-start {
            max-width: 100%;
            align-items: center;
        }
    }

    @media (max-width: 767px) {
        .about-hero-text {
            gap: 40px;
        }

        .about-text-header {
            gap: 20px;
            padding-right: 0;
        }

        .about-hero-title {
            font-size: 30px;
        }

        .about-hero-subtitle {
            font-size: 18px;
        }

        .about-hero-section a.content-cta {
            margin: 0 auto;
        }
    }
</style>
<?php
/**
 * Template part for displaying the hero section
 *
 * @package Cobalt Theme
 */
?>
<section class="hero-section about-hero-section">
    <div class="section-container about-hero-container">
        <div class="hero-content">
            <div class="about-hero-text text-center text-sm-start">
                <div class="about-text-header">
                    <h1 class="about-hero-title">
                        <span class="green-text">Hiring for impact</span> starts with <span
                                class="white-text">who’s by</span><span class="green-text"> your side</span>
                    </h1>
                    <p class="about-hero-subtitle">
                        Cobalt was built to do search better. We listen deeper, work smarter, and deliver outstanding
                        leadership that lasts.
                    </p>
                </div>
            </div>
            <div class="hero-cta">
                <a href="/contact-us" class="content-cta lift-hover lift-hover-blue">
                    TALK TO THE TEAM
                    <span class="content-cta-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <rect width="36" height="37" rx="18" fill="#A62274"/>
                            <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z" fill="white"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

