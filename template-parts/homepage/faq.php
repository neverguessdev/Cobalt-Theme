<?php
/**
 * Template part for displaying the blue banner section
 *
 * @package Cobalt Theme
 */
?>
<style>
    section.faq {
        padding: 60px 20px 0;
    }

    .faq .section-container {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        border-radius: 30px;
        background-color: #CADCFB;
        padding: 64px;
        background-image: url("/wp-content/uploads/2025/07/faq-bg.png");
        background-size: cover;
    }

    .faq .titles-side,
    .faq .qa-content {
        width: 100%;
    }

    .faq .titles-side {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        flex: 1 0 0;
        align-self: stretch;
    }

    .faq .section-pretitle {
        background: transparent;
    }

    .faq .header-content {
        display: flex;
        flex-direction: column;
        gap: 40px;
        margin-bottom: 20px;
    }

    .faq .title-subtext {
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .qa-content {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .qa-question {
        border-radius: 14.968px 14.968px 0 0;
        background: #A62274;
        padding: 15px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: var(--White, #FFF);
        font-family: "Lexend Deca";
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        cursor: pointer;
        transition: border-radius 0.3s ease, background 0.3s ease, color 0.3s ease;
    }

    .qa-answer {
        color: #202020;
        font-family: Roboto;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 22px;
        padding: 15px 22px;
        background: #f9f9f9;
        border-radius: 0 0 14.968px 14.968px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .qa-question svg{
        margin-left: 25px;
    }

    .qa-item.active .qa-answer {
        max-height: 200px;
        padding: 15px 22px;
    }

    .qa-item:not(.active) .qa-answer {
        padding: 0 22px;
    }

    .qa-item:not(.active) .qa-question {
        background: #ffffff;
        color: #202020;
        border-radius: 14.968px;
    }

    .qa-item:not(.active) .qa-question svg {
        transform: rotate(180deg);
    }

    .qa-item:not(.active) .qa-question svg path {
        fill: #797979;
    }

    .qa-question svg {
        transition: transform 0.3s ease;
    }

    @media (min-width: 991px) {
        .faq .titles-side,
        .faq .qa-content {
            width: calc(50% - 1rem);
        }
    }

    @media (max-width: 991px) {
        section.faq {
            padding: 0;
        }

        .faq .section-container {
            padding: 44px 20px 30px;
            border-radius: 0;
        }

        .faq .header-content {
            gap: 17px;
        }

        .faq .title-subtext {
            gap: 20px;
        }

        .faq .titles-side {
            gap: 30px;
        }
    }

    @media (max-width: 767px) {
        .qa-question {
            font-size: 14px;
        }

        .qa-answer {
            font-size: 12px;
        }

        .faq .section-container {
            background-image: url("/wp-content/uploads/2025/07/faq-bg-mob.png");
            padding: 20px 20px;
        }
    }
</style>
<section class="faq">
    <div class="section-container">
        <div class="titles-side">
            <div class="header-content">
                <p class="section-pretitle">FAQ</p>
                <div class="title-subtext">
                    <h2 class="section-title">Have <strong>Questions?</strong></h2>
                    <p class="section-subtext" style="color: #3C3C3B">Here’s what clients like to know before we get started.</p>
                </div>
            </div>
            <a href="#" class="content-cta cta-purple lift-hover">
                FIND YOUR NEXT LEADER
                <span class="content-cta-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <rect width="36" height="37" rx="18" fill="#FFFFFF"/>
                            <path d="M26 24.3856L24.2446 24.3931L24.2521 14.0028L11.2549 27L10 25.7451L22.9972 12.7479L12.6069 12.7554L12.6144 11L26 11L26 24.3856Z"
                                  fill="#3FA635"/>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="qa-content">
            <div class="qa-item">
                <h3 class="qa-question">
                    How long does the process take?
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_348_8863)">
                            <path d="M7.13811 4.02932L0.477398 10.6902C0.323219 10.8442 0.238281 11.0499 0.238281 11.2691C0.238281 11.4884 0.323219 11.6941 0.477398 11.8481L0.967801 12.3387C1.28735 12.6578 1.80672 12.6578 2.12578 12.3387L7.71905 6.7454L13.3185 12.3449C13.4727 12.4989 13.6782 12.584 13.8974 12.584C14.1168 12.584 14.3223 12.4989 14.4766 12.3449L14.9669 11.8543C15.1211 11.7002 15.206 11.4946 15.206 11.2754C15.206 11.0561 15.1211 10.8504 14.9669 10.6964L8.30011 4.02932C8.14544 3.8749 7.93894 3.79008 7.71941 3.79057C7.49904 3.79008 7.29265 3.8749 7.13811 4.02932Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_348_8863">
                                <rect width="14.9677" height="14.9677" fill="white" transform="matrix(0 -1 1 0 0.238281 15.6709)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </h3>
                <p class="qa-answer">Every search is tailored, but most take between 8–10 weeks from briefing to offer. We’ll give you a clear timeline upfront and stay closely aligned at every step.</p>
            </div>
            <div class="qa-item">
                <h3 class="qa-question">
                    How is Cobalt different from a traditional recruiter?
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_348_8863)">
                            <path d="M7.13811 4.02932L0.477398 10.6902C0.323219 10.8442 0.238281 11.0499 0.238281 11.2691C0.238281 11.4884 0.323219 11.6941 0.477398 11.8481L0.967801 12.3387C1.28735 12.6578 1.80672 12.6578 2.12578 12.3387L7.71905 6.7454L13.3185 12.3449C13.4727 12.4989 13.6782 12.584 13.8974 12.584C14.1168 12.584 14.3223 12.4989 14.4766 12.3449L14.9669 11.8543C15.1211 11.7002 15.206 11.4946 15.206 11.2754C15.206 11.0561 15.1211 10.8504 14.9669 10.6964L8.30011 4.02932C8.14544 3.8749 7.93894 3.79008 7.71941 3.79057C7.49904 3.79008 7.29265 3.8749 7.13811 4.02932Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_348_8863">
                                <rect width="14.9677" height="14.9677" fill="white" transform="matrix(0 -1 1 0 0.238281 15.6709)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </h3>
                <p class="qa-answer">We’re a true search partner. No databases, no shortcuts, just deep market mapping, structured interviews, and a process built around alignment, impact, and long-term success.</p>
            </div>
            <div class="qa-item">
                <h3 class="qa-question">
                    What happens if our new hire doesn’t work out?
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_348_8863)">
                            <path d="M7.13811 4.02932L0.477398 10.6902C0.323219 10.8442 0.238281 11.0499 0.238281 11.2691C0.238281 11.4884 0.323219 11.6941 0.477398 11.8481L0.967801 12.3387C1.28735 12.6578 1.80672 12.6578 2.12578 12.3387L7.71905 6.7454L13.3185 12.3449C13.4727 12.4989 13.6782 12.584 13.8974 12.584C14.1168 12.584 14.3223 12.4989 14.4766 12.3449L14.9669 11.8543C15.1211 11.7002 15.206 11.4946 15.206 11.2754C15.206 11.0561 15.1211 10.8504 14.9669 10.6964L8.30011 4.02932C8.14544 3.8749 7.93894 3.79008 7.71941 3.79057C7.49904 3.79008 7.29265 3.8749 7.13811 4.02932Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_348_8863">
                                <rect width="14.9677" height="14.9677" fill="white" transform="matrix(0 -1 1 0 0.238281 15.6709)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </h3>
                <p class="qa-answer">It’s rare, but our 90-day guarantee ensures your peace of mind. If your hire doesn’t work out, we’ll replace them at no extra cost. We’ll refine the brief, relaunch the search, and support you throughout. You won’t be navigating it alone.</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const qaQuestions = document.querySelectorAll('.qa-question');

    qaQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const qaItem = this.parentElement;
            const isActive = qaItem.classList.contains('active');

            // Close all other items
            document.querySelectorAll('.qa-item').forEach(item => {
                item.classList.remove('active');
            });

            // Toggle current item
            if (!isActive) {
                qaItem.classList.add('active');
            }
        });
    });
});
</script>
