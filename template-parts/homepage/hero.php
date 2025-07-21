<?php
/**
 * Template part for displaying the hero section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .hero-section {
        background: url('/wp-content/uploads/2025/07/home-hero-bg-min.png') no-repeat center center;
        background-size: cover;
        color: #fff;
        padding: 60px 20px;
        margin-top: -109px;
        padding-top: 109px;
    }
    .hero-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        padding: 64px 0;
        margin-top: 40px;
    }
    .hero-text {
        flex: 1;
        max-width: 796px;
    }
    .hero-text h1 {
        color: #FFF;
        font-family: "Lexend Deca";
        font-size: 56px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%; /* 67.2px */
        margin-bottom: 40px;
    }
    .hero-text h1 .green-text {
        color: #3FA635;
        font-weight: 700;
    }
    .hero-text h1 .purple-text {
        color: #A62274;
        font-weight: 700;
    }

    .hero-subtitle {
        color: #FFF;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 500;
        line-height: 160%; /* 51.2px */
        letter-spacing: 0.64px;
    }
    @media (max-width: 991px){
        .hero-content {
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 0;
        }
    }
    @media (max-width: 768px) {
        .hero-text h1 {
            font-size: 34px;
            line-height: 120%; /* 43.2px */
            text-align: center;
        }
        .hero-subtitle {
            font-size: 20px;
            line-height: 160%; /* 38.4px */
            text-align: center;
        }
    }
</style>
<section class="hero-section">
    <div class="section-container hero-container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    One leadership hire can <span class="green-text">change everything.</span> We make sure it’s <span class="purple-text">the right one.</span>
                </h1>
                <p class="hero-subtitle">
                    Find outstanding leaders who will take your business further, with Cobalt Search.
                </p>
            </div>
            <div class="hero-cta">
                <a href="#" class="content-cta lift-hover lift-hover-blue">
                    FIND YOUR NEXT LEADER
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
