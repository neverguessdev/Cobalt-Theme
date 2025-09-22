<?php
/**
 * Template part for displaying the Contract Winning section
 *
 * @package Cobalt Theme
 */
?>
<style>

    section.about-contact-winning-section {
        background-image: url(/wp-content/uploads/2025/07/blue-arrow-bg.png), url("/wp-content/uploads/2025/08/swirl.png");
        background-position: top 148px right 35px, top left;
        background-repeat: no-repeat;
        background-size: contain, auto;
    }

    section.about-contact-winning-section .section-title {
        max-width: 840px;
        margin: 0 auto 20px;
    }

    .cw-key-cards {
        display: flex;
        gap: 30px;
        align-items: flex-start;
        margin-top: 55px;
    }

    .cw-key-card {
        margin-top: 27px;
        position: relative;
        padding: 60px 26px 30px 40px;
        border-radius: 20px;
        border: 1px solid #D2D2D2;
        background: #FFF;
        width: 100%;
        height: auto;
    }

    .cw-key-card svg {
        position: absolute;
        top: -30px;
    }

    .cw-card-title {
        color: #202020;
        font-family: Roboto;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 38.4px */
        margin-bottom: 12px;
    }

    p.cw-card-text {
        color: #3C3C3B;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 32px */
    }

    .cw-pink-banner {
        margin-top: 50px;
    }

    .cw-banner-quote {
        /* padding: 76px 48px 34px 140px; */
        color: var(--Grey-2, #797979);
        font-family: "Lexend Deca";
        font-size: 30px;
        font-style: normal;
        font-weight: 300;
        line-height: 160%; /* 48px */
        margin-bottom: 37px;
    }

    .cw-pink-banner-content {
        position: relative;
        padding: 76px 48px 34px 140px;
        border-radius: 18.998px;
        border: 1px solid #D2D2D2;
        background: #FCE4F3 url("/wp-content/uploads/2025/08/pink-magni-3.png") no-repeat top right -65px;
        box-shadow: 0 5.699px 9.499px 0 rgba(204, 204, 204, 0.25);
    }

    .cw-banner-author-wrapper {
        display: flex;
        gap: 20px;
    }

    .cw-banner-author-wrapper img {
        width: 100px;
        height: 100px;
    }

    .cw-banner-author {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .cw-banner-author-name {
        color: #A62274;
        font-family: "Lexend Deca";
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 36px */
        margin-bottom: 5px;
    }

    .cw-banner-author-title {
        color: #202020;
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%; /* 24px */
    }

    .cw-pink-banner .cta-wrapper {
        margin-top: 50px;
    }

    .cw-pink-banner-content svg {
        position: absolute;
        top: 30px;
        left: 30px;
    }

    section.about-contact-winning-section .section-subtext {
        font-size: 20px;
    }

    @media (max-width: 1024px) {
        section.about-contact-winning-section {
            background-image: none;
        }
    }

    @media (max-width: 991px) {
        .cw-key-cards {
            flex-direction: column;
        }
    }

    @media (max-width: 767px) {
        section.about-contact-winning-section {
            padding-top: 0;
        }

        .cw-banner-author-wrapper img {
            width: 70px;
            height: 70px;
        }

        .cw-key-card {
            padding: 38px 20px 30px;
        }

        .cw-key-card svg {
            width: 40px;
            height: 40px;
            top: -20px;
        }

        .cw-card-title {
            font-size: 24px;
        }

        p.cw-card-text {
            font-size: 16px;
        }

        .cw-pink-banner-content svg {
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
        }

        .cw-pink-banner-content {
            padding: 90px 20px 30px;
        }

        .cw-banner-author-name, .cw-banner-quote {
            font-size: 20px;
        }

        .cw-banner-author-title {
            font-size: 16px;
        }
    }
</style>
<section class="about-contact-winning-section">
    <div class="section-container about-contact-winning-container">
        <div class="section-header text-center">
            <h2 class="section-title">From Critical Hire to <span class="purple-text">Contract-Winning Impact</span>
            </h2>
            <p class="section-subtext"><strong>Client Case Study:</strong> Keolis Commuter Services (Boston’s largest commuter rail operator)</p>
        </div>
        <div class="cw-key-cards">
            <div class="cw-key-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <path d="M0 12C0 5.37258 5.37258 0 12 0H44C50.6274 0 56 5.37258 56 12V44C56 50.6274 50.6274 56 44 56H12C5.37258 56 0 50.6274 0 44V12Z"
                          fill="#A62274"/>
                    <path d="M41.7545 18.6135C41.6866 18.383 41.4981 18.2081 41.2633 18.1575L38.288 17.5162L37.6467 14.5409C37.5961 14.306 37.4212 14.1176 37.1907 14.0497C36.9601 13.9818 36.711 14.0453 36.5411 14.2152L32.6934 18.0629C30.8686 17.0703 28.816 16.5476 26.7243 16.5476C23.3839 16.5476 20.2435 17.8484 17.8816 20.2103C15.5195 22.5723 14.2188 25.7127 14.2188 29.053C14.2188 32.3933 15.5195 35.5337 17.8816 37.8956C20.2435 40.2576 23.3839 41.5584 26.7242 41.5584C30.0645 41.5584 33.2049 40.2576 35.5668 37.8956C37.9288 35.5337 39.2296 32.3933 39.2296 29.053C39.2296 26.9758 38.7134 24.9353 37.7331 23.1189L41.589 19.263C41.7589 19.0931 41.8224 18.8439 41.7545 18.6135ZM29.4475 29.053C29.4475 30.5546 28.2259 31.7762 26.7242 31.7762C25.2226 31.7762 24.0009 30.5546 24.0009 29.053C24.0009 27.5514 25.2226 26.3297 26.7242 26.3297C27.2386 26.3297 27.7201 26.4731 28.131 26.722L26.2606 28.5885C26.0041 28.8445 26.0036 29.26 26.2596 29.5166C26.3878 29.645 26.556 29.7092 26.7241 29.7092C26.8918 29.7092 27.0596 29.6453 27.1877 29.5175L29.058 27.6512C29.3051 28.0609 29.4475 28.5406 29.4475 29.053ZM29.0776 25.7775C28.4145 25.2998 27.602 25.0172 26.7242 25.0172C24.4989 25.0172 22.6884 26.8276 22.6884 29.053C22.6884 31.2783 24.4989 33.0887 26.7242 33.0887C28.9495 33.0887 30.76 31.2783 30.76 29.053C30.76 28.1782 30.4794 27.3683 30.0047 26.7065L32.089 24.6266C33.0839 25.8302 33.6824 27.373 33.6824 29.053C33.6824 32.8897 30.561 36.0111 26.7243 36.0111C22.8876 36.0111 19.7662 32.8897 19.7662 29.053C19.7662 25.2163 22.8876 22.0949 26.7243 22.0949C28.4094 22.0949 29.9565 22.6972 31.1618 23.6976L29.0776 25.7775ZM26.7242 40.2459C20.5524 40.2459 15.5312 35.2248 15.5312 29.053C15.5312 22.8812 20.5524 17.8601 26.7242 17.8601C28.5667 17.8601 30.3749 18.3127 31.9878 19.1733C31.9889 19.1791 31.9892 19.1849 31.9904 19.1907L32.6432 22.2193L32.0936 22.7677C30.6477 21.5306 28.7718 20.7824 26.7242 20.7824C22.1638 20.7824 18.4536 24.4925 18.4536 29.053C18.4536 33.6134 22.1638 37.3236 26.7242 37.3236C31.2846 37.3236 34.9948 33.6134 34.9948 29.053C34.9948 27.0116 34.2509 25.141 33.0206 23.6968L33.5624 23.1562L36.6134 23.8137L36.6168 23.8143C37.4689 25.4212 37.917 27.221 37.917 29.053C37.9171 35.2248 32.896 40.2459 26.7242 40.2459ZM36.5406 22.4554L34.6689 22.052L36.2307 20.4934C36.4872 20.2374 36.4877 19.8219 36.2317 19.5654C35.9757 19.3088 35.5602 19.3084 35.3036 19.5644L33.7481 21.1166L33.3488 19.2636L36.6175 15.995L37.0942 18.2067C37.1485 18.4588 37.3454 18.6557 37.5974 18.71L39.8092 19.1867L36.5406 22.4554Z"
                          fill="white"/>
                </svg>
                <h3 class="cw-card-title">The Challenge</h3>
                <p class="cw-card-text">Keolis needed a CFO who could lead transformation, bring fresh thinking from
                    outside the sector, and support a critical contract renegotiation. At speed, with total
                    discretion.</p>
            </div>
            <div class="cw-key-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <path d="M0 12C0 5.37258 5.37258 0 12 0H44C50.6274 0 56 5.37258 56 12V44C56 50.6274 50.6274 56 44 56H12C5.37258 56 0 50.6274 0 44V12Z"
                          fill="#1B4F9E"/>
                    <path d="M32.5607 18.4075C32.7329 18.0886 33.1311 17.9696 33.4499 18.1418C34.914 18.9324 36.2185 20.0523 37.2224 21.3804C37.441 21.6695 37.3838 22.081 37.0947 22.2996C36.9762 22.3892 36.8373 22.4324 36.6994 22.4324C36.5007 22.4324 36.3045 22.3426 36.1754 22.1718C35.2841 20.9927 34.126 19.9985 32.8263 19.2967C32.5074 19.1245 32.3885 18.7264 32.5607 18.4075ZM18.3706 31.7934C18.2468 31.4528 17.8703 31.2771 17.5296 31.4009C17.189 31.5248 17.0133 31.9013 17.1371 32.2419C17.6284 33.593 18.3609 34.8293 19.3145 35.9165C19.4443 36.0644 19.6257 36.14 19.8081 36.14C19.9618 36.14 20.1161 36.0863 20.2406 35.9771C20.5131 35.7381 20.5402 35.3235 20.3012 35.0509C19.4554 34.0868 18.806 32.9908 18.3706 31.7934ZM18.9053 22.2996C19.0237 22.3891 19.1627 22.4324 19.3005 22.4324C19.4992 22.4324 19.6955 22.3424 19.8245 22.1718C20.7176 20.9902 21.8756 19.9961 23.1731 19.2969C23.4922 19.125 23.6115 18.7269 23.4395 18.4079C23.2676 18.0889 22.8695 17.9696 22.5505 18.1415C21.0882 18.9295 19.7835 20.0494 18.7774 21.3803C18.5589 21.6694 18.6161 22.081 18.9053 22.2996ZM38.4718 31.4009C38.1312 31.2771 37.7548 31.4529 37.6309 31.7935C37.1956 32.9908 36.546 34.0868 35.7002 35.051C35.4612 35.3235 35.4884 35.7381 35.7608 35.9771C35.8853 36.0863 36.0397 36.14 36.1933 36.14C36.3757 36.14 36.5572 36.0644 36.6869 35.9165C37.6405 34.8293 38.3732 33.593 38.8643 32.2419C38.9881 31.9012 38.8125 31.5248 38.4718 31.4009ZM34.5293 36.0139V39.2288C34.5293 40.4001 33.577 41.353 32.4065 41.353H23.5951C22.4247 41.353 21.4724 40.4001 21.4724 39.2288V36.0139C21.4724 33.8332 23.3607 32.059 25.6817 32.059H25.8225C25.5387 31.8089 25.2843 31.5046 25.0655 31.1496C24.5434 30.3025 24.2318 29.1598 24.2318 28.0928C24.2318 26.0155 25.9225 24.3254 28.0008 24.3254C30.0791 24.3254 31.7684 26.0154 31.7684 28.0928C31.7684 29.2033 31.4541 30.3345 30.9061 31.1964C30.6931 31.5313 30.4479 31.8198 30.1761 32.059H30.32C32.6409 32.059 34.5293 33.8332 34.5293 36.0139ZM26.1828 30.461C26.6373 31.1984 27.2489 31.5722 28.0008 31.5722C28.7379 31.5722 29.3427 31.2088 29.7985 30.4921C30.2101 29.8448 30.4559 28.9478 30.4559 28.0928C30.4559 26.7392 29.3545 25.6379 28.0008 25.6379C26.647 25.6379 25.5442 26.7392 25.5442 28.0928C25.5442 28.9269 25.7829 29.8122 26.1828 30.461ZM33.2168 36.0139C33.2168 34.5568 31.9172 33.3715 30.3199 33.3715H25.6817C24.0844 33.3715 22.7849 34.5569 22.7849 36.0139V39.2288C22.7849 39.6764 23.1483 40.0405 23.5951 40.0405H32.4064C32.8532 40.0405 33.2167 39.6764 33.2167 39.2288L33.2168 36.0139ZM38.674 25.5092L37.3698 26.8018L36.9125 26.3583C36.6523 26.106 36.2369 26.1123 35.9845 26.3726C35.7322 26.6328 35.7386 27.0483 35.9988 27.3006L36.9181 28.1919C37.0455 28.3154 37.2102 28.377 37.375 28.377C37.542 28.377 37.7091 28.3135 37.8369 28.1868L39.5979 26.4414C39.8553 26.1863 39.8572 25.7708 39.602 25.5134C39.3469 25.2559 38.9314 25.2541 38.674 25.5092ZM41.5625 26.848C41.5625 28.9253 39.8731 30.6154 37.7966 30.6154C35.72 30.6154 34.029 28.9253 34.029 26.848C34.029 24.7707 35.7191 23.0823 37.7966 23.0823C39.874 23.0823 41.5625 24.7716 41.5625 26.848ZM40.25 26.848C40.25 25.4953 39.1494 24.3948 37.7966 24.3948C36.4437 24.3948 35.3415 25.4953 35.3415 26.848C35.3415 28.2008 36.4429 29.3029 37.7966 29.3029C39.1502 29.3029 40.25 28.2016 40.25 26.848ZM19.0824 25.5092L17.7783 26.8018L17.321 26.3583C17.0608 26.106 16.6453 26.1124 16.393 26.3726C16.1407 26.6328 16.1471 27.0483 16.4073 27.3006L17.3266 28.1919C17.454 28.3154 17.6187 28.3771 17.7834 28.3771C17.9505 28.3771 18.1176 28.3136 18.2454 28.1869L20.0064 26.4415C20.2638 26.1863 20.2657 25.7709 20.0105 25.5134C19.7554 25.256 19.3398 25.2541 19.0824 25.5092ZM21.971 26.848C21.971 28.9253 20.2816 30.6154 18.205 30.6154C16.1285 30.6154 14.4375 28.9253 14.4375 26.848C14.4375 24.7707 16.1276 23.0823 18.205 23.0823C20.2825 23.0823 21.971 24.7716 21.971 26.848ZM20.6585 26.848C20.6585 25.4953 19.5578 24.3948 18.205 24.3948C16.8522 24.3948 15.75 25.4953 15.75 26.848C15.75 28.2008 16.8514 29.3029 18.205 29.3029C19.5587 29.3029 20.6585 28.2016 20.6585 26.848ZM27.5791 19.5243C27.7462 19.5243 27.9133 19.4609 28.0411 19.3341L29.8021 17.5887C30.0595 17.3336 30.0614 16.9181 29.8063 16.6606C29.551 16.4032 29.1355 16.4014 28.8782 16.6565L27.5744 17.9487L27.117 17.5044C26.8571 17.2519 26.4416 17.258 26.189 17.5179C25.9365 17.7779 25.9425 18.1934 26.2026 18.4459L27.1219 19.3387C27.2493 19.4625 27.4142 19.5243 27.5791 19.5243ZM24.2332 17.9953C24.2332 15.918 25.9233 14.228 28.0008 14.228C30.0782 14.228 31.7668 15.918 31.7668 17.9953C31.7668 20.0726 30.0773 21.7627 28.0008 21.7627C25.9242 21.7627 24.2332 20.0726 24.2332 17.9953ZM25.5457 17.9953C25.5457 19.3489 26.6471 20.4502 28.0008 20.4502C29.3544 20.4502 30.4543 19.3489 30.4543 17.9953C30.4543 16.6418 29.3536 15.5405 28.0008 15.5405C26.6479 15.5405 25.5457 16.6418 25.5457 17.9953Z"
                          fill="white"/>
                </svg>
                <h3 class="cw-card-title">Cobalt’s Approach</h3>
                <p class="cw-card-text">Cobalt led a targeted, cross-sector search. Weekly progress reports, structured
                    pre-screening, and deep alignment with Keolis’ business needs ensured that every shortlisted
                    candidate was qualified, aligned, and prepared.</p>
            </div>
            <div class="cw-key-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <path d="M0 12C0 5.37258 5.37258 0 12 0H44C50.6274 0 56 5.37258 56 12V44C56 50.6274 50.6274 56 44 56H12C5.37258 56 0 50.6274 0 44V12Z"
                          fill="#3FA635"/>
                    <path d="M31.5 40.331H24.5C22.7885 40.331 21.553 40.331 20.5415 40.1945C19.3515 40.0335 18.536 39.68 17.906 39.05C17.276 38.42 16.919 37.6045 16.7615 36.4145C16.625 35.403 16.625 34.1675 16.625 32.456V25.456C16.625 23.7445 16.625 22.509 16.7615 21.4975C16.9225 20.3075 17.276 19.492 17.906 18.862C19.0785 17.6895 20.7375 17.5985 23.3275 17.581L23.338 19.331C20.909 19.345 19.789 19.4535 19.145 20.0975C18.375 20.8675 18.375 22.4005 18.375 25.4525V32.4525C18.375 35.508 18.375 37.041 19.145 37.8075C19.915 38.5775 21.448 38.5775 24.5 38.5775H31.5C34.5555 38.5775 36.0885 38.5775 36.855 37.8075C37.625 37.0375 37.625 35.5045 37.625 32.4525V25.4525C37.625 22.397 37.625 20.864 36.855 20.0975C36.211 19.4535 35.091 19.345 32.662 19.331L32.6725 17.581C35.266 17.595 36.9215 17.6895 38.094 18.862C38.7275 19.4955 39.081 20.3075 39.2385 21.4975C39.375 22.509 39.375 23.7445 39.375 25.456V32.456C39.375 34.1675 39.375 35.403 39.2385 36.4145C39.0775 37.6045 38.724 38.42 38.094 39.05C37.464 39.68 36.6485 40.037 35.4585 40.1945C34.447 40.331 33.2115 40.331 31.5 40.331Z"
                          fill="white"/>
                    <path d="M26.4985 32.1655C26.285 32.1655 26.068 32.0885 25.9 31.931L23.9015 30.0655C23.548 29.7365 23.5305 29.1835 23.8595 28.83C24.1885 28.4765 24.7415 28.459 25.095 28.788L26.4985 30.097L30.9015 25.988C31.255 25.659 31.808 25.6765 32.137 26.03C32.466 26.3835 32.4485 26.9365 32.095 27.2655L27.097 31.931C26.929 32.0885 26.7155 32.1655 26.4985 32.1655Z"
                          fill="white"/>
                    <path d="M30.9155 21.6655H25.0845C23.6355 21.6655 22.4595 20.4895 22.4595 19.0405V17.875C22.4595 16.426 23.6355 15.25 25.0845 15.25H30.919C32.368 15.25 33.544 16.426 33.544 17.875V19.0405C33.5405 20.4895 32.3645 21.6655 30.9155 21.6655ZM25.0845 17C24.6015 17 24.2095 17.392 24.2095 17.875V19.0405C24.2095 19.5235 24.6015 19.9155 25.0845 19.9155H30.919C31.402 19.9155 31.794 19.5235 31.794 19.0405V17.875C31.794 17.392 31.402 17 30.919 17H25.0845Z"
                          fill="white"/>
                </svg>
                <h3 class="cw-card-title">The Outcome</h3>
                <p class="cw-card-text">The placed CFO helped drive a successful 4-year contract extension with Boston’s
                    public transport agency, after the state had previously signalled it would not renew. He has since
                    transformed the finance function and reinforced the team’s strategic contribution and been promoted
                    to Group CFO.</p>
            </div>
        </div>
        <div class="cw-pink-banner">
            <div class="cw-pink-banner-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92" fill="none">
                    <path d="M0 45.9999V85.4286H39.4286V45.9999H13.143C13.143 31.5063 24.935 19.7142 39.4286 19.7142V6.57129C17.6864 6.57129 0 24.2577 0 45.9999Z"
                          fill="#F3D1E6"/>
                    <path d="M91.9989 19.7142V6.57129C70.2567 6.57129 52.5703 24.2577 52.5703 45.9999V85.4286H91.9989V45.9999H65.7133C65.7133 31.5063 77.5053 19.7142 91.9989 19.7142Z"
                          fill="#F3D1E6"/>
                </svg>
                <p class="cw-banner-quote">“Cobalt presented several highly credible and suitable candidates, all of
                    whom would have been a great fit with the role and our organization. It was a challenge to settle on
                    our eventual appointee because of the exceptional quality of the field, but, once we had made our
                    choice, Cobalt provided excellent support to both ourselves and the candidate through the
                    appointment process. I’m very pleased with the outcome of this process.”</p>
                <div class="cw-banner-author-wrapper">
                    <img src="/wp-content/uploads/2025/09/david-scorey100.png" alt="David Scorey">
                    <div class="cw-banner-author">
                        <p class="cw-banner-author-name">David Scorey</p>
                        <p class="cw-banner-author-title">Chief Executive Officer Keolis North America</p>
                    </div>

                </div>
            </div>
            <div class="cta-wrapper text-center">
                <a href="/contact-us" class="content-cta cta-purple lift-hover">
                    LET'S TALK ABOUT YOUR LEADERSHIP SEARCH
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
    </div>
</section>
