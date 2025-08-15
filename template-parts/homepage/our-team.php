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

    /* Desktop and Tablet - Slider Layout */
    @media (min-width: 768px) {
        .our-team .section-container {
            overflow: hidden;
        }

        .teams-container {
            display: flex;
            transition: transform 0.3s ease;
            width: 200%; /* Total width for 6 slides showing 3 at a time (6/3 * 100%) */
            margin-top: 56px;
            gap: 30px;
        }

        .teams-item {
            flex: 0 0 calc(16.67% - 25px); /* Each slide takes 16.67% (1/6) minus gap adjustment */
            margin: 0;
            box-sizing: border-box;
        }

        .team-slider-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 40px;
        }

        .our-team .slider-nav-divider {
            background: rgba(32, 32, 32, 0.10);
        }

        .our-team .slider-arrows-container {
            box-shadow: 0 0px 6px rgba(0, 0, 0, 0.1);
        }
    }

    /* Mobile - Slider Layout */
    @media (max-width: 767px) {
        .our-team {
            background-image: none;
            padding: 20px 20px;
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
            width: 600%; /* Total width for 6 slides */
            margin-top: 30px;
            gap: 30px;
        }

        .teams-item {
            flex: 0 0 calc(16.67% - 25px); /* Each slide takes 16.67% (1/6) minus gap adjustment */
            margin: 0 !important;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .team-slider-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0;
            margin-top: 30px;
            padding: 0 20px;
            position: relative;
        }

        .our-team .slider-nav-divider {
             flex: 1;
             height: 1px;
             background: rgba(32, 32, 32, 0.10);
             margin-right: 25px;
         }
    }
</style>
<section class="our-team">
    <div class="section-container">
        <span class="section-pretitle-line">
            <h2 class="section-pretitle">Our Team</h2>
        </span>
        <h2 class="section-title">Meet the <span class="purple-text">people</span> behind <span class="purple-text">every great hire</span></h2>
        <p class="section-subtext">At Cobalt Search, we’re a close-knit, women-led consultancy who act as a true extension of your team.
            We build strong, trusted relationships with our clients and candidates alike.  Because, like you, we know that great leadership hires are made through deep understanding, not fast transactions.
            You’ll work directly with experienced consultants who bring insight, empathy, and honest partnership to every search. So you don’t just fill a role. You hire A-player leadership who’ll elevate your mission, culture and business growth.
        </p>
        <div class="teams-container" data-slider="teams">
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/08/helen.png" class="lift-hover" alt="Helen Goddard">
                <p class="teams-author">Helen Goddard</p>
                <p class="teams-position">Founder & CEO</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/08/denise.png" class="lift-hover" alt="Denise Pike">
                <p class="teams-author">Denise Pike</p>
                <p class="teams-position">Vice President</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/08/rebecca.png" class="lift-hover" alt="Rebecca Greenhill">
                <p class="teams-author">Rebecca Greenhill</p>
                <p class="teams-position">Executive Assistant</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/08/sarah.png" class="lift-hover" alt="Sarah Hearn">
                <p class="teams-author">Sarah Hearn</p>
                <p class="teams-position">Operations & Client Excellence Manager</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/08/steve.png" class="lift-hover" alt="Steve Broadley">
                <p class="teams-author">Steve Broadley</p>
                <p class="teams-position">Researcher</p>
            </div>
            <div class="teams-item">
                <img src="/wp-content/uploads/2025/08/annabel.png" class="lift-hover" alt="Annabel Hudson">
                <p class="teams-author">Annabel Hudson</p>
                <p class="teams-position">Trainee Headhunter</p>
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
