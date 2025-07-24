<?php
/**
 * Template part for displaying the our team section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .our-team {
        padding: 60px 20px;
        background-image: url("/wp-content/uploads/2025/07/wave-bg-2-min.png");
        background-size: cover;
    }

    .our-team .section-title {
        margin-bottom: 32px;
    }

    .teams-item {
        /* background: #FFF; */
        /* padding: 30px 20px; */
        /* border-radius: 15px; */
        /* text-align: center; */
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
        /* min-height: 300px; */
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .teams-item img {
        /* width: 120px; */
        /* height: 120px; */
        /* border-radius: 50%; */
        object-fit: cover;
        margin: 0 auto 42px;
        width: 100%;
    }

    .teams-author, .team-author {
        color: #202020;
        font-family: "Bonheur Royale",sans-serif;
        font-size: 42px;
        font-style: normal;
        font-weight: 400;
        line-height: 160%; /* 67.2px */
    }

    .teams-position, .team-position {
        margin-bottom: 0;
        color: #3C3C3B;
        font-family: Roboto,sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 28.8px */
    }

    /* Desktop and Tablet - 3 Column Layout */
    @media (min-width: 768px) {
        .teams-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 0 20px;
            margin-top: 56px;
        }

        .teams-item {
            margin: 0;
        }

        .team-slider-nav {
            display: none;
        }
    }

    /* Mobile - Slider Layout */
    @media (max-width: 767px) {

        .our-team {
            background-image: none;
        }
        .our-team .section-container {
            overflow: hidden;
            padding: 0;
        }

        .our-team .section-subtext {
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 26px;
        }

        .teams-container {
            display: flex;
            transition: transform 0.3s ease;
            width: 300%; /* Total width for 3 slides */
            margin-top: 30px;
        }

        .teams-item {
            flex: 0 0 33.333%; /* Each slide takes 1/3 of the 300% container */
            margin: 0 !important;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .team-slider-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0;
            margin-top: 0;
            padding: 3px 20px;
            position: relative;
        }

        .our-team .slider-nav-divider {
             flex: 1;
             height: 1px;
             background: rgba(32, 32, 32, 0.10);
             margin-right: 25px;
         }
/*


        .slider-arrows-container {
            display: flex;
            gap: 0;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            flex-shrink: 0;
        }

        .slider-arrow {
            background: #fff;
            border: none;
            width: 50px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 0;
            transition: all 0.3s ease;
            border-radius: 0;
        }

        .slider-arrow.slider-prev {
            background: #fff;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .slider-arrow.slider-next {
            background: #F4F8FF;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
        }

        .slider-arrow:hover {
            opacity: 0.8;
        }

        .slider-arrow:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .slider-arrow svg {
            width: 17px;
            height: 16px;
        }*/
    }
</style>
<section class="our-team">
    <div class="section-container">
        <span class="section-pretitle-line">
            <h2 class="section-pretitle">Our Team</h2>
        </span>
        <h2 class="section-title">Meet the <span class="purple-text">people</span> behind every great hire</h2>
        <p class="section-subtext">At Cobalt Search, we're a close-knit, women-led consultancy who act as a true
            extension of your team. We build strong, trusted relationships with our clients and candidates alike.
            Because, like you, we know that great leadership hires are made through deep understanding, not fast
            transactions.</p>
        <div class="teams-container" data-slider="teams">
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/07/team-1-min.png" class="lift-hover" alt="Helen Goddard">
                <p class="teams-author">Helen Goddard</p>
                <p class="teams-position">Founder & CEO</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/07/team-2-min.png" class="lift-hover" alt="Denise Pike">
                <p class="teams-author">Denise Pike</p>
                <p class="teams-position">Managing Director</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/07/team-3-min.png" class="lift-hover" alt="Helen Goddard">
                <p class="teams-author">Helen Goddard</p>
                <p class="teams-position">Head of Business Development</p>
            </div>
        </div>

        <!-- Mobile Slider Navigation -->
        <div class="team-slider-nav">
            <div class="slider-nav-divider"></div>
            <div class="slider-arrows-container">
                <button class="slider-arrow slider-prev" data-slider-target="teams">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M7.61351 0.90127L8.5484 1.82823L3.03416 7.33456L16.8198 7.33456L16.8198 8.66558L3.03416 8.66558L8.5484 14.1719L7.61352 15.0989L0.514717 8.00007L7.61351 0.90127Z"
                              fill="black"/>
                    </svg>
                </button>
                <button class="slider-arrow slider-next" data-slider-target="teams">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M9.38648 15.0987L8.4516 14.1718L13.9658 8.66544L0.18023 8.66544L0.18023 7.33442L13.9658 7.33442L8.4516 1.8281L9.38648 0.901133L16.4853 7.99993L9.38648 15.0987Z"
                              fill="black"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
