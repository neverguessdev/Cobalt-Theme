<?php
/**
 * Template part for displaying the meet cobalt section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .about-meet-cobalt-section {
        background-image: url("/wp-content/uploads/2025/08/pink-magni-2.png"), url("/wp-content/uploads/2025/08/pink-magni-small-2.png");
        background-position: top right, bottom left;
        background-repeat: no-repeat;
        background-color: #FCE4F3;
        padding: 80px 20px 50px;
    }

    .section-container.about-meet-cobalt-container {
        text-align: center;
    }

    .about-meet-cobalt-section .section-header {
        text-align: center;
        max-width: 760px;
        margin: 0 auto;
    }

    .about-meet-cobalt-section .section-pretitle {
        background: transparent;
        padding: 0;
        margin-bottom: 10px;
    }

    .about-meet-cobalt-section .section-title {
        max-width: 654px;
        margin: 0 auto 20px;
    }

    .about-meet-cobalt-section .section-subtext {
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
    .about-meet-cobalt-section.purple-theme {
        background-color: #FCE4F3 !important;
        background-image: url("/wp-content/uploads/2025/08/pink-magni-2.png"), url("/wp-content/uploads/2025/08/pink-magni-small-2.png") !important;
    }

    .about-meet-cobalt-section.blue-theme {
        background-color: #CADCFB !important;
        background-image: url("/wp-content/uploads/2025/08/blue-magni-2.png"), url("/wp-content/uploads/2025/08/blue-magni-small-2.png") !important;
    }

    .about-meet-cobalt-section.green-theme {
        background-color: #E6FEE3 !important;
        background-image: url("/wp-content/uploads/2025/08/green-magni-2.png"), url("/wp-content/uploads/2025/08/green-magni-small-2.png") !important;
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

    /* Desktop layout */
    @media (min-width: 991px) {
        .mc-cards-grid {
            grid-template-columns: repeat(3, 1fr);
            grid-template-areas:
                "card1 card2 card3"
                "card4 card5 card5";
        }

        .mc-card:nth-child(1) {
            grid-area: card1;
        }

        .mc-card:nth-child(2) {
            grid-area: card2;
        }

        .mc-card:nth-child(3) {
            grid-area: card3;
        }

        .mc-card:nth-child(4) {
            grid-area: card4;
        }

        .mc-card:nth-child(5) {
            grid-area: card5;
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
            grid-area: unset;
        }
    }

    @media (max-width: 767px) {

        .about-meet-cobalt-section {
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
    }
</style>
<section class="about-meet-cobalt-section">
    <div class="section-container about-meet-cobalt-container">
        <div class="section-header">
            <h2 class="section-pretitle">Meet Cobalt</h2>
            <h2 class="section-title"><strong>Boutique</strong> by design. <strong>High-touch</strong> by nature.</h2>
            <p class="section-subtext">We don’t stop at “good enough.” What makes us different isn’t a set of values,
                it’s how those values show up when the stakes are high, the brief is complex, and the outcome really
                matters.</p>
        </div>
        <div class="mc-cards-grid">
            <div class="mc-card purple">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        01
                    </p>
                    <p class="mc-card-title">
                        You’ll never need to chase us
                    </p>
                </div>
                <p class="mc-card-body">
                    We lead every step - communicating clearly, moving fast, and staying close through the entire
                    process
                </p>
            </div>
            <div class="mc-card blue">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        02
                    </p>
                    <p class="mc-card-title">
                        Your brief won’t gather dust
                    </p>
                </div>
                <p class="mc-card-body">
                    We act quickly, challenge assumptions thoughtfully, and refine the spec so you get exactly what you
                    need.
                </p>
            </div>
            <div class="mc-card green">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        03
                    </p>
                    <p class="mc-card-title">
                        No shortcuts. No handoffs.
                    </p>
                </div>
                <p class="mc-card-body">
                    You work with senior consultants who know your business and care about your outcome.
                </p>
            </div>
            <div class="mc-card purple">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        04
                    </p>
                    <p class="mc-card-title">
                        The candidate experience reflects your brand
                    </p>
                </div>
                <p class="mc-card-body">
                    We treat candidates with care and clarity, so you land the right one and build a stronger reputation
                    along the way.
                </p>
            </div>
            <div class="mc-card blue">
                <div class="mc-card-header">
                    <p class="mc-card-number">
                        05
                    </p>
                    <p class="mc-card-title">
                        Every search is built around you
                    </p>
                </div>
                <p class="mc-card-body">
                    From benchmarking to assessment strategy, it’s tailored to your culture, role requirements, and
                    business goals. Not a set of “cookie cutter” strategies.
                </p>
            </div>
        </div>
        <a href="/contact-us" class="content-cta cta-purple lift-hover">
            LET'S FIND YOUR LEADER
            <span class="content-cta-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <rect width="36" height="37" rx="18" fill="#FFFFFF"></rect>
                            <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                  fill="#3FA635"></path>
                        </svg>
                    </span>
        </a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mcCards = document.querySelectorAll('.mc-card');
    const section = document.querySelector('.about-meet-cobalt-section');
    const ctaButton = document.querySelector('.about-meet-cobalt-section .content-cta');

    mcCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            // Remove all theme classes
            section.classList.remove('purple-theme', 'blue-theme', 'green-theme');
            ctaButton.classList.remove('cta-purple', 'cta-blue', 'cta-green');

            // Add appropriate theme class based on card color
            if (card.classList.contains('purple')) {
                section.classList.add('purple-theme');
                ctaButton.classList.add('cta-purple');
            } else if (card.classList.contains('blue')) {
                section.classList.add('blue-theme');
                ctaButton.classList.add('cta-blue');
            } else if (card.classList.contains('green')) {
                section.classList.add('green-theme');
                ctaButton.classList.add('cta-green');
            }
        });

        card.addEventListener('mouseleave', function() {
            // Remove all theme classes when not hovering
            section.classList.remove('purple-theme', 'blue-theme', 'green-theme');
            ctaButton.classList.remove('cta-purple', 'cta-blue', 'cta-green');
            ctaButton.classList.add('cta-purple');
        });
    });
});
</script>
