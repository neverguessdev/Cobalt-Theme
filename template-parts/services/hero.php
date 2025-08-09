<?php
/**
 * Template part for displaying the Services Hero section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .service-hero-section {
        background: linear-gradient(rgba(32, 32, 32, 0.22), rgba(32, 32, 32, 0.22)),
        linear-gradient(100deg, #A62274 14.66%, #1B4F9E 51.88%, #16A34A 100%);
    }

    .service-hero-content {
        display: flex;
    }

    .service-hero-text {
        max-width: 717px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 46px;
    }

    .service-hero-container {
        margin-top: 40px;
        overflow: visible;
    }

    .service-text-header {
        display: flex;
        flex-direction: column;
        gap: 48px;
        padding-right: 30px;
    }

    .service-hero-title {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 56px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
    }

    .service-hero-subtitle {
        color: #FFF;
        font-family: Roboto, sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 160%; /* 48px */
        letter-spacing: 0.6px;
    }

    .service-hero-cards {
        width: 100%;
        max-width: 723px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .service-hero-section .tricolor-card-stack {
        position: relative;
        width: 100%;
        max-width: 558px;
    }

    .service-hero-section .tricolor-card {
        border-radius: 30px;
        background: #A62274;
        width: 100%;
        position: relative;
        z-index: 3;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .service-hero-section .tricolor-card-blue,
    .service-hero-section .tricolor-card-green,
    .service-hero-section .tricolor-card-purple {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .service-hero-section .tricolor-card-blue {
        background: #1B4F9E;
        transform: rotate(4deg) translate(26px, -36px);
        z-index: 2;
    }

    .service-hero-section .tricolor-card-green {
        background: #16A34A;
        transform: rotate(2deg) translate(13px, -18px);
        z-index: 3;
    }

    .service-hero-section .tricolor-card-purple {
        background: #A62274;
        transform: rotate(6deg) translate(39px, -54px);
        z-index: 1;
    }

    /* Active states - when cards are brought to front, they swap with main card */
    .service-hero-section .tricolor-card-blue.active {
        z-index: 4;
        transform: rotate(0deg) translate(0px, 0px);
    }

    .service-hero-section .tricolor-card-green.active {
        z-index: 4;
        transform: rotate(0deg) translate(0px, 0px);
    }

    .service-hero-section .tricolor-card-purple.active {
        z-index: 4;
        transform: rotate(0deg) translate(0px, 0px);
    }

    .service-hero-section .tricolor-card.active {
        z-index: 10;
        transform: rotate(0deg) translate(0px, 0px);
    }

    /* Reset non-active cards */
    .service-hero-section .tricolor-card-blue:not(.active) {
        z-index: 2;
    }

    .service-hero-section .tricolor-card-green:not(.active) {
        z-index: 3;
    }

    .service-hero-section .tricolor-card-purple:not(.active) {
        z-index: 1;
    }

    .service-hero-section .tricolor-card:not(.active) {
        z-index: 1;
    }

    /* When other cards are active, main card takes their original position */
    .service-hero-section .tricolor-card-blue.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple) {
        transform: rotate(2deg) translate(13px, -18px);
        z-index: 3;
    }

    .service-hero-section .tricolor-card-blue.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-main):not(.tricolor-card-purple) {
        transform: rotate(4deg) translate(26px, -36px);
        z-index: 3;
    }

    .service-hero-section .tricolor-card-green.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple) {
        transform: rotate(2deg) translate(13px, -18px);
        z-index: 4;
    }

    .service-hero-section .tricolor-card-purple.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple) {
        transform: rotate(6deg) translate(39px, -54px);
        z-index: 0;
    }

    /* Hover effects for cards */
    .service-hero-section .tricolor-card:hover {
        /*transform: scale(1.05);*/
        /*box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);*/
    }

    .service-hero-section .tricolor-card:not(.active):hover,
    .service-hero-section .tricolor-card-blue:not(.active):hover,
    .service-hero-section .tricolor-card-green:not(.active):hover,
    .service-hero-section .tricolor-card-purple:not(.active):hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    /* Maintain original transforms with lift effect for positioned cards */
    .service-hero-section .tricolor-card-blue:not(.active):hover {
        transform: rotate(8deg) translate(26px, -48px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-green:not(.active):hover {
        transform: rotate(6deg) translate(13px, -30px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-purple:not(.active):hover {
        transform: rotate(10deg) translate(39px, -66px) translateY(-2px);
    }

    /* Hover effects for main card when other cards are active (swapped positions) */
    .service-hero-section .tricolor-card-blue.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple):hover {
        transform: rotate(6deg) translate(13px, -30px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-green.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple):hover {
        transform: rotate(6deg) translate(13px, -30px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-purple.active ~ .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple):hover {
        transform: rotate(10deg) translate(39px, -66px) translateY(-2px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    /* Hover effects for other non-active cards when one card is active */
    .service-hero-section .tricolor-card-blue.active ~ .tricolor-card-green:not(.active):hover {
        transform: rotate(8deg) translate(26px, -48px) translateY(-2px) !important;
    }

    .service-hero-section .tricolor-card-blue.active ~ .tricolor-card-purple:not(.active):hover {
        transform: rotate(10deg) translate(39px, -66px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-green.active ~ .tricolor-card-blue:not(.active):hover {
        transform: rotate(8deg) translate(26px, -48px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-green.active ~ .tricolor-card-purple:not(.active):hover {
        transform: rotate(10deg) translate(39px, -66px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-purple.active ~ .tricolor-card-blue:not(.active):hover {
        transform: rotate(8deg) translate(26px, -48px) translateY(-2px);
    }

    .service-hero-section .tricolor-card-purple.active ~ .tricolor-card-green:not(.active):hover {
        transform: rotate(6deg) translate(13px, -30px) translateY(-2px);
    }

    .service-hero-section .tricolor-card.active:hover {
        transform: rotate(0deg) translate(0px, -6px);
    }

    .service-hero-section .tricolor-header,
    .service-hero-section .tricolor-list {
        position: relative;
        z-index: 10;
    }

    .service-hero-section .tricolor-header {
        padding: 30px 30px 20px;
        border-bottom: 1px solid #fff;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .service-hero-section .tricolor-header .tricolor-header-text h3 {
        color: #FFF;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        margin-bottom: 8px;
    }

    .service-hero-section .tricolor-header .tricolor-header-text p {
        color: #FFF;
        font-family: "Lexend Deca";
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
        line-height: 120%;
    }

    .service-hero-section .header-icon {
        background: #fff;
        padding: 15px;
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
    }

    .service-hero-section .tricolor-list {
        padding: 28px 30px 30px;
        display: list-item;
        /*list-style: disc;*/
    }

    .service-hero-section .tricolor-list li {
        /* display: flex; */
        gap: 12px;
        align-items: center;
        list-style: disc;
        margin-left: 20px;
        margin-bottom: 10px;
    }

    .service-hero-section .tricolor-list li p {
        color: #FFF;
        font-family: "Lexend Deca";
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%;
    }

    .service-hero-section .tricolor-icon {
        background: #fff;
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .service-hero-section .tricolor-icon-text p:first-child {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 4px;
    }

    .service-hero-section .tricolor-icon-text p:last-child {
        color: #FFF;
        font-family: "Lexend Deca", sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    @media (max-width: 1400px) {
        .service-hero-cards {
            padding-right: 45px;
        }
    }

    @media (max-width: 991px) {
        .service-hero-cards {
            display: none;
        }
        .service-text-header {
            padding-right: 0;
        }
        .service-hero-text {
            align-items: center;
            text-align: center;
        }
        .service-hero-content {
            justify-content: center;
        }
    }

    @media (max-width: 767px) {
        .service-hero-text {
            gap: 40px;
        }

        .service-text-header {
            gap: 20px;
        }

        .service-hero-title {
            font-size: 30px;
        }

        .service-hero-subtitle {
            font-size: 18px;
        }
    }
</style>
<section class="hero-section service-hero-section">
    <div class="section-container service-hero-container">
        <div class="service-hero-content">
            <div class="service-hero-text">
                <div class="service-text-header">
                    <h1 class="service-hero-title">
                        <span class="green-text">Hiring</span> shouldn’t be the <span
                                class="white-text">hardest part</span> of<span class="green-text"> growth</span>
                    </h1>
                    <p class="service-hero-subtitle">
                        We make finding game-changing leaders structured, strategic, and refreshingly low-stress.
                    </p>
                </div>
                <a href="#" class="content-cta lift-hover lift-hover-blue">
                    FIND YOUR NEXT LEADER
                    <span class="content-cta-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <rect width="36" height="37" rx="18" fill="#A62274"/>
                            <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                  fill="white"/>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="service-hero-cards">
                <div class="tricolor-card-stack">
                    <div class="tricolor-card tricolor-card-purple lift-hover" onclick="bringToFront('purple')">
                        <div class="tricolor-header">
                            <div class="tricolor-header-text">
                                <h3>Success Rate</h3>
                                <p>100%</p>
                            </div>
                            <div class="header-icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                        fill="none">
                                    <g clip-path="url(#clip0_571_2997)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M20.8072 21.6918C20.6903 21.9362 20.6247 22.2106 20.6247 22.4999V24.9818C20.6247 25.4762 20.8203 25.9512 21.1691 26.3024L23.6691 28.8206C24.2041 29.3599 25.0116 29.523 25.7141 29.2337C26.4166 28.9443 26.8747 28.2593 26.8747 27.4999V26.8749H27.4997C28.2578 26.8749 28.9416 26.4181 29.2322 25.7174C29.5222 25.0168 29.3616 24.2106 28.8253 23.6743L26.3253 21.1743C25.9741 20.8224 25.4972 20.6249 24.9997 20.6249H22.4997C22.2103 20.6249 21.9359 20.6906 21.6916 20.8074L15.4416 14.5581C15.1978 14.3143 14.8016 14.3143 14.5578 14.5581C14.3141 14.8018 14.3141 15.1981 14.5578 15.4418L20.8072 21.6918ZM25.6247 27.4999C25.6247 27.7531 25.4722 27.9812 25.2378 28.078C25.0034 28.1743 24.7347 28.1199 24.5559 27.9399L22.0559 25.4218C21.9397 25.3049 21.8747 25.1462 21.8747 24.9818V22.4999C21.8747 22.1549 22.1547 21.8749 22.4997 21.8749H24.9997C25.1653 21.8749 25.3247 21.9406 25.4416 22.0581L27.9416 24.5581C28.1203 24.7368 28.1741 25.0056 28.0772 25.2393C27.9803 25.4724 27.7522 25.6249 27.4997 25.6249H26.2497C26.0834 25.6249 25.9247 25.6912 25.8072 25.8087C25.6903 25.9262 25.6241 26.0849 25.6247 26.2512V27.4999Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7894 27.2225C18.3056 27.805 16.69 28.125 15 28.125C7.75625 28.125 1.875 22.2438 1.875 15C1.875 7.75625 7.75625 1.875 15 1.875C22.2438 1.875 28.125 7.75625 28.125 15C28.125 16.6856 27.8069 18.2975 27.2269 19.7775C27.1012 20.0988 27.26 20.4619 27.5813 20.5875C27.9025 20.7131 28.265 20.555 28.3906 20.2337C29.0262 18.6119 29.375 16.8463 29.375 15C29.375 7.06625 22.9338 0.625 15 0.625C7.06625 0.625 0.625 7.06625 0.625 15C0.625 22.9338 7.06625 29.375 15 29.375C16.8513 29.375 18.6206 29.0244 20.2463 28.3856C20.5675 28.26 20.7256 27.8969 20.6 27.5756C20.4737 27.2544 20.1106 27.0963 19.7894 27.2225Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.4819 22.3425C17.4263 22.8444 16.2456 23.125 15 23.125C10.5156 23.125 6.875 19.4844 6.875 15C6.875 10.5156 10.5156 6.875 15 6.875C19.4844 6.875 23.125 10.5156 23.125 15C23.125 16.2456 22.8444 17.4263 22.3425 18.4813C22.1944 18.7931 22.3269 19.1663 22.6381 19.3144C22.95 19.4625 23.3231 19.33 23.4712 19.0181C24.0506 17.8 24.375 16.4375 24.375 15C24.375 9.82562 20.1744 5.625 15 5.625C9.82562 5.625 5.625 9.82562 5.625 15C5.625 20.1744 9.82562 24.375 15 24.375C16.4375 24.375 17.8 24.0506 19.0181 23.4712C19.33 23.3231 19.4625 22.95 19.3144 22.6381C19.1663 22.3269 18.7931 22.1944 18.4819 22.3425Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M15.1744 18.12C15.1162 18.1231 15.0581 18.125 15 18.125C13.275 18.125 11.875 16.725 11.875 15C11.875 13.275 13.275 11.875 15 11.875C16.725 11.875 18.125 13.275 18.125 15C18.125 15.0581 18.1231 15.1162 18.12 15.1744C18.1013 15.5187 18.3656 15.8138 18.71 15.8325C19.0544 15.8519 19.3494 15.5875 19.3681 15.2431C19.3725 15.1625 19.375 15.0813 19.375 15C19.375 12.5856 17.4144 10.625 15 10.625C12.5856 10.625 10.625 12.5856 10.625 15C10.625 17.4144 12.5856 19.375 15 19.375C15.0813 19.375 15.1625 19.3725 15.2431 19.3681C15.5875 19.3494 15.8519 19.0544 15.8331 18.71C15.8138 18.3656 15.5187 18.1013 15.1744 18.12Z"
                                              fill="#A62274"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_571_2997">
                                            <rect width="30" height="30" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <ul class="tricolor-list">
                            <li>
                                <p>We don’t stop until the right leader is hired.</p>
                            </li>
                            <li>
                                <p>Trusted by founders, boards, and private equity.</p>
                            </li>
                            <li>
                                <p>Quality over quantity. Always.</p>
                            </li>
                            <li>
                                <p>Precision search with zero compromise.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tricolor-card tricolor-card-blue lift-hover" onclick="bringToFront('blue')">
                        <div class="tricolor-header">
                            <div class="tricolor-header-text">
                                <h3>Global Presence</h3>
                                <p>24 Countries</p>
                            </div>
                            <div class="header-icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                        fill="none">
                                    <g clip-path="url(#clip0_571_2997)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M20.8072 21.6918C20.6903 21.9362 20.6247 22.2106 20.6247 22.4999V24.9818C20.6247 25.4762 20.8203 25.9512 21.1691 26.3024L23.6691 28.8206C24.2041 29.3599 25.0116 29.523 25.7141 29.2337C26.4166 28.9443 26.8747 28.2593 26.8747 27.4999V26.8749H27.4997C28.2578 26.8749 28.9416 26.4181 29.2322 25.7174C29.5222 25.0168 29.3616 24.2106 28.8253 23.6743L26.3253 21.1743C25.9741 20.8224 25.4972 20.6249 24.9997 20.6249H22.4997C22.2103 20.6249 21.9359 20.6906 21.6916 20.8074L15.4416 14.5581C15.1978 14.3143 14.8016 14.3143 14.5578 14.5581C14.3141 14.8018 14.3141 15.1981 14.5578 15.4418L20.8072 21.6918ZM25.6247 27.4999C25.6247 27.7531 25.4722 27.9812 25.2378 28.078C25.0034 28.1743 24.7347 28.1199 24.5559 27.9399L22.0559 25.4218C21.9397 25.3049 21.8747 25.1462 21.8747 24.9818V22.4999C21.8747 22.1549 22.1547 21.8749 22.4997 21.8749H24.9997C25.1653 21.8749 25.3247 21.9406 25.4416 22.0581L27.9416 24.5581C28.1203 24.7368 28.1741 25.0056 28.0772 25.2393C27.9803 25.4724 27.7522 25.6249 27.4997 25.6249H26.2497C26.0834 25.6249 25.9247 25.6912 25.8072 25.8087C25.6903 25.9262 25.6241 26.0849 25.6247 26.2512V27.4999Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7894 27.2225C18.3056 27.805 16.69 28.125 15 28.125C7.75625 28.125 1.875 22.2438 1.875 15C1.875 7.75625 7.75625 1.875 15 1.875C22.2438 1.875 28.125 7.75625 28.125 15C28.125 16.6856 27.8069 18.2975 27.2269 19.7775C27.1012 20.0988 27.26 20.4619 27.5813 20.5875C27.9025 20.7131 28.265 20.555 28.3906 20.2337C29.0262 18.6119 29.375 16.8463 29.375 15C29.375 7.06625 22.9338 0.625 15 0.625C7.06625 0.625 0.625 7.06625 0.625 15C0.625 22.9338 7.06625 29.375 15 29.375C16.8513 29.375 18.6206 29.0244 20.2463 28.3856C20.5675 28.26 20.7256 27.8969 20.6 27.5756C20.4737 27.2544 20.1106 27.0963 19.7894 27.2225Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.4819 22.3425C17.4263 22.8444 16.2456 23.125 15 23.125C10.5156 23.125 6.875 19.4844 6.875 15C6.875 10.5156 10.5156 6.875 15 6.875C19.4844 6.875 23.125 10.5156 23.125 15C23.125 16.2456 22.8444 17.4263 22.3425 18.4813C22.1944 18.7931 22.3269 19.1663 22.6381 19.3144C22.95 19.4625 23.3231 19.33 23.4712 19.0181C24.0506 17.8 24.375 16.4375 24.375 15C24.375 9.82562 20.1744 5.625 15 5.625C9.82562 5.625 5.625 9.82562 5.625 15C5.625 20.1744 9.82562 24.375 15 24.375C16.4375 24.375 17.8 24.0506 19.0181 23.4712C19.33 23.3231 19.4625 22.95 19.3144 22.6381C19.1663 22.3269 18.7931 22.1944 18.4819 22.3425Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M15.1744 18.12C15.1162 18.1231 15.0581 18.125 15 18.125C13.275 18.125 11.875 16.725 11.875 15C11.875 13.275 13.275 11.875 15 11.875C16.725 11.875 18.125 13.275 18.125 15C18.125 15.0581 18.1231 15.1162 18.12 15.1744C18.1013 15.5187 18.3656 15.8138 18.71 15.8325C19.0544 15.8519 19.3494 15.5875 19.3681 15.2431C19.3725 15.1625 19.375 15.0813 19.375 15C19.375 12.5856 17.4144 10.625 15 10.625C12.5856 10.625 10.625 12.5856 10.625 15C10.625 17.4144 12.5856 19.375 15 19.375C15.0813 19.375 15.1625 19.3725 15.2431 19.3681C15.5875 19.3494 15.8519 19.0544 15.8331 18.71C15.8138 18.3656 15.5187 18.1013 15.1744 18.12Z"
                                              fill="#A62274"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_571_2997">
                                            <rect width="30" height="30" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <ul class="tricolor-list">
                            <li>
                                <p>Local and cross-border search capability.</p>
                            </li>
                            <li>
                                <p>Access to passive ‘A’ Player talent in key global markets.</p>
                            </li>
                            <li>
                                <p>Culturally aware, globally connected.</p>
                            </li>
                            <li>
                                <p>Supporting our clients’ international growth.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tricolor-card tricolor-card-green lift-hover" onclick="bringToFront('green')">
                        <div class="tricolor-header">
                            <div class="tricolor-header-text">
                                <h3>Hire Longevity</h3>
                                <p>3+ Years</p>
                            </div>
                            <div class="header-icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                        fill="none">
                                    <g clip-path="url(#clip0_571_2997)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M20.8072 21.6918C20.6903 21.9362 20.6247 22.2106 20.6247 22.4999V24.9818C20.6247 25.4762 20.8203 25.9512 21.1691 26.3024L23.6691 28.8206C24.2041 29.3599 25.0116 29.523 25.7141 29.2337C26.4166 28.9443 26.8747 28.2593 26.8747 27.4999V26.8749H27.4997C28.2578 26.8749 28.9416 26.4181 29.2322 25.7174C29.5222 25.0168 29.3616 24.2106 28.8253 23.6743L26.3253 21.1743C25.9741 20.8224 25.4972 20.6249 24.9997 20.6249H22.4997C22.2103 20.6249 21.9359 20.6906 21.6916 20.8074L15.4416 14.5581C15.1978 14.3143 14.8016 14.3143 14.5578 14.5581C14.3141 14.8018 14.3141 15.1981 14.5578 15.4418L20.8072 21.6918ZM25.6247 27.4999C25.6247 27.7531 25.4722 27.9812 25.2378 28.078C25.0034 28.1743 24.7347 28.1199 24.5559 27.9399L22.0559 25.4218C21.9397 25.3049 21.8747 25.1462 21.8747 24.9818V22.4999C21.8747 22.1549 22.1547 21.8749 22.4997 21.8749H24.9997C25.1653 21.8749 25.3247 21.9406 25.4416 22.0581L27.9416 24.5581C28.1203 24.7368 28.1741 25.0056 28.0772 25.2393C27.9803 25.4724 27.7522 25.6249 27.4997 25.6249H26.2497C26.0834 25.6249 25.9247 25.6912 25.8072 25.8087C25.6903 25.9262 25.6241 26.0849 25.6247 26.2512V27.4999Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7894 27.2225C18.3056 27.805 16.69 28.125 15 28.125C7.75625 28.125 1.875 22.2438 1.875 15C1.875 7.75625 7.75625 1.875 15 1.875C22.2438 1.875 28.125 7.75625 28.125 15C28.125 16.6856 27.8069 18.2975 27.2269 19.7775C27.1012 20.0988 27.26 20.4619 27.5813 20.5875C27.9025 20.7131 28.265 20.555 28.3906 20.2337C29.0262 18.6119 29.375 16.8463 29.375 15C29.375 7.06625 22.9338 0.625 15 0.625C7.06625 0.625 0.625 7.06625 0.625 15C0.625 22.9338 7.06625 29.375 15 29.375C16.8513 29.375 18.6206 29.0244 20.2463 28.3856C20.5675 28.26 20.7256 27.8969 20.6 27.5756C20.4737 27.2544 20.1106 27.0963 19.7894 27.2225Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.4819 22.3425C17.4263 22.8444 16.2456 23.125 15 23.125C10.5156 23.125 6.875 19.4844 6.875 15C6.875 10.5156 10.5156 6.875 15 6.875C19.4844 6.875 23.125 10.5156 23.125 15C23.125 16.2456 22.8444 17.4263 22.3425 18.4813C22.1944 18.7931 22.3269 19.1663 22.6381 19.3144C22.95 19.4625 23.3231 19.33 23.4712 19.0181C24.0506 17.8 24.375 16.4375 24.375 15C24.375 9.82562 20.1744 5.625 15 5.625C9.82562 5.625 5.625 9.82562 5.625 15C5.625 20.1744 9.82562 24.375 15 24.375C16.4375 24.375 17.8 24.0506 19.0181 23.4712C19.33 23.3231 19.4625 22.95 19.3144 22.6381C19.1663 22.3269 18.7931 22.1944 18.4819 22.3425Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M15.1744 18.12C15.1162 18.1231 15.0581 18.125 15 18.125C13.275 18.125 11.875 16.725 11.875 15C11.875 13.275 13.275 11.875 15 11.875C16.725 11.875 18.125 13.275 18.125 15C18.125 15.0581 18.1231 15.1162 18.12 15.1744C18.1013 15.5187 18.3656 15.8138 18.71 15.8325C19.0544 15.8519 19.3494 15.5875 19.3681 15.2431C19.3725 15.1625 19.375 15.0813 19.375 15C19.375 12.5856 17.4144 10.625 15 10.625C12.5856 10.625 10.625 12.5856 10.625 15C10.625 17.4144 12.5856 19.375 15 19.375C15.0813 19.375 15.1625 19.3725 15.2431 19.3681C15.5875 19.3494 15.8519 19.0544 15.8331 18.71C15.8138 18.3656 15.5187 18.1013 15.1744 18.12Z"
                                              fill="#A62274"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_571_2997">
                                            <rect width="30" height="30" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <ul class="tricolor-list">
                            <li>
                                <p>We place for impact, not just fit.</p>
                            </li>
                            <li>
                                <p>Proven track record of long-term performance.</p>
                            </li>
                            <li>
                                <p>Cultural alignment built into every shortlist.</p>
                            </li>
                            <li>
                                <p>Saves you time, money, and future turnover.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tricolor-card tricolor-card-main lift-hover" onclick="bringToFront('main')">
                        <div class="tricolor-header">
                            <div class="tricolor-header-text">
                                <h3>Average Time to Hire</h3>
                                <p>2.5 Months</p>
                            </div>
                            <div class="header-icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                        fill="none">
                                    <g clip-path="url(#clip0_571_2997)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M20.8072 21.6918C20.6903 21.9362 20.6247 22.2106 20.6247 22.4999V24.9818C20.6247 25.4762 20.8203 25.9512 21.1691 26.3024L23.6691 28.8206C24.2041 29.3599 25.0116 29.523 25.7141 29.2337C26.4166 28.9443 26.8747 28.2593 26.8747 27.4999V26.8749H27.4997C28.2578 26.8749 28.9416 26.4181 29.2322 25.7174C29.5222 25.0168 29.3616 24.2106 28.8253 23.6743L26.3253 21.1743C25.9741 20.8224 25.4972 20.6249 24.9997 20.6249H22.4997C22.2103 20.6249 21.9359 20.6906 21.6916 20.8074L15.4416 14.5581C15.1978 14.3143 14.8016 14.3143 14.5578 14.5581C14.3141 14.8018 14.3141 15.1981 14.5578 15.4418L20.8072 21.6918ZM25.6247 27.4999C25.6247 27.7531 25.4722 27.9812 25.2378 28.078C25.0034 28.1743 24.7347 28.1199 24.5559 27.9399L22.0559 25.4218C21.9397 25.3049 21.8747 25.1462 21.8747 24.9818V22.4999C21.8747 22.1549 22.1547 21.8749 22.4997 21.8749H24.9997C25.1653 21.8749 25.3247 21.9406 25.4416 22.0581L27.9416 24.5581C28.1203 24.7368 28.1741 25.0056 28.0772 25.2393C27.9803 25.4724 27.7522 25.6249 27.4997 25.6249H26.2497C26.0834 25.6249 25.9247 25.6912 25.8072 25.8087C25.6903 25.9262 25.6241 26.0849 25.6247 26.2512V27.4999Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7894 27.2225C18.3056 27.805 16.69 28.125 15 28.125C7.75625 28.125 1.875 22.2438 1.875 15C1.875 7.75625 7.75625 1.875 15 1.875C22.2438 1.875 28.125 7.75625 28.125 15C28.125 16.6856 27.8069 18.2975 27.2269 19.7775C27.1012 20.0988 27.26 20.4619 27.5813 20.5875C27.9025 20.7131 28.265 20.555 28.3906 20.2337C29.0262 18.6119 29.375 16.8463 29.375 15C29.375 7.06625 22.9338 0.625 15 0.625C7.06625 0.625 0.625 7.06625 0.625 15C0.625 22.9338 7.06625 29.375 15 29.375C16.8513 29.375 18.6206 29.0244 20.2463 28.3856C20.5675 28.26 20.7256 27.8969 20.6 27.5756C20.4737 27.2544 20.1106 27.0963 19.7894 27.2225Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.4819 22.3425C17.4263 22.8444 16.2456 23.125 15 23.125C10.5156 23.125 6.875 19.4844 6.875 15C6.875 10.5156 10.5156 6.875 15 6.875C19.4844 6.875 23.125 10.5156 23.125 15C23.125 16.2456 22.8444 17.4263 22.3425 18.4813C22.1944 18.7931 22.3269 19.1663 22.6381 19.3144C22.95 19.4625 23.3231 19.33 23.4712 19.0181C24.0506 17.8 24.375 16.4375 24.375 15C24.375 9.82562 20.1744 5.625 15 5.625C9.82562 5.625 5.625 9.82562 5.625 15C5.625 20.1744 9.82562 24.375 15 24.375C16.4375 24.375 17.8 24.0506 19.0181 23.4712C19.33 23.3231 19.4625 22.95 19.3144 22.6381C19.1663 22.3269 18.7931 22.1944 18.4819 22.3425Z"
                                              fill="#A62274"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M15.1744 18.12C15.1162 18.1231 15.0581 18.125 15 18.125C13.275 18.125 11.875 16.725 11.875 15C11.875 13.275 13.275 11.875 15 11.875C16.725 11.875 18.125 13.275 18.125 15C18.125 15.0581 18.1231 15.1162 18.12 15.1744C18.1013 15.5187 18.3656 15.8138 18.71 15.8325C19.0544 15.8519 19.3494 15.5875 19.3681 15.2431C19.3725 15.1625 19.375 15.0813 19.375 15C19.375 12.5856 17.4144 10.625 15 10.625C12.5856 10.625 10.625 12.5856 10.625 15C10.625 17.4144 12.5856 19.375 15 19.375C15.0813 19.375 15.1625 19.3725 15.2431 19.3681C15.5875 19.3494 15.8519 19.0544 15.8331 18.71C15.8138 18.3656 15.5187 18.1013 15.1744 18.12Z"
                                              fill="#A62274"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_571_2997">
                                            <rect width="30" height="30" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <ul class="tricolor-list">
                            <li>
                                <p>Faster than industry average without sacrificing quality.</p>
                            </li>
                            <li>
                                <p>Streamlined, data-led process from brief to offer.</p>
                            </li>
                            <li>
                                <p>Delivers momentum to your leadership team.</p>
                            </li>
                            <li>
                                <p>Speeds up access to the A Players who raise the bar.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function bringToFront(cardType) {
        // Get all four cards with service-hero-section scope
        const blueCard = document.querySelector('.service-hero-section .tricolor-card-blue');
        const greenCard = document.querySelector('.service-hero-section .tricolor-card-green');
        const purpleCard = document.querySelector('.service-hero-section .tricolor-card-purple');
        const mainCard = document.querySelector('.service-hero-section .tricolor-card:not(.tricolor-card-blue):not(.tricolor-card-green):not(.tricolor-card-purple)');

        // Remove active class from all cards
        blueCard.classList.remove('active');
        greenCard.classList.remove('active');
        purpleCard.classList.remove('active');
        mainCard.classList.remove('active');

        // Add active class to the clicked card
        if (cardType === 'blue') {
            blueCard.classList.add('active');
        } else if (cardType === 'green') {
            greenCard.classList.add('active');
        } else if (cardType === 'purple') {
            purpleCard.classList.add('active');
        } else if (cardType === 'main') {
            mainCard.classList.add('active');
        }
    }

    // Set main card as active by default when page loads
    document.addEventListener('DOMContentLoaded', function () {
        bringToFront('main');
    });
</script>
