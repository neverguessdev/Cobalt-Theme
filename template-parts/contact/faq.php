<?php
/**
 * Template part for displaying the meet cobalt section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .contact-faq-section {
        background-image: url("/wp-content/uploads/2025/08/blue-magni-2.png"), url("/wp-content/uploads/2025/08/blue-magni-small-2.png"), url("/wp-content/uploads/2025/08/blue-magni-2.png");
        background-position: top right, center left, bottom -350px right;
        background-repeat: no-repeat;
        background-color: #CADCFB;
        padding: 80px 20px 50px;
    }

    .section-container.contact-faq-container {
        text-align: center;
    }

    .contact-faq-section .section-header {
        text-align: center;
        max-width: 760px;
        margin: 0 auto;
    }

    .contact-faq-section .section-pretitle {
        background: transparent;
        padding: 0;
        margin-bottom: 10px;
    }

    .contact-faq-section .section-title {
        max-width: 654px;
        margin: 0 auto 20px;
    }

    .contact-faq-section .section-subtext {
        letter-spacing: normal;
    }

    .mc-cards-grid {
        margin: 70px auto 50px;
        display: grid;
        gap: 30px;
    }

    .mc-card {
        border-radius: 18.998px;
        background: #FFFFFF;
        box-shadow: 0 5.699px 9.499px 0 rgba(204, 204, 204, 0.25);
        transition: all 0.3s ease;
    }

    .mc-card-header {
        padding: 30px 40px 20px 30px;
        border-bottom: 1px solid #202020;
        display: flex;
        align-items: flex-start;
        gap: 20px;
        height: 119px;
    }

    .mc-card-header > p {
        color: #202020;
        font-family: Roboto, sans-serif;
        font-size: 28px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-align: left;
    }

    .mc-card-body {
        padding: 20px 30px 30px;
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%;
        text-align: left;
    }

    .mc-card:hover {
        background: #A62274;
    }

    .mc-card:hover .mc-card-header {
        border-bottom: 1px solid #ffffff;
    }

    .mc-card:hover .mc-card-header > p, .mc-card:hover .mc-card-body {
        color: #ffffff;
    }

    /* Purple card hover effects */
    .mc-card.purple:hover ~ .content-cta {
        background: #A62274;
    }

    .mc-card.purple:hover {
        background: #A62274;
    }

    /* Blue card hover effects */
    .mc-card.blue:hover {
        background: #1B4F9E;
    }

    .mc-card.blue:hover ~ .content-cta {
        background: #1B4F9E;
    }

    /* Green card hover effects */
    .mc-card.green:hover {
        background: #3FA635;
    }

    .mc-card.green:hover ~ .content-cta {
        background: #3FA635;
    }

    /* Section background changes on card hover */
    .contact-faq-section.purple-theme {
        background-color: #FCE4F3 !important;
        background-image: url("/wp-content/uploads/2025/08/pink-magni-2.png"), url("/wp-content/uploads/2025/08/pink-magni-small-2.png"), url("/wp-content/uploads/2025/08/pink-magni-2.png") !important;
    }

    .contact-faq-section.blue-theme {
        background-color: #CADCFB !important;
        background-image: url("/wp-content/uploads/2025/08/blue-magni-2.png"), url("/wp-content/uploads/2025/08/blue-magni-small-2.png"), url("/wp-content/uploads/2025/08/blue-magni-2.png") !important;
    }

    .contact-faq-section.green-theme {
        background-color: #E6FEE3 !important;
        background-image: url("/wp-content/uploads/2025/08/green-magni-2.png"), url("/wp-content/uploads/2025/08/green-magni-small-2.png"), url("/wp-content/uploads/2025/08/green-magni-2.png") !important;
    }

    /* CTA button theme changes */
    .content-cta.purple-cta {
        background: #A62274 !important;
    }

    .content-cta.blue-cta {
        background: #1B4F9E !important;
    }

    .content-cta.green-cta {
        background: #3FA635 !important;
    }

    .more-question-text {
        color: #1B4F9E;
        font-family: Roboto, sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%; /* 19.2px */
        letter-spacing: 0.32px;
        margin: 70px auto 40px;
    }

    /* Desktop layout */
    @media (min-width: 991px) {
        .mc-cards-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .mc-card {
            width: 100%;
        }

        .more-question-text {
            margin: 40px auto 40px;
        }
    }

    @media (max-width: 1455px) {
        .mc-card-header {
            height: auto;
        }

        .mc-card:last-child .mc-card-header {
            height: 119px;
        }
    }

    /* Mobile layout */
    @media (max-width: 991px) {
        .mc-card:last-child .mc-card-header {
            height: auto;
        }

        .mc-cards-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .mc-card {
            width: 100%;
        }
    }

    @media (max-width: 767px) {

        .contact-faq-section {
            padding: 40px 20px 40px;
        }

        .mc-cards-grid {
            margin: 30px auto 50px;
        }

        .mc-card-header > p {
            font-size: 20px;
        }

        .mc-card-body {
            font-size: 16px;
            padding: 20px 20px 30px;
        }

        .mc-card-header {
            padding: 30px 20px 20px 20px;
        }
        .contact-faq-section {
            background-image: url("/wp-content/uploads/2025/08/blue-magni-2.png");
            background-position: top right;
            background-size: 50%;
        }
        .contact-faq-section.purple-theme {
            background-color: #FCE4F3 !important;
            background-image: url("/wp-content/uploads/2025/08/pink-magni-2.png")
        }

        .contact-faq-section.blue-theme {
            background-color: #CADCFB !important;
            background-image: url("/wp-content/uploads/2025/08/blue-magni-2.png")
        }

        .contact-faq-section.green-theme {
            background-color: #E6FEE3 !important;
            background-image: url("/wp-content/uploads/2025/08/green-magni-2.png");
        }
    }
</style>
<section class="contact-faq-section">
    <div class="section-container contact-faq-container">
        <div class="section-header">
            <h2 class="section-pretitle"><span class="blue-text">Frequently Asked Questions</span></h2>
            <h2 class="section-title">Common <strong>Questions</strong></h2>
            <p class="section-subtext">Find answers to the most common questions about our recruitment services</p>
        </div>
        <div class="mc-cards-grid">
            <div class="mc-card blue">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        01
                    </p>
                    <p class="mc-card-title">
                        How long does the typical recruitment process take?
                    </p>
                </div>
                <p class="mc-card-body">
                    Our average time-to-hire is 2.5 months from initial consultation to offer acceptance. We focus on quality and fit rather than speed, ensuring the right leadership match for long-term success.
                </p>
            </div>
            <div class="mc-card purple">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        02
                    </p>
                    <p class="mc-card-title">
                        What industries do you specialize in?
                    </p>
                </div>
                <p class="mc-card-body">
                    We specialize in leadership recruitment across technology, finance, healthcare, manufacturing, and professional services industries. Our expertise spans both established companies and high-growth startups.
                </p>
            </div>
            <div class="mc-card green">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        03
                    </p>
                    <p class="mc-card-title">
                        What happens if a placement doesn't work out?
                    </p>
                </div>
                <p class="mc-card-body">
                    We offer a 90-day guarantee on all placements. If your new hire doesn't work out within this period, we'll conduct a replacement search at no additional cost to you.
                </p>
            </div>
            <div class="mc-card blue">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        04
                    </p>
                    <p class="mc-card-title">
                        Do you work with clients internationally?
                    </p>
                </div>
                <p class="mc-card-body">
                    Yes, we have experience placing leadership talent in 24 countries across North America, Europe, Asia, and Australia. Our global network allows us to find exceptional leaders regardless of location.
                </p>
            </div>
            <div class="mc-card purple">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        05
                    </p>
                    <p class="mc-card-title">
                        What makes your approach different from other recruiters?
                    </p>
                </div>
                <p class="mc-card-body">
                    We take a consultative, high-touch approach focused on long-term success. Our process includes deep cultural alignment assessment, comprehensive technical evaluation, and strategic onboarding support.
                </p>
            </div>
            <div class="mc-card green">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        06
                    </p>
                    <p class="mc-card-title">
                        What roles do you typically recruit for?
                    </p>
                </div>
                <p class="mc-card-body">
                    We specialize in C-suite and senior leadership roles including CEOs, CFOs, CTOs, COOs, VPs, and Directors across various business functions.
                </p>
            </div>
        </div>
        <p class="more-question-text">Still have questions? We're here to help.</p>
        <a href="#contact-form" class="content-cta lift-hover">
            SCHEDULE A CONSULTATION
            <span class="content-cta-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <rect width="36" height="37" rx="18" fill="#A62274"></rect>
                            <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                  fill="#FFFFFF"></path>
                        </svg>
                    </span>
        </a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mcCards = document.querySelectorAll('.mc-card');
        const section = document.querySelector('.contact-faq-section');
        const ctaButton = document.querySelector('.contact-faq-section .content-cta');

        mcCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                // Remove all theme classes
                section.classList.remove('purple-theme', 'blue-theme', 'green-theme');
                ctaButton.classList.remove('cta-purple', 'cta-blue', 'cta-green');

                // Add appropriate theme class based on card color
                if (card.classList.contains('purple')) {
                    section.classList.add('purple-theme');
                    // ctaButton.classList.add('cta-purple');
                } else if (card.classList.contains('blue')) {
                    section.classList.add('blue-theme');
                    // ctaButton.classList.add('cta-blue');
                } else if (card.classList.contains('green')) {
                    section.classList.add('green-theme');
                    // ctaButton.classList.add('cta-green');
                }
            });

            card.addEventListener('mouseleave', function() {
                // Remove all theme classes when not hovering
                section.classList.remove('purple-theme', 'blue-theme', 'green-theme');
                // ctaButton.classList.remove('cta-purple', 'cta-blue', 'cta-green');
                // ctaButton.classList.add('cta-purple');
            });
        });
    });
</script>
