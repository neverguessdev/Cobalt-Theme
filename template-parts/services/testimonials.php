<?php
/**
 * Template part for displaying the Testimonials section
 *
 * @package Cobalt Theme
 */
?>
<style>
    section.about-testimonials-section .section-pretitle-line {
        margin-bottom: 30px;
    }

    section.about-testimonials-section .section-title {
        margin-bottom: 20px;
    }

    .testimonial-slider-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0;
        margin-top: 20px;
        padding: 3px 20px;
        position: relative;
    }

    .testimonial-slider-nav .slider-nav-divider {
        flex: 1;
        height: 1px;
        background: rgba(32, 32, 32, 0.10);
        margin-right: 25px;
    }

    .testimonials-slider-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        margin-top: 66px;
    }

    .testimonials-cards-video {
        display: flex;
        transition: transform 0.3s ease;
        width: 300%; /* Total width for 3 slides */
        gap: 0;
        align-items: stretch;
    }

    .testimonial-card {
        flex: 0 0 33.333%; /* Each slide takes 1/3 of the 300% container */
        width: 33.333% !important;
        margin: 0 !important;
        padding: 0 15px;
        box-sizing: border-box;
        display: flex;
        gap: 40px;
        margin-top: 66px;
    }

    .testimonial-card .video-container {
        width: 100%;
        max-width: 601px;
        position: relative;
        border-radius: 19px;
        background: linear-gradient(180deg, rgba(32, 32, 32, 0.00) 29.33%, #202020 100%), url("/wp-content/uploads/2025/08/default-video.png");
        background-size: cover;
        background-position: top left;
        padding: 25px;
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        cursor: pointer;
    }

    .testimonial-card .uploader-info {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .testimonial-card svg.play-button {
        position: absolute;
        bottom: 50%;
        left: 50%;
        transform: translate(-50%, 50%);
    }

    .testimonial-card .testimonial-text {
        width: 100%;
        max-width: 799px;
        padding: 10px 0 20px 112px;
        position: relative;
    }

    .testimonial-card .testimonial-text svg {
        position: absolute;
        left: 0;
    }

    .uploader-name {
        color: #FFF;
        font-family: "Lexend Deca";
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 28.8px */
        margin-bottom: 4px;
    }

    .uploader-position {
        color: #FFF;
        font-family: "Lexend Deca";
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%; /* 19.2px */
    }

    .testimonial-quote {
        color: var(--Grey-2, #797979);
        font-family: "Lexend Deca";
        font-size: 30px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 48px */
        margin-bottom: 40px;
    }

    .testimonial-author {
        color: #202020;
        font-family: "Lexend Deca";
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 28.8px */
    }

    .testimonial-position {
        color: #202020;
        font-family: "Lexend Deca";
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%; /* 19.2px */
    }

    @media (max-width: 991px) {
        .testimonial-card {
            flex-direction: column;
            gap: 20px;
        }
    }

    /* Testimonial Text Slider Styles */
    .testimonial-text-slider-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        margin-top: 40px;
    }

    .testimonial-text-slider {
        display: flex;
        transition: transform 0.3s ease;
        width: 300%; /* Total width for 3 slides */
        gap: 0;
        align-items: stretch;
    }

    .testimonial-text-item {
        flex: 0 0 33.333%; /* Each slide takes 1/3 of the 300% container */
        width: 33.333% !important;
        margin: 0 !important;
        padding: 0 15px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .testimonial-text-item .text-content {
        padding: 30px;
        border-radius: 18px;
        background: #F8F8F8;
        border: 1px solid #E0E0E0;
    }

    .testimonial-text-item .text-content.blue {
        background: #DDE9FF;
    }

    .testimonial-text-item .text-content.green {
        background: #E6FEE3;
    }

    .testimonial-text-item .quote-text {
        color: #3C3C3B;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 32px */
        margin-bottom: 20px;
    }

    .testimonial-text-item .author-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .testimonial-text-item .author-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    .testimonial-text-item .author-name {
        color: #1B4F9E;
        font-family: "Lexend Deca";
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 28.8px */
    }

    .testimonial-text-item .green .author-name {
        color: #3FA635;
        font-family: "Lexend Deca";
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 28.8px */
    }

    .testimonial-text-item .author-position {
        color: #202020;
        font-family: "Lexend Deca";
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%; /* 19.2px */
    }

    .text-slider-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0;
        margin-top: 20px;
        padding: 3px 20px;
        position: relative;
    }

    .text-slider-nav .slider-nav-divider {
        flex: 1;
        height: 1px;
        background: rgba(32, 32, 32, 0.10);
        margin-right: 25px;
    }

    .text-content-container {
        display: flex;
        gap: 30px;
    }

    @media (max-width: 991px) {
        .testimonial-card .video-container {
            height: 315px;
            max-width: 100%;
            background: linear-gradient(180deg, rgba(32, 32, 32, 0.00) 29.33%, #202020 100%), url("/wp-content/uploads/2025/08/default-video.png");
            background-size: cover;
        }
    }

    @media (max-width: 767px) {
        .testimonials-slider-container {
            margin-top: 37px;
        }

        .uploader-name {
            font-size: 16px;
        }

        .uploader-position {
            font-size: 12px;
        }

        .testimonial-card .uploader-info .uploader-avatar {
            width: 40px;
        }

        .testimonial-card .testimonial-text {
            padding-left: 66px;
        }

        .testimonial-card .testimonial-text svg {
            transform: scale(0.5);
            left: -15px;
            top: 0;
        }

        .testimonial-quote {
            font-size: 20px;
            margin-bottom: 0;
        }

        .testimonial-author, .testimonial-position {
            display: none;
        }

        .text-content-container {
            flex-direction: column;
        }

        .testimonial-text-item .quote-text, .testimonial-text-item .author-name, .testimonial-text-item .green .author-name {
            font-size: 16px;
        }

        .testimonial-text-item .author-position {
            font-size: 12px;
        }

        .testimonial-slider-nav {
            margin-top: 0;
        }
    }
</style>
<section class="about-testimonials-section">
    <div class="section-container about-testimonials-container">
        <span class="section-pretitle-line">
            <h3 class="section-pretitle">Testimonials</h3>
        </span>
        <h3 class="section-title">Looking for <span class="purple-text">results worth shouting about?</span></h3>
        <p class="section-subtext">Most clients find us through someone they trust. We’re referred because we care, we
            deliver, and we don’t treat leadership search like a transaction.</p>

        <div class="testimonials-slider-container">
            <div class="testimonials-cards-video" data-slider="<!--testimonials-slider-->">
                <div class="testimonial-card">
                    <div class="video-container" data-video-url="https://youtu.be/4jxM1rDXhaE?si=RD6gd0evC9BuwnCv">
                        <svg class="play-button" xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                             viewBox="0 0 80 80" fill="none">
                            <g clip-path="url(#clip0_570_2100)">
                                <path d="M40.0001 0C17.9427 0 6.10352e-05 17.9444 6.10352e-05 40C6.10352e-05 62.0556 17.9427 80 40.0001 80C62.0574 80 80.0001 62.0556 80.0001 40C80.0001 17.9444 62.0574 0 40.0001 0ZM55.9018 41.4014L32.5685 56.4014C32.2951 56.5788 31.9793 56.6667 31.6668 56.6667C31.3933 56.6667 31.1166 56.5983 30.8693 56.4633C30.3321 56.1703 30.0001 55.6103 30.0001 55V25C30.0001 24.3897 30.3321 23.8297 30.8693 23.5367C31.3966 23.247 32.0574 23.2648 32.5685 23.5986L55.9018 38.5986C56.3771 38.9045 56.6668 39.4336 56.6668 40C56.6668 40.5664 56.3771 41.0953 55.9018 41.4014Z"
                                      fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_570_2100">
                                    <rect width="80" height="80" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="uploader-info">
                            <img src="/wp-content/uploads/2025/08/A.png" alt="K Avatar" class="uploader-avatar">
                            <div class="uploader-details">
                                <p class="uploader-name">Aline Frantzen</p>
                                <p class="uploader-position">CEO US Bus Operations, Keolis North America</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92" fill="none">
                            <g clip-path="url(#clip0_570_2108)">
                                <path d="M6.10352e-05 45.9999V85.4286H39.4287V45.9999H13.143C13.143 31.5063 24.9351 19.7142 39.4287 19.7142V6.57129C17.6864 6.57129 6.10352e-05 24.2577 6.10352e-05 45.9999Z"
                                      fill="#FEFAFD"/>
                                <path d="M91.999 19.7142V6.57129C70.2568 6.57129 52.5704 24.2577 52.5704 45.9999V85.4286H91.999V45.9999H65.7133C65.7133 31.5063 77.5054 19.7142 91.999 19.7142Z"
                                      fill="#FEFAFD"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_570_2108">
                                    <rect width="92" height="92" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="testimonial-quote">Cobalt has been extremely effective at delivering diverse
                            candidates, adding huge value to Keolis in North America and to our culture. Cobalt finds us
                            unicorns!</p>
                        <p class="testimonial-author">Aline Frantzen</p>
                        <p class="testimonial-position">CEO US Bus Operations, Keolis North America</p>
                    </div>
                </div>
                <!--
                                <div class="testimonial-card">
                                    <div class="video-container">
                                        <svg class="play-button" xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                             viewBox="0 0 80 80" fill="none">
                                            <g clip-path="url(#clip0_570_2100)">
                                                <path d="M40.0001 0C17.9427 0 6.10352e-05 17.9444 6.10352e-05 40C6.10352e-05 62.0556 17.9427 80 40.0001 80C62.0574 80 80.0001 62.0556 80.0001 40C80.0001 17.9444 62.0574 0 40.0001 0ZM55.9018 41.4014L32.5685 56.4014C32.2951 56.5788 31.9793 56.6667 31.6668 56.6667C31.3933 56.6667 31.1166 56.5983 30.8693 56.4633C30.3321 56.1703 30.0001 55.6103 30.0001 55V25C30.0001 24.3897 30.3321 23.8297 30.8693 23.5367C31.3966 23.247 32.0574 23.2648 32.5685 23.5986L55.9018 38.5986C56.3771 38.9045 56.6668 39.4336 56.6668 40C56.6668 40.5664 56.3771 41.0953 55.9018 41.4014Z"
                                                      fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_570_2100">
                                                    <rect width="80" height="80" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="uploader-info">
                                            <img src="/wp-content/uploads/2025/08/k-avatar.png" alt="M Avatar" class="uploader-avatar">
                                            <div class="uploader-details">
                                                <p class="uploader-name">Michael Chen</p>
                                                <p class="uploader-position">CTO, InnovateTech</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92" fill="none">
                                            <g clip-path="url(#clip0_570_2108)">
                                                <path d="M6.10352e-05 45.9999V85.4286H39.4287V45.9999H13.143C13.143 31.5063 24.9351 19.7142 39.4287 19.7142V6.57129C17.6864 6.57129 6.10352e-05 24.2577 6.10352e-05 45.9999Z"
                                                      fill="#FEFAFD"/>
                                                <path d="M91.999 19.7142V6.57129C70.2568 6.57129 52.5704 24.2577 52.5704 45.9999V85.4286H91.999V45.9999H65.7133C65.7133 31.5063 77.5054 19.7142 91.999 19.7142Z"
                                                      fill="#FEFAFD"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_570_2108">
                                                    <rect width="92" height="92" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="testimonial-quote">Cobalt exceeded our expectations in finding the perfect leadership
                                            candidate. Their thorough process and deep understanding of our industry made all the
                                            difference.</p>
                                        <p class="testimonial-author">Michael Chen</p>
                                        <p class="testimonial-position">CTO, InnovateTech</p>
                                    </div>
                                </div>

                                <div class="testimonial-card">
                                    <div class="video-container">
                                        <svg class="play-button" xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                             viewBox="0 0 80 80" fill="none">
                                            <g clip-path="url(#clip0_570_2100)">
                                                <path d="M40.0001 0C17.9427 0 6.10352e-05 17.9444 6.10352e-05 40C6.10352e-05 62.0556 17.9427 80 40.0001 80C62.0574 80 80.0001 62.0556 80.0001 40C80.0001 17.9444 62.0574 0 40.0001 0ZM55.9018 41.4014L32.5685 56.4014C32.2951 56.5788 31.9793 56.6667 31.6668 56.6667C31.3933 56.6667 31.1166 56.5983 30.8693 56.4633C30.3321 56.1703 30.0001 55.6103 30.0001 55V25C30.0001 24.3897 30.3321 23.8297 30.8693 23.5367C31.3966 23.247 32.0574 23.2648 32.5685 23.5986L55.9018 38.5986C56.3771 38.9045 56.6668 39.4336 56.6668 40C56.6668 40.5664 56.3771 41.0953 55.9018 41.4014Z"
                                                      fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_570_2100">
                                                    <rect width="80" height="80" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="uploader-info">
                                            <img src="/wp-content/uploads/2025/08/k-avatar.png" alt="S Avatar" class="uploader-avatar">
                                            <div class="uploader-details">
                                                <p class="uploader-name">Sarah Rodriguez</p>
                                                <p class="uploader-position">VP Operations, GrowthCorp</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92" fill="none">
                                            <g clip-path="url(#clip0_570_2108)">
                                                <path d="M6.10352e-05 45.9999V85.4286H39.4287V45.9999H13.143C13.143 31.5063 24.9351 19.7142 39.4287 19.7142V6.57129C17.6864 6.57129 6.10352e-05 24.2577 6.10352e-05 45.9999Z"
                                                      fill="#FEFAFD"/>
                                                <path d="M91.999 19.7142V6.57129C70.2568 6.57129 52.5704 24.2577 52.5704 45.9999V85.4286H91.999V45.9999H65.7133C65.7133 31.5063 77.5054 19.7142 91.999 19.7142Z"
                                                      fill="#FEFAFD"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_570_2108">
                                                    <rect width="92" height="92" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="testimonial-quote">Working with Cobalt was a game-changer for our executive search.
                                            They understood our culture and delivered exceptional candidates who fit perfectly.</p>
                                        <p class="testimonial-author">Sarah Rodriguez</p>
                                        <p class="testimonial-position">VP Operations, GrowthCorp</p>
                                    </div>
                                </div>-->
            </div>
            <!--<div class="testimonial-slider-nav" data-slider-target="testimonials-slider">
                <div class="slider-nav-divider"></div>
                <div class="slider-arrows-container">
                    <button class="slider-arrow slider-prev" data-slider-target="testimonials-slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path d="M7.61351 0.90127L8.5484 1.82823L3.03416 7.33456L16.8198 7.33456L16.8198 8.66558L3.03416 8.66558L8.5484 14.1719L7.61352 15.0989L0.514717 8.00007L7.61351 0.90127Z"
                                  fill="black"/>
                        </svg>
                    </button>
                    <button class="slider-arrow slider-next" data-slider-target="testimonials-slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path d="M9.38648 15.0987L8.4516 14.1718L13.9658 8.66544L0.18023 8.66544L0.18023 7.33442L13.9658 7.33442L8.4516 1.8281L9.38648 0.901133L16.4853 7.99993L9.38648 15.0987Z"
                                  fill="black"/>
                        </svg>
                    </button>
                </div>
            </div>-->
        </div>

        <div class="testimonial-text-slider-container">
            <div class="testimonial-text-slider" data-slider="testimonial-text-slider">
                <div class="testimonial-text-item">
                    <div class="text-content-container">
                        <div class="text-content blue">
                            <p class="quote-text">Cobalt presented excellent candidates, making our choice difficult.
                                Their support through the process was outstanding, and we’re delighted with the final
                                outcome.</p>
                            <div class="author-info">
                                <img src="/wp-content/uploads/2025/08/d-blue.png" alt="K Avatar"
                                     class="author-avatar">
                                <div class="author-details">
                                    <p class="author-name">David Scorey</p>
                                    <p class="author-position">CEO, Keolis North America</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-content green">
                            <p class="quote-text">Helen Goddard and Cobalt Search excel at finding top-tier talent in
                                unexpected places. Their expertise helped us hire an exceptional CFO who’s already
                                making a big impact.</p>
                            <div class="author-info">
                                <img src="/wp-content/uploads/2025/08/s-green.png" alt="K Avatar"
                                     class="author-avatar">
                                <div class="author-details">
                                    <p class="author-name">Steve Ponte</p>
                                    <p class="author-position">CEO, PHL Capital Corp.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text-item">
                    <div class="text-content-container">
                        <div class="text-content blue">
                            <p class="quote-text">Cobalt helped us find the right COO who transformed our operations and
                                doubled revenue in 18 months.</p>
                            <div class="author-info">
                                <img src="/wp-content/uploads/2025/08/k-avatar-b.png" alt="K Avatar"
                                     class="author-avatar">
                                <div class="author-details">
                                    <p class="author-name">Keith J. Cunningham</p>
                                    <p class="author-position">Entrepreneur, International Speaker and Acclaimed
                                        Author</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-content green">
                            <p class="quote-text">Helen and her team at Cobalt Search take recruiting to another level,
                                the quality of candidates she brought to us were all fantastic</p>
                            <div class="author-info">
                                <img src="/wp-content/uploads/2025/08/t-green.png" alt="K Avatar"
                                     class="author-avatar">
                                <div class="author-details">
                                    <p class="author-name">Thomas Martini</p>
                                    <p class="author-position">President & CEO, LorvaL Capital Management</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text-item">
                    <div class="text-content-container">
                        <div class="text-content blue">
                            <p class="quote-text">Cobalt has been extremely effective at delivering diverse candidates,
                                adding huge value to Keolis in North America and to our culture. Cobalt finds us
                                unicorns!</p>
                            <div class="author-info">
                                <img src="/wp-content/uploads/2025/08/a-blue.png" alt="K Avatar"
                                     class="author-avatar">
                                <div class="author-details">
                                    <p class="author-name">Aline Frantzen</p>
                                    <p class="author-position">CEO US Bus Operations, Keolis North America</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-content green">
                            <p class="quote-text">Cobalt's expertise in the tech industry is unmatched. They not only
                                found us a great leader but also guided us through the entire transition. Highly
                                recommend!</p>
                            <div class="author-info">
                                <img src="/wp-content/uploads/2025/08/k-avatar-g.png" alt="K Avatar"
                                     class="author-avatar">
                                <div class="author-details">
                                    <p class="author-name">Karen Thompson</p>
                                    <p class="author-position">CEO, TechVision Inc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-slider-nav" data-slider-target="testimonial-text-slider">
                <div class="slider-nav-divider"></div>
                <div class="slider-arrows-container">
                    <button class="slider-arrow slider-prev" data-slider-target="testimonial-text-slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path d="M7.61351 0.90127L8.5484 1.82823L3.03416 7.33456L16.8198 7.33456L16.8198 8.66558L3.03416 8.66558L8.5484 14.1719L7.61352 15.0989L0.514717 8.00007L7.61351 0.90127Z"
                                  fill="black"/>
                        </svg>
                    </button>
                    <button class="slider-arrow slider-next" data-slider-target="testimonial-text-slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path d="M9.38648 15.0987L8.4516 14.1718L13.9658 8.66544L0.18023 8.66544L0.18023 7.33442L13.9658 7.33442L8.4516 1.8281L9.38648 0.901133L16.4853 7.99993L9.38648 15.0987Z"
                                  fill="black"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
