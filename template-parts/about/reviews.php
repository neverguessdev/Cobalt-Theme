<?php
/**
 * Template part for displaying the Reviews section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .about-review-section {
        background-image: url("/wp-content/uploads/2025/08/pink-magni.png"), url("/wp-content/uploads/2025/08/pink-magni-small.png");
        background-position: top -105px right, bottom left;
        background-repeat: no-repeat;

        padding: 100px 20px 80px;
    }

    .ab-review-cards {
        display: flex;
        gap: 30px;
        align-items: flex-end;
    }

    .ab-review-card {
        border-radius: 18.998px;
        border: 1px solid #D2D2D2;
        background: #FCE4F3;
        box-shadow: 0 5.699px 9.499px 0 rgba(204, 204, 204, 0.25);
        padding: 44px 54px 44px 30px;
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 30px;
        width: 100%;
        height: auto;
    }

    .ab-review-card-container {
        height: auto;
        padding-left: 30px;
        padding-top: 30px;
        width: 50%;
    }

    .ab-review-card-container:last-child {
        margin-top: 108px;
    }

    .ab-review-card-container:first-child > div {
        /*height: 524px;*/
    }

    .ab-review-card-container:last-child > div {
        background: #DDE9FF;
    }

    .ab-review-card-comma {
        position: absolute;
        top: -30px;
        left: -30px;
        padding: 16px;
        border-radius: 50px;
        background: #A62274;
    }

    .ab-review-card-container:last-child > div .ab-review-card-comma {
        background: #1B4F9E;
    }

    .review-text {
        color: var(--Grey-2, #797979);
        font-family: "Lexend Deca", sans-serif;
        font-size: 23px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%;
    }

    .reviewer {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .reviewer img {
        width: 100px;
        height: 100px;
    }

    .reviewer-info {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .review-author {
        color: #A62274;
        font-family: "Lexend Deca", sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 28.8px */
    }

    .review-position {
        color: #A62274;
        font-family: Roboto, sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 24px */
    }

    .ab-review-card-container:last-child > div .review-author {
        color: #1B4F9E;
    }

    .ab-review-card-container:last-child > div .review-position {
        color: #1B4F9E;
    }

    @media (max-width: 1265px) {
        .ab-review-card-container:first-child > div {
            height: auto;
        }
    }

    /* Desktop and Tablet - 2 Column Layout */
    @media (min-width: 768px) {
        .ab-review-cards {
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .ab-review-card {
            width: 100%;
        }

        .review-slider-nav {
            display: none;
        }
    }

    /* Mobile - Slider Layout */
    @media (max-width: 767px) {
        .about-review-section {
            background-image: url("/wp-content/uploads/2025/08/pink-magni-small.png");
            background-position: bottom left;
            background-size: 23%;
            padding: 20px 20px;
        }

        .about-review-section {
            padding: 20px;
        }

        .about-review-container {
            overflow: hidden;
            padding: 0;
        }

        .ab-review-cards {
            display: flex;
            transition: transform 0.3s ease;
            width: 200%; /* Total width for 2 slides */
            gap: 0;
            align-items: stretch;
        }

        .ab-review-card {
            flex: 0 0 100%; /* Each slide takes 1/2 of the 200% container */
            width: 100% !important;
            margin: 0 !important;
            padding: 30px 20px;
            box-sizing: border-box;
            height: auto !important;
        }

        .ab-review-card-container:first-child {
            height: auto !important;
        }

        .ab-review-card-container:last-child {
            margin-top: 0;
        }

        .review-text {
            font-size: 18px;
            line-height: 140%;
        }

        .review-author {
            font-size: 20px;
        }

        .review-position {
            font-size: 16px;
        }

        .reviewer-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .review-slider-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0;
            margin-top: 20px;
            padding: 3px 20px;
            position: relative;
        }

        .review-slider-nav .slider-nav-divider {
            flex: 1;
            height: 1px;
            background: rgba(32, 32, 32, 0.10);
            margin-right: 25px;
        }
    }
</style>
<section class="about-review-section">
    <div class="section-container about-review-container">
        <div class="about-review-content">
            <div class="ab-review-cards" data-slider="ab-reviews">
                <div class="ab-review-card-container">
                    <div class="ab-review-card">
                        <div class="ab-review-card-comma">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3604)">
                                    <path d="M26 13L26 1.85713H14.8571L14.8571 13L22.2857 13C22.2857 17.096 18.9532 20.4286 14.8571 20.4286V24.1429C21.0017 24.1429 26 19.1446 26 13Z"
                                          fill="white"/>
                                    <path d="M0.00165558 20.4286V24.1429C6.14621 24.1429 11.1445 19.1446 11.1445 13L11.1445 1.85713H0.00165558L0.00165558 13L7.43022 13C7.43022 17.096 4.09768 20.4286 0.00165558 20.4286Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3604">
                                        <rect width="26" height="26" fill="white" transform="matrix(-1 0 0 -1 26 26)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="reviewer-rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="review-text">
                            “I am delighted to provide a glowing testimonial for Helen Goddard and Cobalt Search. Thanks to their expertise, we successfully onboarded an exceptional CFO. Cobalt’s ability to find candidates who aligned with our culture was remarkable. Their professionalism, attention to detail, and results are truly impressive. We highly recommend their services to anyone seeking exceptional recruitment solutions.”
                        </p>
                        <div class="reviewer">
                            <img src="/wp-content/uploads/2025/09/steve-ponte100.png" alt="Steve Ponte"
                                 class="reviewer-image">
                            <div class="reviewer-info">
                                <div class="review-author">Steve Ponte</div>
                                <div class="review-position">— CEO, PHL Capital Corp</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ab-review-card-container">
                    <div class="ab-review-card">
                        <div class="ab-review-card-comma">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3604)">
                                    <path d="M26 13L26 1.85713H14.8571L14.8571 13L22.2857 13C22.2857 17.096 18.9532 20.4286 14.8571 20.4286V24.1429C21.0017 24.1429 26 19.1446 26 13Z"
                                          fill="white"/>
                                    <path d="M0.00165558 20.4286V24.1429C6.14621 24.1429 11.1445 19.1446 11.1445 13L11.1445 1.85713H0.00165558L0.00165558 13L7.43022 13C7.43022 17.096 4.09768 20.4286 0.00165558 20.4286Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3604">
                                        <rect width="26" height="26" fill="white" transform="matrix(-1 0 0 -1 26 26)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="reviewer-rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                 fill="none">
                                <g clip-path="url(#clip0_571_3607)">
                                    <path d="M29.9218 11.5079C29.7254 10.9004 29.1866 10.4689 28.5492 10.4115L19.8903 9.62526L16.4664 1.61122C16.2139 1.02389 15.639 0.643707 15.0002 0.643707C14.3613 0.643707 13.7864 1.02389 13.5339 1.61259L10.11 9.62526L1.44977 10.4115C0.813463 10.4703 0.276035 10.9004 0.0785047 11.5079C-0.119025 12.1153 0.0633981 12.7816 0.544749 13.2016L7.08979 18.9417L5.15981 27.4433C5.01859 28.0683 5.26121 28.7145 5.77987 29.0894C6.05865 29.2908 6.38482 29.3934 6.71373 29.3934C6.99732 29.3934 7.27863 29.3169 7.53109 29.1659L15.0002 24.7019L22.4665 29.1659C23.0128 29.4945 23.7015 29.4646 24.2191 29.0894C24.738 28.7134 24.9803 28.067 24.8391 27.4433L22.9091 18.9417L29.4542 13.2028C29.9355 12.7816 30.1193 12.1165 29.9218 11.5079Z"
                                          fill="#FFC107"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_571_3607">
                                        <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="review-text">
                            “The Cobalt team found us the perfect match! They took the time to really get to know our company, culture and my style. The candidates even described our niche and complex business accurately, something that isn’t easy, so I was reassured that Cobalt really understood. I highly recommend Cobalt if you want an excellent candidate and the white glove service they consistently deliver.”
                        </p>
                        <div class="reviewer">
                            <img src="/wp-content/uploads/2025/09/ariel-steele100.png" alt="Ariel Steele"
                                 class="reviewer-image">
                            <div class="reviewer-info">
                                <div class="review-author">Ariel Steele</div>
                                <div class="review-position">— President, Tax Credit Connection</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-slider-nav" data-slider-target="ab-reviews">
                <div class="slider-nav-divider"></div>
                <div class="slider-arrows-container">
                    <button aria-label="Prev Slide" class="slider-arrow slider-prev" data-slider-target="ab-reviews">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path d="M7.61351 0.90127L8.5484 1.82823L3.03416 7.33456L16.8198 7.33456L16.8198 8.66558L3.03416 8.66558L8.5484 14.1719L7.61352 15.0989L0.514717 8.00007L7.61351 0.90127Z"
                                  fill="black"/>
                        </svg>
                    </button>
                    <button aria-label="Next Slide" class="slider-arrow slider-next" data-slider-target="ab-reviews">
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
