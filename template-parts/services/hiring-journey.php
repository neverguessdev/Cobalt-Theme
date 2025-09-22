<?php
/**
 * Template part for displaying the service hiring journey section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .journey-box {
        border-radius: 20px;
        border: 1px solid #D2D2D2;
        background: #FFF;
        position: relative;
    }

    .trigger-button {
        position: absolute;
        top: 26px;
        right: 26px;
        cursor: pointer;
    }

    .journey-boxes {
        margin-top: 50px;
    }

    .journey-box:nth-child(2) {
        margin-top: 30px;
    }

    .journey-box:not(:last-child) {
        margin-bottom: 50px;
    }

    .journey-box-header {
        display: flex;
        gap: 30px;
        padding: 26px;
    }

    .service-hiring-journey-section .section-header {
        max-width: 880px;
        margin: 0 auto;
    }

    .service-hiring-journey-section h2.section-title {
        max-width: 709px;
        margin: 0 auto 20px;
    }

    .service-hiring-journey-section p.section-subtext {
        margin-bottom: 12px;
    }

    .journey-header-icon {
    }

    .journey-header-icon svg {
        flex-shrink: 0;
    }

    h3.journey-box-title {
        color: #202020;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%; /* 38.4px */
    }

    .journey-box-header {
        display: flex;
        gap: 30px;
        padding: 26px;
    }

    .journey-header-icon {
    }

    .journey-header-icon svg {
        flex-shrink: 0;
    }

    h3.journey-box-title {
        color: #202020;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%; /* 38.4px */
    }

    .journey-box-content-left {
        padding: 64px 52px 50px 50px;
        background: #A62274 url("/wp-content/uploads/2025/08/magni.png") no-repeat bottom right;
        border-radius: 20px 0 0 20px;
    }

    .journey-box:nth-child(3) .journey-box-content-left {
        padding: 64px 52px 50px 50px;
        background: #1B4F9E url("/wp-content/uploads/2025/08/magni.png") no-repeat bottom right;
        border-radius: 20px 0 0 20px;
    }

    .journey-box:nth-child(4) .journey-box-content-left {
        padding: 64px 52px 50px 50px;
        background: #3FA635 url("/wp-content/uploads/2025/08/magni.png") no-repeat bottom right;
        border-radius: 20px 0 0 20px;
    }

    .journey-box:nth-child(2) .journey-box-content-right strong {
        color: #A62274
    }

    .journey-box:nth-child(3) .journey-box-content-right strong {
        color: #1B4F9E
    }

    .journey-box:nth-child(4) .journey-box-content-right strong {
        color: #3FA635;
    }

    .journey-box-content {
        display: flex;
        border-radius: inherit;
    }

    .journey-box-content > * {
        flex: 1 1 50%;
    }

    .journey-box-content-left h3 {
        color: #FFF;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 38.4px */
        margin-bottom: 16px;
    }

    .journey-box-content-left p {
        color: #FFF;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 32px */
        margin-bottom: 40px;
    }

    .journey-box-content-right {
        padding: 64px 62px 50px 80px;
    }

    ul.journey-list {
    }

    ul.journey-list li {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        gap: 16px;
    }

    ul.journey-list li svg {
        flex-shrink: 0;
        margin-top: 3px;
    }

    ul.journey-list li p {
        color: #202020;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%;
    }

    ul.journey-list li:not(:last-child) {
        margin-bottom: 20px;
    }

    /* Interactive states */
    .journey-box-content {
        display: none;
    }

    .journey-box.active .journey-box-content {
        display: flex;
    }

    .journey-box.active .journey-box-header {
        display: none;
    }

    .trigger-button svg {
        transition: transform 0.3s ease;
    }

    .journey-box.active .trigger-button svg {
        transform: rotate(180deg);
    }

    /* Section background color changes */
    .service-hiring-journey-section {
        transition: background-color 0.3s ease;
        background: #CADCFB;
    }

    .service-hiring-journey-section.purple-bg {
        background-color: #FCE4F3;
    }

    .service-hiring-journey-section.blue-bg {
        background-color: #CADCFB;
    }

    .service-hiring-journey-section.green-bg {
        background-color: #E6FEE3;
    }

    @media (max-width: 991px){
        .journey-box .journey-box-content {
            flex-direction: column;
        }

        .journey-box-content-left, .journey-box:nth-child(3) .journey-box-content-left, .journey-box:nth-child(4) .journey-box-content-left {
            padding: 80px 20px;
            border-radius: 20px 20px 0 0;
        }

        .journey-box-content-right {
            padding: 35px 20px;
        }

        .active .trigger-button path:first-child {
            fill: #fff;
        }

        .active .trigger-button path:last-child {
            fill: #A62274;
        }

        .journey-box:nth-child(3).active .trigger-button path:last-child {
            fill: #1B4F9E;
        }

        .journey-box:nth-child(4).active .trigger-button path:last-child {
            fill: #3FA635;
        }
    }

    @media (max-width: 767px){
        .journey-box:not(:last-child) {
            margin-bottom: 20px;
        }

        .journey-box-header {flex-direction: column;padding-bottom: 62px;}

        .trigger-button {
            bottom: 26px;
            top: unset;
        }

        .trigger-button {
            bottom: 26px;
            top: unset;
        }

        .journey-box-content-left > svg {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .journey-box-content-left {
            position: relative;
        }

        .trigger-button-close {
            position: absolute;
            bottom: 20px;
            right: 20px;
            transform: rotate(180deg);
        }

        h3.journey-box-title {
            font-size: 24px;
        }

        .journey-box-header {
            gap: 20px;
        }

        .journey-box-content-left h3 {
            font-size: 24px;
        }

        .journey-box-content-left p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        ul.journey-list li p {
            font-size: 16px;
        }

        .active .trigger-button {
            display: none;
        }

        section.service-hiring-journey-section .section-title {
            text-align: center;
        }
    }
</style>
<section class="service-hiring-journey-section">
    <div class="section-container service-hiring-journey-container">
        <div class="section-header text-center">
            <h2 class="section-title"><span class="blue-text">Find your next leader.</span> Without playing <span class="blue-text">hiring
                    roulette.</span></h2>
            <p class="section-subtext">Our average time to hire is 2.5 months. Our average longevity of hire is 3+
                years.</p>
            <p class="section-subtext">When the stakes are high, our process gives you confidence, alignment, and
                leaders who stay the course.</p>
        </div>
        <div class="journey-boxes">
            <h3 class="section-title">Where are you on your hiring journey?</h3>
            <div class="journey-box purple">
                <div class="trigger-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20Z"
                              fill="#A62274"/>
                        <path d="M12.9013 21.3865L13.8282 20.4516L19.3345 25.9658V12.1802H20.6656V25.9658L26.1719 20.4516L27.0989 21.3865L20.0001 28.4853L12.9013 21.3865Z"
                              fill="white"/>
                    </svg>
                </div>
                <div class="journey-box-header">
                    <div class="journey-header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0V0C37.2548 0 48 10.7452 48 24V24C48 37.2548 37.2548 48 24 48V48C10.7452 48 0 37.2548 0 24V24Z"
                                  fill="#A62274"/>
                            <path d="M28 33V31C28 29.9391 27.5786 28.9217 26.8284 28.1716C26.0783 27.4214 25.0609 27 24 27H18C16.9391 27 15.9217 27.4214 15.1716 28.1716C14.4214 28.9217 14 29.9391 14 31V33M34 33V31C33.9993 30.1137 33.7044 29.2528 33.1614 28.5523C32.6184 27.8519 31.8581 27.3516 31 27.13M28 15.13C28.8604 15.3503 29.623 15.8507 30.1676 16.5523C30.7122 17.2539 31.0078 18.1168 31.0078 19.005C31.0078 19.8932 30.7122 20.7561 30.1676 21.4577C29.623 22.1593 28.8604 22.6597 28 22.88M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="journey-box-title">Hiring for your <strong>first leadership role</strong></h3>
                </div>
                <div class="journey-box-content">
                    <div class="journey-box-content-left">
                        <svg class="d-block d-md-none" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0V0C37.2548 0 48 10.7452 48 24V24C48 37.2548 37.2548 48 24 48V48C10.7452 48 0 37.2548 0 24V24Z"
                                  fill="white"/>
                            <path d="M28 33V31C28 29.9391 27.5786 28.9217 26.8284 28.1716C26.0783 27.4214 25.0609 27 24 27H18C16.9391 27 15.9217 27.4214 15.1716 28.1716C14.4214 28.9217 14 29.9391 14 31V33M34 33V31C33.9993 30.1137 33.7044 29.2528 33.1614 28.5523C32.6184 27.8519 31.8581 27.3516 31 27.13M28 15.13C28.8604 15.3503 29.623 15.8507 30.1676 16.5523C30.7122 17.2539 31.0078 18.1168 31.0078 19.005C31.0078 19.8932 30.7122 20.7561 30.1676 21.4577C29.623 22.1593 28.8604 22.6597 28 22.88M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z"
                                  stroke="#A62274" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3>Hiring for your first leadership role</h3>
                        <p>Switching from founder-led to leadership-led is personal. We’ll guide you through every step,
                            from defining the role to finding someone who’ll lead like they built the business
                            themselves.</p>
                        <a href="/contact-us" class="content-cta lift-hover lift-hover-blue">
                            START YOUR FIRST SEARCH
                            <span class="content-cta-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37"
                                     fill="none">
                                    <rect width="36" height="37" rx="18" fill="#A62274"></rect>
                                    <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                          fill="white"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="trigger-button-close d-block d-md-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20Z"
                                      fill="white"/>
                                <path d="M12.9013 21.3865L13.8282 20.4516L19.3345 25.9658V12.1802H20.6656V25.9658L26.1719 20.4516L27.0989 21.3865L20.0001 28.4853L12.9013 21.3865Z"
                                      fill="#A62274"/>
                            </svg>
                        </div>
                    </div>
                    <div class="journey-box-content-right">
                        <ul class="journey-list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#A62274" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#A62274"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Strategic role design</strong> to clarify responsibilities, reporting lines,
                                    and long-term value</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#A62274" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#A62274"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Market benchmarking</strong> so your role is competitive and compelling to
                                    ‘A’ Player talent</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#A62274" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#A62274"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Deep cultural alignment</strong> to ensure they protect and enhance what
                                    you’ve built, not disrupt it</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#A62274" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#A62274"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Structured onboarding support</strong> so onboarding feels confident, not
                                    chaotic</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#A62274" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#A62274"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Guidance from day one</strong> to help you delegate without losing direction
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="journey-box blue">
                <div class="trigger-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20Z"
                              fill="#1B4F9E"/>
                        <path d="M12.9013 21.3865L13.8282 20.4516L19.3345 25.9658V12.1802H20.6656V25.9658L26.1719 20.4516L27.0989 21.3865L20.0001 28.4853L12.9013 21.3865Z"
                              fill="white"/>
                    </svg>
                </div>
                <div class="journey-box-header">
                    <div class="journey-header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0V0C37.2548 0 48 10.7452 48 24V24C48 37.2548 37.2548 48 24 48V48C10.7452 48 0 37.2548 0 24V24Z"
                                  fill="#1B4F9E"/>
                            <path d="M28 33V31C28 29.9391 27.5786 28.9217 26.8284 28.1716C26.0783 27.4214 25.0609 27 24 27H18C16.9391 27 15.9217 27.4214 15.1716 28.1716C14.4214 28.9217 14 29.9391 14 31V33M34 33V31C33.9993 30.1137 33.7044 29.2528 33.1614 28.5523C32.6184 27.8519 31.8581 27.3516 31 27.13M28 15.13C28.8604 15.3503 29.623 15.8507 30.1676 16.5523C30.7122 17.2539 31.0078 18.1168 31.0078 19.005C31.0078 19.8932 30.7122 20.7561 30.1676 21.4577C29.623 22.1593 28.8604 22.6597 28 22.88M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="journey-box-title"><strong>Expanding</strong> your senior leadership team</h3>
                </div>
                <div class="journey-box-content">
                    <div class="journey-box-content-left">
                        <svg class="d-block d-md-none" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0V0C37.2548 0 48 10.7452 48 24V24C48 37.2548 37.2548 48 24 48V48C10.7452 48 0 37.2548 0 24V24Z"
                                  fill="white"/>
                            <path d="M28 33V31C28 29.9391 27.5786 28.9217 26.8284 28.1716C26.0783 27.4214 25.0609 27 24 27H18C16.9391 27 15.9217 27.4214 15.1716 28.1716C14.4214 28.9217 14 29.9391 14 31V33M34 33V31C33.9993 30.1137 33.7044 29.2528 33.1614 28.5523C32.6184 27.8519 31.8581 27.3516 31 27.13M28 15.13C28.8604 15.3503 29.623 15.8507 30.1676 16.5523C30.7122 17.2539 31.0078 18.1168 31.0078 19.005C31.0078 19.8932 30.7122 20.7561 30.1676 21.4577C29.623 22.1593 28.8604 22.6597 28 22.88M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z"
                                  stroke="#1B4F9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3>Expanding your senior leadership team</h3>
                        <p>As your business grows, gaps in delivery, operations, and alignment start to surface. We help
                            you find leaders who bring clarity, structure, and momentum, so you can grow without losing
                            what makes your team and business great.</p>
                        <a href="/contact-us" class="content-cta lift-hover lift-hover-blue">
                            BUILD YOUR LEADERSHIP BENCH
                            <span class="content-cta-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37"
                                     fill="none">
                                    <rect width="36" height="37" rx="18" fill="#1B4F9E"></rect>
                                    <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                          fill="white"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="trigger-button-close d-block d-md-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20Z"
                                      fill="white"/>
                                <path d="M12.9013 21.3865L13.8282 20.4516L19.3345 25.9658V12.1802H20.6656V25.9658L26.1719 20.4516L27.0989 21.3865L20.0001 28.4853L12.9013 21.3865Z"
                                      fill="#1B4F9E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="journey-box-content-right">
                        <ul class="journey-list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#1B4F9E" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#1B4F9E"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>High-impact search</strong> designed to attract experienced and outstanding
                                    leaders</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#1B4F9E" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#1B4F9E"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Structured, two-round interviews</strong> to assess performance and cultural
                                    fit</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#1B4F9E" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#1B4F9E"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Deep alignment</strong> with your growth plans, values, and team dynamict</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#1B4F9E" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#1B4F9E"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Smart execution</strong> that protects your momentum and delivers long-term
                                    value</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#1B4F9E" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#1B4F9E"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Strategic 90-day onboarding support</strong> Strategic 90-day onboarding
                                    support</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="journey-box green">
                <div class="trigger-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20Z"
                              fill="#3FA635"/>
                        <path d="M12.9013 21.3865L13.8282 20.4516L19.3345 25.9658V12.1802H20.6656V25.9658L26.1719 20.4516L27.0989 21.3865L20.0001 28.4853L12.9013 21.3865Z"
                              fill="white"/>
                    </svg>
                </div>
                <div class="journey-box-header">
                    <div class="journey-header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0V0C37.2548 0 48 10.7452 48 24V24C48 37.2548 37.2548 48 24 48V48C10.7452 48 0 37.2548 0 24V24Z"
                                  fill="#3FA635"/>
                            <path d="M28 33V17C28 16.4696 27.7893 15.9609 27.4142 15.5858C27.0391 15.2107 26.5304 15 26 15H22C21.4696 15 20.9609 15.2107 20.5858 15.5858C20.2107 15.9609 20 16.4696 20 17V33M16 19H32C33.1046 19 34 19.8954 34 21V31C34 32.1046 33.1046 33 32 33H16C14.8954 33 14 32.1046 14 31V21C14 19.8954 14.8954 19 16 19Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="journey-box-title">Attracting <strong>outstanding talent</strong> to large organisations
                    </h3>
                </div>
                <div class="journey-box-content">
                    <div class="journey-box-content-left">
                        <svg class="d-block d-md-none" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0V0C37.2548 0 48 10.7452 48 24V24C48 37.2548 37.2548 48 24 48V48C10.7452 48 0 37.2548 0 24V24Z"
                                  fill="white"/>
                            <path d="M28 33V31C28 29.9391 27.5786 28.9217 26.8284 28.1716C26.0783 27.4214 25.0609 27 24 27H18C16.9391 27 15.9217 27.4214 15.1716 28.1716C14.4214 28.9217 14 29.9391 14 31V33M34 33V31C33.9993 30.1137 33.7044 29.2528 33.1614 28.5523C32.6184 27.8519 31.8581 27.3516 31 27.13M28 15.13C28.8604 15.3503 29.623 15.8507 30.1676 16.5523C30.7122 17.2539 31.0078 18.1168 31.0078 19.005C31.0078 19.8932 30.7122 20.7561 30.1676 21.4577C29.623 22.1593 28.8604 22.6597 28 22.88M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z"
                                  stroke="#3FA635" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3>Attracting outstanding talent to large organisations</h3>
                        <p>In crowded markets, reach isn’t enough. We bring deep market insight and a proven process to
                            help your recruitment team hire with precision and peace of mind.</p>
                        <a href="/contact-us" class="content-cta lift-hover lift-hover-blue">
                            PARTNER WITH US
                            <span class="content-cta-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37"
                                     fill="none">
                                    <rect width="36" height="37" rx="18" fill="#3FA635"></rect>
                                    <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                          fill="white"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="trigger-button-close d-block d-md-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20Z"
                                      fill="white"/>
                                <path d="M12.9013 21.3865L13.8282 20.4516L19.3345 25.9658V12.1802H20.6656V25.9658L26.1719 20.4516L27.0989 21.3865L20.0001 28.4853L12.9013 21.3865Z"
                                      fill="#3FA635"/>
                            </svg>
                        </div>
                    </div>
                    <div class="journey-box-content-right">
                        <ul class="journey-list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#3FA635" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#3FA635"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Deep market mapping</strong> to surface top-tier candidates beyond your
                                    existing network.</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#3FA635" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#3FA635"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Data-backed benchmarking</strong> to ensure role positioning and compensation
                                    are competitive.</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#3FA635" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#3FA635"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Confidential and global search options</strong> for sensitive or hard-to-fill
                                    roles.</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#3FA635" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#3FA635"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Flexible partnership model</strong> that fits alongside your internal team.
                                </p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_648_470)">
                                        <path d="M21.8006 9.99999C22.2573 12.2413 21.9318 14.5714 20.8785 16.6018C19.8251 18.6322 18.1075 20.24 16.0121 21.1573C13.9167 22.0746 11.5702 22.2458 9.36391 21.6424C7.15758 21.0389 5.2248 19.6974 3.88789 17.8414C2.55097 15.9854 1.89073 13.7272 2.01728 11.4434C2.14382 9.15952 3.04949 6.98808 4.58326 5.29116C6.11703 3.59424 8.18619 2.47442 10.4457 2.11844C12.7052 1.76247 15.0184 2.19185 16.9996 3.33499"
                                              stroke="#3FA635" stroke-width="2.2792" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9 11.0001L12 14.0001L22 4.00008" stroke="#3FA635"
                                              stroke-width="2.2792" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_470">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p><strong>Insightful reporting and communication</strong> that supports internal
                                    decision-making.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const journeyBoxes = document.querySelectorAll('.journey-box');
    const section = document.querySelector('.service-hiring-journey-section');

    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio >= 0.5) {
                // Close all other boxes first
                /*journeyBoxes.forEach(function(otherBox) {
                    if (otherBox !== entry.target) {
                        otherBox.classList.remove('active');
                    }
                });*/

                // Add active class to current box
                entry.target.classList.add('active');

                // Update section background
                section.classList.remove('purple-bg', 'blue-bg', 'green-bg');
                if (entry.target.classList.contains('purple')) {
                    section.classList.add('purple-bg');
                } else if (entry.target.classList.contains('blue')) {
                    section.classList.add('blue-bg');
                } else if (entry.target.classList.contains('green')) {
                    section.classList.add('green-bg');
                }
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of element is visible
    });

    // Observe all journey boxes
    journeyBoxes.forEach(box => observer.observe(box));

    // Keep the existing click handlers
    journeyBoxes.forEach(function(box) {
        const triggerButton = box.querySelector('.trigger-button');
        const closeButton = box.querySelector('.trigger-button-close');
        const header = box.querySelector('.journey-box-header');

        // Function to handle opening/closing boxes
        function toggleBox() {
            // Close all other boxes first
            /*journeyBoxes.forEach(function(otherBox) {
                if (otherBox !== box) {
                    otherBox.classList.remove('active');
                }
            });*/

            // Toggle current box
            box.classList.toggle('active');

            // Update section background based on active box
            section.classList.remove('purple-bg', 'blue-bg', 'green-bg');

            if (box.classList.contains('active')) {
                if (box.classList.contains('purple')) {
                    section.classList.add('purple-bg');
                } else if (box.classList.contains('blue')) {
                    section.classList.add('blue-bg');
                } else if (box.classList.contains('green')) {
                    section.classList.add('green-bg');
                }
            }
        }

        // Function to close box
        function closeBox() {
            box.classList.remove('active');
            section.classList.remove('purple-bg', 'blue-bg', 'green-bg');
        }

        // Add event listeners
        if (triggerButton) {
            triggerButton.addEventListener('click', toggleBox);
        }

        if (closeButton) {
            closeButton.addEventListener('click', closeBox);
        }

        // Add click event to journey-box-header
        if (header) {
            header.addEventListener('click', toggleBox);
        }
    });
});
</script>
