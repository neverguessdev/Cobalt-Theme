<?php
/**
 * Template part for displaying the service leadership section
 *
 * @package Cobalt Theme
 */
?>
<style>
    .service-leadership-section {
        background-image: url("/wp-content/uploads/2025/09/magni-pink-4.png"), url("/wp-content/uploads/2025/08/pink-magni-small.png"), url("/wp-content/uploads/2025/07/blue-arrow-bg.png"), url("/wp-content/uploads/2025/09/swirl-blue.png");
        background-position: top -105px right, bottom left, top 283px right 106px, top 112px left;
        background-repeat: no-repeat;
        padding: 80px 20px 140px;
        background-size: auto, auto, contain, auto;
    }

    .service-leadership-section .section-header {
        margin: 0 auto;
        max-width: 780px;
    }

    .service-leadership-section .section-title {
        margin-bottom: 20px;
    }

    .service-leadership-section .section-subtext:not(:last-child) {
        margin-bottom: 12px;
    }

    .leadership-keys {
        display: flex;
        gap: 30px;
        align-items: flex-start;
        margin-top: 64px;
    }

    .leadership-key {
        flex: 1 1 100%;
        border-radius: 18.998px;
        border: 1px solid #D2D2D2;
        background: #DDE9FF;
        box-shadow: 0 5.699px 9.499px 0 rgba(204, 204, 204, 0.25);
        padding: 30px 27px 40px 30px;
    }

    .lk-icon {
        padding: 17px;
        border-radius: 12px;
        background: #1B4F9E;
        width: 70px;
        margin-bottom: 20px;
    }

    .lk-icon svg {
        flex-shrink: 0;
    }

    .lk-title {
        color: #1B4F9E;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 38.4px */
        margin-bottom: 12px;
    }

    .lk-text {
        color: #3C3C3B;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 32px */
    }

    .leadership-key:nth-child(1) {

    }

    .leadership-key:nth-child(2) {
        margin-top: 60px;
        background: #FCE4F3;
    }

    .leadership-key:nth-child(2) .lk-icon {
        background: #A62274;
    }

    .leadership-key:nth-child(2) .lk-title {
        color: #A62274;
    }

    .leadership-key:nth-child(3) {
        background: #E6FEE3;
    }

    .leadership-key:nth-child(3) .lk-icon {
        background: #3FA535;
    }

    .leadership-key:nth-child(3) .lk-title {
        color: #3FA535;
    }

    .service-leadership-section .section-pretitle {
        margin-bottom: 10px;
    }

    /* Tablet */
    @media (max-width: 900px) {
        .leadership-keys {
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }

        .leadership-key {
            width: 100%;
        }

        .leadership-key:nth-child(2) {
            margin-top: 0;
        }
    }

    /* Mobile - Slider Layout */
    @media (max-width: 767px) {
        .service-leadership-section {
            background-image: url("/wp-content/uploads/2025/08/pink-magni-small.png");
            background-position: bottom left;
            background-size: 23%;
            padding: 20px 20px;
        }

        .service-leadership-section {
            padding: 20px;
        }

        .service-leadership-container {
            overflow: hidden;
            padding: 0;
        }

        .leadership-key {
            padding: 20px;
        }

        .lk-icon {
            width: 44px;
            height: 44px;
            padding: 10px;
        }

        .lk-icon svg {
            flex-shrink: 0;
            width: 22px;
            height: 26px;
        }

        .lk-title {
            font-size: 20px;
            line-height: 120%;
        }

        .lk-text {
            font-size: 14px;
            line-height: 160%; /* 32px */
        }
    }
</style>
<section class="service-leadership-section">
    <div class="section-container service-leadership-container">
        <div class="section-header text-center">
            <h3 class="section-pretitle">What we do</h3>
            <h2 class="section-title">Smarter <span class="purple-text">growth</span> starts with <span class="purple-text">the right leadership</span></h2>
            <p class="section-subtext">You want a leader who lifts performance, energises your team, and drives real, lasting results. We help you find them.</p>
            <p class="section-subtext">Whether it’s your first leadership hire or finding your next leadership layer, every step of our process is tailored to your business needs.</p>
        </div>
        <div class="leadership-keys">
            <div class="leadership-key lift-hover">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M17.5013 32.0833C25.5555 32.0833 32.0846 25.5541 32.0846 17.5C32.0846 9.44581 25.5555 2.91663 17.5013 2.91663C9.44715 2.91663 2.91797 9.44581 2.91797 17.5C2.91797 25.5541 9.44715 32.0833 17.5013 32.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 26.25C22.3325 26.25 26.25 22.3325 26.25 17.5C26.25 12.6675 22.3325 8.75 17.5 8.75C12.6675 8.75 8.75 12.6675 8.75 17.5C8.75 22.3325 12.6675 26.25 17.5 26.25Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.4987 20.4167C19.1095 20.4167 20.4154 19.1109 20.4154 17.5C20.4154 15.8892 19.1095 14.5834 17.4987 14.5834C15.8879 14.5834 14.582 15.8892 14.582 17.5C14.582 19.1109 15.8879 20.4167 17.4987 20.4167Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="lk-title">Outcome Driven</h3>
                <p class="lk-text">Focused on delivering measurable impact for your organization.</p>
            </div>
            <div class="leadership-key lift-hover">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M23.3346 30.625V27.7083C23.3346 26.1612 22.7201 24.6775 21.6261 23.5835C20.5321 22.4896 19.0484 21.875 17.5013 21.875H8.7513C7.20421 21.875 5.72047 22.4896 4.62651 23.5835C3.53255 24.6775 2.91797 26.1612 2.91797 27.7083V30.625" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.1263 16.0417C16.348 16.0417 18.9596 13.43 18.9596 10.2083C18.9596 6.98667 16.348 4.375 13.1263 4.375C9.90464 4.375 7.29297 6.98667 7.29297 10.2083C7.29297 13.43 9.90464 16.0417 13.1263 16.0417Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32.082 30.625V27.7083C32.0811 26.4158 31.6509 25.1603 30.859 24.1388C30.0672 23.1173 28.9585 22.3877 27.707 22.0646" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.332 4.56458C24.5868 4.88585 25.699 5.6156 26.4932 6.63878C27.2874 7.66196 27.7185 8.92037 27.7185 10.2156C27.7185 11.5109 27.2874 12.7693 26.4932 13.7925C25.699 14.8156 24.5868 15.5454 23.332 15.8667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="lk-title">People First</h3>
                <p class="lk-text">Building teams that align with your culture and values.</p>
            </div>
            <div class="leadership-key lift-hover">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M17.823 2.91663H17.1814C16.4078 2.91663 15.666 3.22392 15.119 3.7709C14.572 4.31788 14.2647 5.05974 14.2647 5.83329V6.09579C14.2642 6.60727 14.1292 7.10961 13.8732 7.55243C13.6172 7.99525 13.2493 8.36297 12.8064 8.61871L12.1793 8.98329C11.7359 9.23928 11.2329 9.37405 10.721 9.37405C10.209 9.37405 9.70601 9.23928 9.26262 8.98329L9.04387 8.86663C8.37459 8.48055 7.57946 8.37581 6.83304 8.57541C6.08661 8.775 5.44988 9.26262 5.06262 9.93121L4.74178 10.4854C4.35571 11.1547 4.25097 11.9498 4.45057 12.6962C4.65016 13.4426 5.13777 14.0794 5.80637 14.4666L6.02512 14.6125C6.46594 14.867 6.83248 15.2324 7.08832 15.6724C7.34415 16.1125 7.48038 16.6118 7.48345 17.1208V17.8645C7.48549 18.3785 7.35169 18.8838 7.0956 19.3294C6.8395 19.7751 6.47021 20.1451 6.02512 20.402L5.80637 20.5333C5.13777 20.9206 4.65016 21.5573 4.45057 22.3037C4.25097 23.0501 4.35571 23.8453 4.74178 24.5145L5.06262 25.0687C5.44988 25.7373 6.08661 26.2249 6.83304 26.4245C7.57946 26.6241 8.37459 26.5194 9.04387 26.1333L9.26262 26.0166C9.70601 25.7606 10.209 25.6259 10.721 25.6259C11.2329 25.6259 11.7359 25.7606 12.1793 26.0166L12.8064 26.3812C13.2493 26.6369 13.6172 27.0047 13.8732 27.4475C14.1292 27.8903 14.2642 28.3926 14.2647 28.9041V29.1666C14.2647 29.9402 14.572 30.682 15.119 31.229C15.666 31.776 16.4078 32.0833 17.1814 32.0833H17.823C18.5966 32.0833 19.3384 31.776 19.8854 31.229C20.4324 30.682 20.7397 29.9402 20.7397 29.1666V28.9041C20.7402 28.3926 20.8752 27.8903 21.1312 27.4475C21.3872 27.0047 21.7551 26.6369 22.198 26.3812L22.8251 26.0166C23.2685 25.7606 23.7715 25.6259 24.2835 25.6259C24.7954 25.6259 25.2984 25.7606 25.7418 26.0166L25.9605 26.1333C26.6298 26.5194 27.4249 26.6241 28.1714 26.4245C28.9178 26.2249 29.5545 25.7373 29.9418 25.0687L30.2626 24.5C30.6487 23.8307 30.7534 23.0356 30.5538 22.2891C30.3542 21.5427 29.8666 20.906 29.198 20.5187L28.9793 20.402C28.5342 20.1451 28.1649 19.7751 27.9088 19.3294C27.6527 18.8838 27.5189 18.3785 27.521 17.8645V17.1354C27.5189 16.6214 27.6527 16.1161 27.9088 15.6705C28.1649 15.2249 28.5342 14.8548 28.9793 14.5979L29.198 14.4666C29.8666 14.0794 30.3542 13.4426 30.5538 12.6962C30.7534 11.9498 30.6487 11.1547 30.2626 10.4854L29.9418 9.93121C29.5545 9.26262 28.9178 8.775 28.1714 8.57541C27.4249 8.37581 26.6298 8.48055 25.9605 8.86663L25.7418 8.98329C25.2984 9.23928 24.7954 9.37405 24.2835 9.37405C23.7715 9.37405 23.2685 9.23928 22.8251 8.98329L22.198 8.61871C21.7551 8.36297 21.3872 7.99525 21.1312 7.55243C20.8752 7.10961 20.7402 6.60727 20.7397 6.09579V5.83329C20.7397 5.05974 20.4324 4.31788 19.8854 3.7709C19.3384 3.22392 18.5966 2.91663 17.823 2.91663Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 21.875C19.9162 21.875 21.875 19.9162 21.875 17.5C21.875 15.0838 19.9162 13.125 17.5 13.125C15.0838 13.125 13.125 15.0838 13.125 17.5C13.125 19.9162 15.0838 21.875 17.5 21.875Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="lk-title">Customised To You</h3>
                <p class="lk-text">Tailored approach for your unique business needs.</p>
            </div>
        </div>
    </div>
</section>
