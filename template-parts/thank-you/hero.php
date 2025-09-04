<?php
/**
 * Template part for displaying the Thank You Hero section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .thank-you-page section.footer-banner{
        display: none;
    }
    .thank-you-hero-section {
        background-image: url("/wp-content/uploads/2025/09/email-bg.png"), linear-gradient(rgba(32, 32, 32, 0.22), rgba(32, 32, 32, 0.22)),
        linear-gradient(100deg, #A62274 14.66%, #1B4F9E 51.88%, #16A34A 100%);
        background-size: auto;
        background-position: right bottom;
        background-repeat: no-repeat;
    }

    .thank-you-hero-content {
        display: flex;
        justify-content: center;
        margin: 80px auto;
    }

    .thank-you-hero-text {
        max-width: 1074px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 46px;
    }

    .thank-you-hero-container {
        margin-top: 40px;
        overflow: visible;
    }

    .thank-you-text-header {
        display: flex;
        flex-direction: column;
        gap: 48px;
        padding-right: 0;
        text-align: center;
    }

    .thank-you-hero-title {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 56px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
    }

    .thank-you-hero-subtitle {
        color: #FFF;
        font-family: Roboto, sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 160%; /* 48px */
        letter-spacing: 0.6px;
    }

    .thank-you-hero-cards {
        width: 100%;
        max-width: 723px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }


    @media (max-width: 1400px) {
        .thank-you-hero-cards {
            padding-right: 30px;
        }
    }

    @media (max-width: 991px) {
        .thank-you-hero-cards {
            display: none;
        }

        .thank-you-hero-text.text-center.text-sm-start {
            max-width: 100%;
            align-items: center;
        }
    }

    @media (max-width: 767px) {
        .thank-you-hero-text {
            gap: 40px;
        }

        .thank-you-text-header {
            gap: 20px;
            padding-right: 0;
        }

        .thank-you-hero-title {
            font-size: 30px;
        }

        .thank-you-hero-subtitle {
            font-size: 18px;
        }

        .thank-you-hero-section a.content-cta {
            margin: 0 auto;
        }

        .thank-you-hero-section {
            background-image: linear-gradient(rgba(32, 32, 32, 0.22), rgba(32, 32, 32, 0.22)),
            linear-gradient(100deg, #A62274 14.66%, #1B4F9E 51.88%, #16A34A 100%);
            background-size: auto;
            background-position: right bottom;
            background-repeat: no-repeat;
        }
    }
</style>
<section class="hero-section thank-you-hero-section">
    <div class="section-container thank-you-hero-container">
        <div class="thank-you-hero-content">
            <div class="thank-you-hero-text text-center text-sm-start">
                <div class="thank-you-text-header">
                    <h1 class="thank-you-hero-title">
                        <strong>Thanks</strong> for getting <span class="green-text">in touch.</span>
                    </h1>
                    <p class="thank-you-hero-subtitle">
                        We’ll follow up soon.
                    </p>
                    <div class="cta-wrapper text-center">
                        <a href="/" class="content-cta lift-hover lift-hover-blue">
                            BACK TO HOMEPAGE
                            <span class="content-cta-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <rect width="36" height="37" rx="18" fill="#A62274"></rect>
                            <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z" fill="white"></path>
                        </svg>
                    </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
