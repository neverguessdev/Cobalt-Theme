<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="icon" href="https://cobaltsearurgpgs.sites.public-internet.co.uk/wp-content/uploads/2025/07/cropped-Cobalt-Favicon-32x32-1.png" sizes="32x32">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-inner">
            <div class="site-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="https://cobaltsearurgpgs.sites.public-internet.co.uk/wp-content/themes/Cobalt2025/assets/images/cobalt-logo-h.png" alt="Cobalt Logo">
                </a>
            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="#" class="nav-link lift-hover">Menu item</a></li>
                    <li><a href="#" class="nav-link lift-hover">Menu item</a></li>
                    <li><a href="#" class="nav-link lift-hover">Menu item</a></li>
                    <li>
                        <a href="#" class="cta-btn">
                            CTA BUTTON
                            <span class="cta-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                                  <path d="M10 8.90804L8.90289 8.91271L8.90756 2.41878L0.784314 10.542L0 9.75771L8.12325 1.63446L1.62932 1.63913L1.63399 0.542027L10 0.542027L10 8.90804Z" fill="#A62274"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- Mobile Menu -->
                <div class="mobile-menu" id="mobileMenu">
                    <div class="mobile-menu-content">
                        <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18 6L6 18M6 6L18 18" stroke="#1B4F9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <a href="#" class="mobile-nav-link">Menu item</a>
                        <a href="#" class="mobile-nav-link">Menu item</a>
                        <a href="#" class="mobile-nav-link">Menu item</a>
                        <a href="#" class="mobile-cta-btn">
                            CTA BUTTON
                            <span class="cta-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                                  <path d="M10 8.90804L8.90289 8.91271L8.90756 2.41878L0.784314 10.542L0 9.75771L8.12325 1.63446L1.62932 1.63913L1.63399 0.542027L10 0.542027L10 8.90804Z" fill="#A62274"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <button class="hamburger" aria-label="Open menu" id="hamburgerBtn">
                    <span class="hamburger-bg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M21.75 6H2.25C1.42162 6 0.75 5.32838 0.75 4.5C0.75 3.67162 1.42162 3 2.25 3H21.75C22.5784 3 23.25 3.67162 23.25 4.5C23.25 5.32838 22.5784 6 21.75 6Z" fill="#1B4F9E"/>
                          <path d="M21.75 21H2.25C1.42162 21 0.75 20.3284 0.75 19.5C0.75 18.6716 1.42162 18 2.25 18H21.75C22.5784 18 23.25 18.6716 23.25 19.5C23.25 20.3284 22.5784 21 21.75 21Z" fill="#1B4F9E"/>
                          <path d="M21.75 13.5H2.25C1.42162 13.5 0.75 12.8284 0.75 12C0.75 11.1716 1.42162 10.5 2.25 10.5H21.75C22.5784 10.5 23.25 11.1716 23.25 12C23.25 12.8284 22.5784 13.5 21.75 13.5Z" fill="#1B4F9E"/>
                        </svg>
                    </span>
                </button>
            </nav>
        </div>
    </header>
