<?php
/**
 * Template part for displaying the Trusted Companies section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .company-item {
        /* background: #FFF; */
        /* padding: 30px 20px; */
        /* border-radius: 15px; */
        /* text-align: center; */
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
        /* min-height: 300px; */
        display: flex;
        flex-direction: column;
        flex: 1 1;
        justify-content: center;
    }

    .company-item img {
        /* width: 120px; */
        /* height: 120px; */
        /* border-radius: 50%; */
        object-fit: cover;
        /*margin: 0 auto 42px;*/
        width: 100%;
    }

    .trusted-companies .section-title {
        max-width: 582px;
        margin: 0 auto;
    }

    /* Desktop and Tablet - Slider Layout */
    @media (min-width: 768px) {
        .trusted-companies .section-container {
            overflow: hidden;
        }

        .companies-container {
            display: flex;
            transition: transform 0.3s ease;
            width: 200%; /* Total width for 6 slides showing 3 at a time (6/3 * 100%) */
            margin-top: 56px;
            gap: 80px;
        }

        .company-slider-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 40px;
            padding: 0 4px 4px 0;
        }

        .trusted-companies .slider-nav-divider {
            background: rgba(32, 32, 32, 0.10);
        }

        .trusted-companies .slider-arrows-container {
            box-shadow: 0 0px 6px rgba(0, 0, 0, 0.1);
        }
    }

    /* Mobile - Slider Layout */
    @media (max-width: 767px) {
        .trusted-companies {
            background-image: none;
            padding: 20px 20px;
        }

        .trusted-companies .section-container {
            overflow: hidden;
            padding: 0;
        }

        .trusted-companies .section-subtext {
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 26px;
        }

        .companies-container {
            display: flex;
            transition: transform 0.3s ease;
            width: 600%; /* Total width for 6 slides */
            margin-top: 30px;
            gap: 30px;
        }

        .company-item {
            flex: 0 0 calc(10% - 30px); /* Each slide takes 16.67% (1/6) minus gap adjustment */
            margin: 0 !important;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .company-slider-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0;
            margin-top: 30px;
            padding: 0 20px 4px 20px;
            position: relative;
        }

        .trusted-companies .slider-nav-divider {
            flex: 1;
            height: 1px;
            background: rgba(32, 32, 32, 0.10);
            margin-right: 25px;
        }
    }
</style>
<section class="trusted-companies">
    <div class="section-container">

        <h2 class="section-title text-center">Trusted by growing companies <span class="purple-text">worldwide</span></h2>

        <div class="companies-container" data-slider="companies">
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/Keolis-Canada.png" class="lift-hover" alt="Keolis-Canada">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/Vitrum.png" class="lift-hover" alt="Vitrum">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/EEaston.png" class="lift-hover" alt="Easton">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/Rasakti.png" class="lift-hover" alt="Rasakti">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/SCRRA.png" class="lift-hover" alt="SCRRA">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/Blantons.png" class="lift-hover" alt="Blantons">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/PHL.png" class="lift-hover" alt="PHL">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/THL.png" class="lift-hover" alt="THL">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/911-Logo.png" class="lift-hover" alt="911-Logo">
            </div>
            <div class="company-item">
                <img src="/wp-content/uploads/2025/08/KAD-Logo.png" class="lift-hover" alt="KAD-Logo">
            </div>
        </div>

        <!-- Mobile Slider Navigation -->
        <div class="company-slider-nav">
            <div class="slider-nav-divider"></div>
            <div class="slider-arrows-container">
                <button class="slider-arrow slider-prev" data-slider-target="companies">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M7.61351 0.90127L8.5484 1.82823L3.03416 7.33456L16.8198 7.33456L16.8198 8.66558L3.03416 8.66558L8.5484 14.1719L7.61352 15.0989L0.514717 8.00007L7.61351 0.90127Z"
                              fill="black"/>
                    </svg>
                </button>
                <button class="slider-arrow slider-next" data-slider-target="companies">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M9.38648 15.0987L8.4516 14.1718L13.9658 8.66544L0.18023 8.66544L0.18023 7.33442L13.9658 7.33442L8.4516 1.8281L9.38648 0.901133L16.4853 7.99993L9.38648 15.0987Z"
                              fill="black"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
