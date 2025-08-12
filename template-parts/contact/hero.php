<?php
/**
 * Template part for displaying the contact Hero section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .contact-page section.footer-banner{
        display: none;
    }
    .contact-hero-section {
        background: linear-gradient(rgba(32, 32, 32, 0.22), rgba(32, 32, 32, 0.22)),
        linear-gradient(100deg, #A62274 14.66%, #1B4F9E 51.88%, #16A34A 100%);
    }

    .contact-hero-content {
        display: flex;
        justify-content: center;
    }

    .contact-hero-text {
        max-width: 1074px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 46px;
    }

    .contact-hero-container {
        margin-top: 40px;
        overflow: visible;
    }

    .contact-text-header {
        display: flex;
        flex-direction: column;
        gap: 48px;
        padding-right: 0;
        text-align: center;
    }

    .contact-hero-title {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 56px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
    }

    .contact-hero-subtitle {
        color: #FFF;
        font-family: Roboto, sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 160%; /* 48px */
        letter-spacing: 0.6px;
    }

    .contact-hero-cards {
        width: 100%;
        max-width: 723px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }


    @media (max-width: 1400px) {
        .contact-hero-cards {
            padding-right: 30px;
        }
    }

    @media (max-width: 991px) {
        .contact-hero-cards {
            display: none;
        }

        .contact-hero-text.text-center.text-sm-start {
            max-width: 100%;
            align-items: center;
        }
    }

    @media (max-width: 767px) {
        .contact-hero-text {
            gap: 40px;
        }

        .contact-text-header {
            gap: 20px;
            padding-right: 0;
        }

        .contact-hero-title {
            font-size: 30px;
        }

        .contact-hero-subtitle {
            font-size: 18px;
        }

        .contact-hero-section a.content-cta {
            margin: 0 auto;
        }
    }
</style>
<section class="hero-section contact-hero-section">
    <div class="section-container contact-hero-container">
        <div class="contact-hero-content">
            <div class="contact-hero-text text-center text-sm-start">
                <div class="contact-text-header">
                    <h1 class="contact-hero-title">
                        <strong>Get</strong> in <span class="green-text">touch</span> with us
                    </h1>
                    <p class="contact-hero-subtitle">
                        Have questions about our services or ready to start your leadership search? Our team is here to help you find exceptional talent.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
