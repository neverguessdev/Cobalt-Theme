<?php
/*
Template Name: General Page Template
Description: A general template for displaying pages with a header, content area, and comments section.
*/
get_header(); ?>
<style>
    .page-content .blue-text {
        color: #1B4F9E!important;
        font-size: 30px;
    }

    .page-content-area {
        margin: 40px 0;
    }

    /* Heading Styles - matching theme typography */
    .page-content-area h1 {
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 40px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
        margin: 2rem 0 1.5rem 0;
    }

    .page-content-area h2 {
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 32px;
        font-style: normal;
        font-weight: 300;
        line-height: 120%;
        margin: 1.8rem 0 1.2rem 0;
    }

    .page-content-area h3 {
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        margin: 1.5rem 0 1rem 0;
    }

    .page-content-area h4 {
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        margin: 1.3rem 0 0.8rem 0;
    }

    .page-content-area h5 {
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        margin: 1.2rem 0 0.7rem 0;
    }

    .page-content-area h6 {
        color: #202020;
        font-family: "Lexend Deca", sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        margin: 1rem 0 0.6rem 0;
    }

    /* Paragraph Styles - matching theme body text */
    .page-content-area p {
        color: #202020;
        font-family: Roboto, sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        letter-spacing: 0.36px;
        margin: 0 0 1.2rem 0;
    }

    /* List Styles */
    .page-content-area ul,
    .page-content-area ol {
        margin: 1rem 0 1.5rem 0;
        padding-left: 2rem;
    }

    .page-content-area li {
        color: #202020;
        font-family: Roboto, sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        letter-spacing: 0.36px;
        margin-bottom: 0.5rem;
    }

    .page-content-area ul li {
        list-style-type: disc;
    }

    .page-content-area ol li {
        list-style-type: decimal;
    }

    /* Link Styles */
    .page-content-area a {
        color: #1B4F9E;
        text-decoration: underline;
        transition: color 0.3s ease;
    }

    .page-content-area a:hover {
        color: #A62274;
        text-decoration: none;
    }

    /* Blockquote Styles */
    .page-content-area blockquote {
        border-left: 4px solid #1B4F9E;
        padding: 1rem 0 1rem 1.5rem;
        margin: 1.5rem 0;
        background-color: #f8f9fa;
        font-style: italic;
        color: #666;
        font-family: Roboto, sans-serif;
        font-size: 18px;
        line-height: 150%;
    }

    /* Code Styles */
    .page-content-area code {
        background-color: #f4f4f4;
        padding: 0.2rem 0.4rem;
        border-radius: 3px;
        font-family: 'Courier New', monospace;
        font-size: 16px;
        color: #e83e8c;
    }

    .page-content-area pre {
        background-color: #f4f4f4;
        padding: 1rem;
        border-radius: 5px;
        overflow-x: auto;
        margin: 1rem 0;
    }

    .page-content-area pre code {
        background-color: transparent;
        padding: 0;
        color: #333;
    }

    /* Table Styles */
    .page-content-area table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        overflow-x: auto;
    }

    .page-content-area th,
    .page-content-area td {
        padding: 0.75rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-family: Roboto, sans-serif;
        font-size: 16px;
        line-height: 150%;
    }

    .page-content-area th {
        background-color: #1B4F9E;
        color: white;
        font-weight: 500;
    }

    .page-content-area tr:hover {
        background-color: #f5f5f5;
    }

    /* Image Styles */
    .page-content-area img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1rem 0;
    }

    .page-content-area figure {
        margin: 1.5rem 0;
        text-align: center;
    }

    .page-content-area figcaption {
        font-family: Roboto, sans-serif;
        font-size: 16px;
        color: #666;
        font-style: italic;
        margin-top: 0.5rem;
        line-height: 150%;
    }

    /* HR Styles */
    .page-content-area hr {
        border: none;
        height: 2px;
        background: linear-gradient(90deg, #A62274 0%, #1B4F9E 50%, #16A34A 100%);
        margin: 2rem 0;
    }

    /* Strong and Em Styles */
    .page-content-area strong {
        color: #202020;
        font-weight: 700;
    }

    .page-content-area em {
        font-style: italic;
        color: #666;
    }

    /* Button Styles - matching theme CTA buttons */
    .page-content-area .wp-block-button__link,
    .page-content-area .button {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: #1B4F9E;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 120%;
        letter-spacing: 0.28px;
        text-transform: uppercase;
        padding: 14px 20px;
        background: #FFF;
        border: 2px solid #1B4F9E;
        border-radius: 50px;
        text-decoration: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .page-content-area .wp-block-button__link:hover,
    .page-content-area .button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(27, 79, 158, 0.25);
        color: #1B4F9E;
        text-decoration: none;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-content-area h1 {
            font-size: 32px;
        }

        .page-content-area h2 {
            font-size: 28px;
        }

        .page-content-area h3 {
            font-size: 22px;
        }

        .page-content-area h4 {
            font-size: 18px;
        }

        .page-content-area h5 {
            font-size: 16px;
        }

        .page-content-area h6 {
            font-size: 14px;
        }

        .page-content-area p,
        .page-content-area li {
            font-size: 16px;
        }

        .page-content-area ul,
        .page-content-area ol {
            padding-left: 1.5rem;
        }

        .page-content-area table {
            font-size: 14px;
        }

        .page-content-area th,
        .page-content-area td {
            padding: 0.5rem;
            font-size: 14px;
        }
    }
</style>
<main class="new-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="page-content">
            <div class="container">
                <header class="page-header">
                    <h1 class="page-title section-title text-center blue-text"><?php the_title(); ?></h1>
                </header>

                <div class="page-content-area">
                    <?php the_content(); ?>
                </div>

                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="comments-area">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
