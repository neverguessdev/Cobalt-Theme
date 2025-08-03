<?php
/**
 * Template part for displaying the Who are we section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .about-who-are-we-content {
        display: flex;
        justify-content: space-between;
        padding-right: 30px;
    }

    .about-who-are-we-content .text-side {
        /* max-width: 673px; */
    }

    .about-who-are-we-content > * {
        width: 50%;
    }

    .about-who-are-we-content .text-side .section-title {
        margin-bottom: 30px;
    }

    .about-who-are-we-content p {
        margin-bottom: 20px;
        color: #202020;
        font-family: Roboto, sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 26px; /* 144.444% */
        letter-spacing: 0.36px;
    }

    .about-who-are-we-content > .image-side {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-who-are-we-content > .image-side img {
        max-width: 100%;
    }

    section.about-who-are-we-section {
    }

    section.about-who-are-we-section .section-pretitle-line {
        margin-bottom: 83px;
    }

    .about-who-are-we-content .tricolor-card-blue {
        background: #CADCFB;
    }

    .about-who-are-we-content .tricolor-card-green {
        background: #FCE4F3;
    }

    @media (max-width: 1400px) {
        .about-who-are-we-content .text-side {
            padding-right: 40px;
        }

    }

    @media (max-width: 991px) {
        .about-who-are-we-content .text-side {
            padding-right: 0;
        }

        .about-who-are-we-content {
            flex-direction: column;
            padding: 0;
        }

        .about-who-are-we-content > * {
            width: 100%;
        }

        section.about-who-are-we-section .section-pretitle-line {
            margin-bottom: 24px;
        }

        .about-who-are-we-content > .image-side {
            margin: 0 auto;
        }
    }

    @media (max-width: 767px) {


        .about-who-are-we-content > .image-side {
            transform: scale(0.85);
        }
    }
</style>
<section class="about-who-are-we-section">
    <div class="section-container about-who-are-we-container">
        <span class="section-pretitle-line">
            <p class="section-pretitle">Who we are</p>
        </span>
        <div class="about-who-are-we-content">
            <div class="text-side">
                <h2 class="section-title"><span class="purple-text">Your partners</span> in high-impact <span
                            class="purple-text">leadership search</span></h2>
                <p>We’re a team of search professionals who believe EQ is just as important as expertise. We know from
                    experience that a thoughtful process leads to better hires, better teams, and better business
                    outcomes.</p>
                <p>We’re proud to say that 100% of our growth has come through referrals from clients and candidates
                    alike. Not because we’ve shouted the loudest, but because we’ve listened harder and worked
                    smarter.</p>
                <p>This is leadership search led by people who take the time to understand your world and stay close
                    through every step of the search. This is Cobalt.</p>
            </div>
            <div class="image-side tricolor-card-stack">
                <div class="tricolor-card-blue lift-hover"></div>
                <div class="tricolor-card-green lift-hover"></div>
                <img src="/wp-content/uploads/2025/08/who-are-we.png" alt="Who we are" class="who-we-are-image tricolor-card lift-hover">
            </div>
        </div>
    </div>
</section>
