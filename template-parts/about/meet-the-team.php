<?php
/**
 * Template part for displaying the Meet the team section
 *
 * @package Cobalt Theme
 */
?>
<style>
    section.about-meet-the-team-section {
        background-color: #cadcfb;
        background-image: url("/wp-content/uploads/2025/08/blue-magni.png"), url("/wp-content/uploads/2025/08/blue-magni-small.png"), url("/wp-content/uploads/2025/08/blue-magni.png");
        background-position: top right, center left, bottom right;
        background-repeat: no-repeat;
    }

    section.about-meet-the-team-section .section-header .section-title {
        max-width: 654px;
        margin: 0 auto 20px;
    }

    section.about-meet-the-team-section .section-header .section-subtext {
        letter-spacing: normal;
    }

    section.about-meet-the-team-section .section-header .section-subtext:first-of-type {
        max-width: 830px;
        margin: 0 auto 12px;
    }

    section.about-meet-the-team-section .section-header .section-subtext:last-of-type {
        max-width: 730px;
        margin: 0 auto 12px;
    }

    section.about-meet-the-team-section .section-subheader .section-title {
        max-width: 654px;
        margin: 40px auto 30px;
    }

    section.about-meet-the-team-section .section-subheader .section-subtext {
        letter-spacing: normal;
        max-width: 1126px;
        margin: 0 auto;
    }

    .team-index-card {
        display: flex;
        border-radius: 20px;
        background: #FFFFFF;
        transition: ease 0.3s;
    }

    .team-index-card:hover {
        background: #1B4F9E;
    }

    .team-index-card:nth-child(3) {
        margin-top: 50px;
        margin-bottom: 80px;
    }

    .team-index-card:nth-child(4) {
        margin-bottom: 50px;
    }

    .team-index-card.reverse-card {
        flex-direction: row-reverse;
    }

    .team-index-card * {
        color: #202020;
    }

    .team-index-card:hover * {
        color: #FFFFFF;
    }

    .team-image {
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        width: 100%;
        max-width: 499px;
        padding: 30px;
    }

    .team-position {
        color: #202020;
        font-family: Roboto, sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        padding: 12px 20px;
        border-radius: 9999px;
        background: #E7E7E7;
    }

    .team-index-card:hover .team-position {
        color: #1B4F9E;
        background: #FFF;
    }

    .team-index-card.purple:hover .team-position {
        color: #A62274;
        background: #FFF;
    }

    .team-index-card:nth-child(3) .team-image {
        border-radius: 20px 0 0 20px;
        background: url("/wp-content/uploads/2025/08/helen-godard-2.png");
        background-size: cover;
        background-position: center;
    }

    .team-index-card:nth-child(4) .team-image {
        border-radius: 0 20px 20px 0;
        background: url("/wp-content/uploads/2025/08/denise-pike-2.png");
        background-size: cover;
        background-position: center;
    }

    .team-info {
        padding: 40px 30px 40px 60px;
        border-bottom: 1px solid #D2D2D2;
    }

    .team-index-card:hover .team-info {
        border-bottom: 1px solid #FFFFFF;
    }

    .team-name-container {
        display: flex;
        gap: 20px;
        align-items: center;
        margin-bottom: 20px;
    }

    .team-icon {
        padding: 17.5px;
        border-radius: 14581.875px;
        background: #E7E7E7;
    }

    .team-index-card:hover .team-icon {
        padding: 17.5px;
        border-radius: 14581.875px;
        background: #FFFFFF;
    }

    .team-name {
        font-family: Roboto;
        font-size: 28px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .team-description {
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%;
        margin-bottom: 20px;
    }

    .team-description {
        color: #202020;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 32px */
        margin-bottom: 20px;
    }

    .team-achievements {
        display: flex;
        gap: 12px;
    }

    .team-achievements {
        display: flex;
        gap: 12px;
    }

    .team-achievement {
        padding: 10px 20px;
        border-radius: 19px;
        background: #E7E7E7;
        font-family: Roboto;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .team-index-card:hover .team-achievement {
        background: #FFFFFF;
        color: #1B4F9E;
    }

    .team-index-card.purple:hover .team-achievement {
        background: #FFFFFF;
        color: #A62274;
    }

    .team-socials {
        padding: 20px 30px 30px 60px;
        display: flex;
        gap: 16px;
    }

    .team-socials > a {
        padding: 9px;
        border-radius: 50px;
        background: #E7E7E7;
    }

    .team-index-card:hover .team-icon path {
        stroke: #1B4F9E;
    }

    .team-index-card.purple:hover .team-icon path {
        stroke: #A62274;
    }

    @media (max-width: 991px) {
        .team-index-card, .team-index-card.reverse-card {
            flex-direction: column;
        }
        .team-image {
            padding: 20px;
            height: 357px;
            max-width: 100%;
        }

        .team-index-card:nth-child(3) {
            margin-bottom: 20px;
        }

        .team-index-card:nth-child(4) {
            margin-bottom: 60px;
        }

        .team-index-card:nth-child(3) .team-image, .team-index-card:nth-child(4) .team-image {
            border-radius: 20px 20px 0 0;
            background-position: top center;
            height: 700px;
        }

        .team-info {
            padding: 30px 20px;
        }

        .team-achievements {
            flex-wrap: wrap;
        }

        .team-socials {
            padding: 20px;
        }
    }

    @media (max-width: 767px) {
        section.about-meet-the-team-section {
            padding-top: 40px;
            background-size: 70%;
        }

        section.about-meet-the-team-section .section-header .section-title {
            max-width: 654px;
            margin: 0 auto 20px;
        }

        section.about-meet-the-team-section .section-header .section-subtext:first-of-type {
            max-width: 830px;
            margin: 0 auto 20px;
        }

        section.about-meet-the-team-section .section-header .section-subtext:last-of-type {
            max-width: 730px;
            margin: 0 auto 20px;
        }

        section.about-meet-the-team-section .section-subheader .section-title {
            max-width: 654px;
            margin: 30px auto 20px;
        }

        section.about-meet-the-team-section .section-header .section-subtext, section.about-meet-the-team-section .section-subheader .section-subtext {
            line-height: 150%;
        }

        .team-index-card:nth-child(3) .team-image, .team-index-card:nth-child(4) .team-image {
            height: 357px;
        }
    }

    .team-index-card.blue:hover {
        background: #1B4F9E;
    }

    .team-index-card.purple:hover {
        background: #A62274;
    }

    .team-index-card.green:hover {
        background: #3FA635;
    }

    /* Section background changes on card hover */
    section.about-meet-the-team-section.purple-theme {
        background-color: #FCE4F3 !important;
        background-image: url("/wp-content/uploads/2025/08/pink-magni-2.png"), url("/wp-content/uploads/2025/08/pink-magni-small-2.png"), url("/wp-content/uploads/2025/08/pink-magni-2.png") !important;
    }

    section.about-meet-the-team-section.blue-theme {
        background-color: #CADCFB !important;
        background-image: url("/wp-content/uploads/2025/08/blue-magni.png"), url("/wp-content/uploads/2025/08/blue-magni-small.png"), url("/wp-content/uploads/2025/08/blue-magni.png") !important;
    }

    section.about-meet-the-team-section.green-theme {
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
</style>
<section class="about-meet-the-team-section">
    <div class="section-container about-meet-the-teamcontainer">
        <div class="section-header text-center">
            <h2 class="section-title">Meet <span class="blue-text">the team</span> who make great <span
                        class="blue-text">hiring feel easy</span></h2>
            <p class="section-subtext">Our team is small, senior, and invested. We show up, stay close, and treat every
                search like it’s our own.</p>
            <p class="section-subtext">When you work with Cobalt, you work with real people. We’ll ask the right
                questions, guide the process with care, and stay accountable to the outcome.</p>
        </div>
        <div class="section-subheader text-center">
            <h2 class="section-title">Our senior <span class="blue-text">leadership</span></h2>
            <p class="section-subtext">We believe that your leadership team deserves ours. That means every client we
                take on is matched with one of our senior leaders. You won’t be handed off, you’ll work with real people
                who know leadership, understand your business, and stay closely involved from initial brief to
                successful candidate onboarding.</p>
        </div>
        <div class="team-index-card lift-hover blue">
            <div class="team-image">
                <span class="team-position">Founder & CEO</span>
            </div>
            <div class="team-info-container">
                <div class="team-info">
                    <div class="team-name-container">
                    <span class="team-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path d="M23.8333 31.125V28.2083C23.8333 26.6612 23.2187 25.1775 22.1248 24.0835C21.0308 22.9896 19.5471 22.375 18 22.375H9.24999C7.70289 22.375 6.21916 22.9896 5.1252 24.0835C4.03124 25.1775 3.41666 26.6612 3.41666 28.2083V31.125"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M23.8333 5.06152C25.0842 5.38581 26.192 6.11628 26.9829 7.13828C27.7737 8.16028 28.2028 9.41594 28.2028 10.7082C28.2028 12.0004 27.7737 13.2561 26.9829 14.2781C26.192 15.3001 25.0842 16.0306 23.8333 16.3549"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M32.5833 31.1249V28.2082C32.5824 26.9157 32.1522 25.6602 31.3603 24.6387C30.5685 23.6172 29.4598 22.8876 28.2083 22.5645"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M13.625 16.5417C16.8467 16.5417 19.4583 13.93 19.4583 10.7083C19.4583 7.48667 16.8467 4.875 13.625 4.875C10.4033 4.875 7.79166 7.48667 7.79166 10.7083C7.79166 13.93 10.4033 16.5417 13.625 16.5417Z"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <h3 class="team-name">Helen Goddard</h3>
                    </div>
                    <p class="team-description">Helen built Cobalt to be everything traditional recruitment wasn’t:
                        values-led, relationship-driven, and focused on results that actually last the distance.</p>
                    <p class="team-description">With a background in leadership search across the UK, US and global
                        markets,
                        she combines commercial acuity with emotional intelligence to guide high-stakes hiring with
                        confidence. Clients trust her to ask the hard questions, see beyond the obvious, and lead with
                        empathy at every step.</p>
                    <div class="team-achievements">
                        <span class="team-achievement">15+ Years Experience</span>
                        <span class="team-achievement">Global Search Expert</span>
                        <span class="team-achievement">C-suite specialist</span>
                    </div>
                </div>
                <div class="team-socials">
                    <a href="https://www.linkedin.com/in/helengoddardcobalt/" target="_blank"
                       rel="noopener noreferrer"
                       class="team-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_580_5411)">
                                <path d="M0.274658 17.9273H4.93536V5.67139H0.274658V17.9273ZM1.32935 6.72607H3.88067V16.8726H1.32935V6.72607Z"
                                      fill="#202020"/>
                                <path d="M2.60504 0.0725098C1.16859 0.0725098 0 1.24114 0 2.67755C0 4.11397 1.16859 5.28263 2.60504 5.28263C4.04149 5.28263 5.21012 4.114 5.21012 2.67755C5.21012 1.2411 4.04146 0.0725098 2.60504 0.0725098ZM1.05469 2.67755C1.05469 1.82269 1.75015 1.1272 2.60504 1.1272C3.45994 1.1272 4.15543 1.82266 4.15543 2.67755C4.15543 3.53245 3.45994 4.22794 2.60504 4.22794C1.75015 4.22794 1.05469 3.53241 1.05469 2.67755Z"
                                      fill="#202020"/>
                                <path d="M17.9887 9.51996C17.8228 7.13443 15.833 5.29614 13.366 5.29614C12.2626 5.29614 11.2209 5.67977 10.4002 6.36046V5.6714H5.93433V17.9273H10.5951V11.2243C10.5951 10.4689 11.2096 9.85426 11.9651 9.85426C12.7205 9.85426 13.3351 10.4689 13.3351 11.2246L13.3396 17.9274H18V9.53128L17.9887 9.51996ZM9.54037 16.8727H6.98901V6.72612H9.3455V8.23246L10.1894 8.23731L10.3462 7.99389C11.0089 6.96505 12.1378 6.35087 13.366 6.35087C15.329 6.35087 16.9008 7.84859 16.9442 9.76049L16.9453 16.8727H14.3936L14.3898 11.2243C14.3898 9.8873 13.3021 8.79957 11.9651 8.79957C10.6281 8.79957 9.54037 9.8873 9.54037 11.2243V16.8727Z"
                                      fill="#202020"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_580_5411">
                                    <rect width="18" height="18" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="mailto:helen@cobaltsearch.com" class="team-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M16.418 2.67188H1.58203C0.711492 2.67188 0 3.38024 0 4.25391V13.7461C0 14.6201 0.711949 15.3281 1.58203 15.3281H16.418C17.2885 15.3281 18 14.6198 18 13.7461V4.25391C18 3.38003 17.2882 2.67188 16.418 2.67188ZM16.175 3.72656C15.6636 4.23974 9.65549 10.2674 9.40866 10.515C9.2025 10.7218 8.79761 10.722 8.59134 10.515L1.82496 3.72656H16.175ZM1.05469 13.5522V4.44779L5.59213 9L1.05469 13.5522ZM1.82496 14.2734L6.3367 9.747L7.84438 11.2596C8.46221 11.8794 9.53803 11.8792 10.1557 11.2596L11.6633 9.74704L16.175 14.2734H1.82496ZM16.9453 13.5522L12.4079 9L16.9453 4.44779V13.5522Z"
                                  fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="team-index-card reverse-card lift-hover purple">
            <div class="team-image">
                <span class="team-position">Vice President</span>
            </div>
            <div class="team-info-container">
                <div class="team-info">
                    <div class="team-name-container">
                    <span class="team-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path d="M23.8333 31.125V28.2083C23.8333 26.6612 23.2187 25.1775 22.1248 24.0835C21.0308 22.9896 19.5471 22.375 18 22.375H9.24999C7.70289 22.375 6.21916 22.9896 5.1252 24.0835C4.03124 25.1775 3.41666 26.6612 3.41666 28.2083V31.125"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M23.8333 5.06152C25.0842 5.38581 26.192 6.11628 26.9829 7.13828C27.7737 8.16028 28.2028 9.41594 28.2028 10.7082C28.2028 12.0004 27.7737 13.2561 26.9829 14.2781C26.192 15.3001 25.0842 16.0306 23.8333 16.3549"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M32.5833 31.1249V28.2082C32.5824 26.9157 32.1522 25.6602 31.3603 24.6387C30.5685 23.6172 29.4598 22.8876 28.2083 22.5645"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M13.625 16.5417C16.8467 16.5417 19.4583 13.93 19.4583 10.7083C19.4583 7.48667 16.8467 4.875 13.625 4.875C10.4033 4.875 7.79166 7.48667 7.79166 10.7083C7.79166 13.93 10.4033 16.5417 13.625 16.5417Z"
                                  stroke="#202020" stroke-width="2.91667" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <h3 class="team-name">Denise Pike</h3>
                    </div>
                    <p class="team-description">Now approaching two decades of leadership search experience, Denise
                        brings calm, tenacity, and a clear-eyed focus to every search. She’s known for her thoughtful
                        questioning, strategic thinking, and ability to build trust fast, both with clients and
                        candidates.</p>
                    <p class="team-description">Whether she’s guiding a founder through their first leadership hire or
                        helping a global business land a hard-to-find VP, Denise works like part of your team from day
                        one.</p>
                    <div class="team-achievements">
                        <span class="team-achievement">15+ Years Experience</span>
                        <span class="team-achievement">Global Search Expert</span>
                        <span class="team-achievement">C-suite specialist</span>
                    </div>
                </div>
                <div class="team-socials">
                    <a href="http://linkedin.com/in/denise-pike/" target="_blank"
                       rel="noopener noreferrer"
                       class="team-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_580_5411)">
                                <path d="M0.274658 17.9273H4.93536V5.67139H0.274658V17.9273ZM1.32935 6.72607H3.88067V16.8726H1.32935V6.72607Z"
                                      fill="#202020"/>
                                <path d="M2.60504 0.0725098C1.16859 0.0725098 0 1.24114 0 2.67755C0 4.11397 1.16859 5.28263 2.60504 5.28263C4.04149 5.28263 5.21012 4.114 5.21012 2.67755C5.21012 1.2411 4.04146 0.0725098 2.60504 0.0725098ZM1.05469 2.67755C1.05469 1.82269 1.75015 1.1272 2.60504 1.1272C3.45994 1.1272 4.15543 1.82266 4.15543 2.67755C4.15543 3.53245 3.45994 4.22794 2.60504 4.22794C1.75015 4.22794 1.05469 3.53241 1.05469 2.67755Z"
                                      fill="#202020"/>
                                <path d="M17.9887 9.51996C17.8228 7.13443 15.833 5.29614 13.366 5.29614C12.2626 5.29614 11.2209 5.67977 10.4002 6.36046V5.6714H5.93433V17.9273H10.5951V11.2243C10.5951 10.4689 11.2096 9.85426 11.9651 9.85426C12.7205 9.85426 13.3351 10.4689 13.3351 11.2246L13.3396 17.9274H18V9.53128L17.9887 9.51996ZM9.54037 16.8727H6.98901V6.72612H9.3455V8.23246L10.1894 8.23731L10.3462 7.99389C11.0089 6.96505 12.1378 6.35087 13.366 6.35087C15.329 6.35087 16.9008 7.84859 16.9442 9.76049L16.9453 16.8727H14.3936L14.3898 11.2243C14.3898 9.8873 13.3021 8.79957 11.9651 8.79957C10.6281 8.79957 9.54037 9.8873 9.54037 11.2243V16.8727Z"
                                      fill="#202020"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_580_5411">
                                    <rect width="18" height="18" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="mailto:denise@cobaltsearch.com" class="team-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M16.418 2.67188H1.58203C0.711492 2.67188 0 3.38024 0 4.25391V13.7461C0 14.6201 0.711949 15.3281 1.58203 15.3281H16.418C17.2885 15.3281 18 14.6198 18 13.7461V4.25391C18 3.38003 17.2882 2.67188 16.418 2.67188ZM16.175 3.72656C15.6636 4.23974 9.65549 10.2674 9.40866 10.515C9.2025 10.7218 8.79761 10.722 8.59134 10.515L1.82496 3.72656H16.175ZM1.05469 13.5522V4.44779L5.59213 9L1.05469 13.5522ZM1.82496 14.2734L6.3367 9.747L7.84438 11.2596C8.46221 11.8794 9.53803 11.8792 10.1557 11.2596L11.6633 9.74704L16.175 14.2734H1.82496ZM16.9453 13.5522L12.4079 9L16.9453 4.44779V13.5522Z"
                                  fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="cta-wrapper text-center">
            <a href="/contact-us" class="content-cta cta-blue lift-hover">
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
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const teamCards = document.querySelectorAll('.team-index-card');
    const section = document.querySelector('.about-meet-the-team-section');
    const ctaButton = document.querySelector('.about-meet-the-team-section .content-cta');
    const blueTextElements = document.querySelectorAll('.about-meet-the-team-section .blue-text');

    teamCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            // Remove all theme classes
            section.classList.remove('purple-theme', 'blue-theme', 'green-theme');
            ctaButton.classList.remove('purple-cta', 'blue-cta', 'green-cta');

            // Add appropriate theme class based on card color
            if (card.classList.contains('purple')) {
                section.classList.add('purple-theme');
                ctaButton.classList.add('purple-cta');

                // Change blue-text to purple-text
                blueTextElements.forEach(element => {
                    element.classList.remove('blue-text');
                    element.classList.add('purple-text');
                });
            } else if (card.classList.contains('blue')) {
                section.classList.add('blue-theme');
                ctaButton.classList.add('blue-cta');

                // Ensure blue-text class is present
                blueTextElements.forEach(element => {
                    element.classList.remove('purple-text', 'green-text');
                    element.classList.add('blue-text');
                });
            } else if (card.classList.contains('green')) {
                section.classList.add('green-theme');
                ctaButton.classList.add('green-cta');

                // Change blue-text to green-text
                blueTextElements.forEach(element => {
                    element.classList.remove('blue-text');
                    element.classList.add('green-text');
                });
            }
        });

        card.addEventListener('mouseleave', function() {
            // Remove all theme classes when not hovering
            section.classList.remove('purple-theme', 'blue-theme', 'green-theme');
            ctaButton.classList.remove('purple-cta', 'blue-cta', 'green-cta');

            // Reset all text elements back to blue-text
            blueTextElements.forEach(element => {
                element.classList.remove('purple-text', 'green-text');
                element.classList.add('blue-text');
            });
        });
    });
});
</script>
