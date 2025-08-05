document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Functions
    function initMobileMenu() {
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuClose = document.getElementById('mobileMenuClose');

        if (hamburgerBtn && mobileMenu) {
            hamburgerBtn.addEventListener('click', function() {
                mobileMenu.classList.add('active');
            });

            // Close button functionality
            if (mobileMenuClose) {
                mobileMenuClose.addEventListener('click', function() {
                    mobileMenu.classList.remove('active');
                });
            }

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!hamburgerBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.remove('active');
                }
            });
        }
    }

    // Reusable Slider Function
    function initSlider(sliderName, options = {}) {
        const container = document.querySelector(`[data-slider="${sliderName}"]`);
        const prevBtn = document.querySelector(`[data-slider-target="${sliderName}"].slider-prev`);
        const nextBtn = document.querySelector(`[data-slider-target="${sliderName}"].slider-next`);
        const dots = document.querySelectorAll(`[data-slider-target="${sliderName}"] .slider-dot`);

        if (!container || !prevBtn || !nextBtn) return; // Remove dots requirement

        const items = container.children;
        const totalItems = items.length;
        let currentIndex = 0;

        // Default options
        const config = {
            desktopSlidesToShow: 1, // Default: show 1 slide on desktop
            mobileSlidesToShow: 1,  // Default: show 1 slide on mobile
            ...options
        };

        // Determine slides to show based on screen size and config
        function getSlidesToShow() {
            return window.innerWidth >= 768 ? config.desktopSlidesToShow : config.mobileSlidesToShow;
        }

        // Calculate max index based on slides shown
        function getMaxIndex() {
            const slidesToShow = getSlidesToShow();
            return Math.max(0, totalItems - slidesToShow);
        }

        // Update slider position
        function updateSlider() {
            const slidesToShow = getSlidesToShow();
            const slideWidth = 100 / totalItems; // Each slide width based on total items
            const translateX = -currentIndex * slideWidth;
            container.style.transform = `translateX(${translateX}%)`;

            // Update dots only if they exist
            if (dots.length > 0) {
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }

            // Update arrow states
            const maxIndex = getMaxIndex();
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }

        // Go to specific slide
        function goToSlide(index) {
            const maxIndex = getMaxIndex();
            currentIndex = Math.max(0, Math.min(index, maxIndex));
            updateSlider();
        }

        // Previous slide
        function prevSlide() {
            if (currentIndex > 0) {
                goToSlide(currentIndex - 1);
            }
        }

        // Next slide
        function nextSlide() {
            const maxIndex = getMaxIndex();
            if (currentIndex < maxIndex) {
                goToSlide(currentIndex + 1);
            }
        }

        // Handle window resize
        function handleResize() {
            // Reset to first slide on resize to avoid layout issues
            currentIndex = 0;
            updateSlider();
        }
        // Event listeners
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        // Add dot listeners only if dots exist
        if (dots.length > 0) {
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => goToSlide(index));
            });
        }

        // Touch/swipe support
        let startX = 0;
        let currentX = 0;
        let isDragging = false;

        container.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        container.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        });

        container.addEventListener('touchend', () => {
            if (!isDragging) return;
            isDragging = false;

            const diffX = startX - currentX;
            const threshold = 50;

            if (diffX > threshold) {
                nextSlide();
            } else if (diffX < -threshold) {
                prevSlide();
            }
        });

        // Initialize
        updateSlider();

        // Return public methods for external control
        return {
            goToSlide,
            nextSlide,
            prevSlide,
            getCurrentIndex: () => currentIndex,
            getTotalItems: () => totalItems
        };
    }

    // Initialize sliders
    initMobileMenu();

    // Initialize reviews slider with 3 slides showing on desktop
    const reviewsSlider = initSlider('reviews', {
        desktopSlidesToShow: 3,
        mobileSlidesToShow: 1
    });

    // Initialize other sliders with default behavior (1 slide on desktop and mobile)
    const teamsSlider = initSlider('teams', {
        desktopSlidesToShow: 3,
        mobileSlidesToShow: 1
    });

    // Initialize about reviews slider
    const abReviewsSlider = initSlider('ab-reviews');

    // Initialize about testimonial slider
    const abTestimonialsSlider = initSlider('testimonials-slider');

    // Initialize about testimonial text slider
    const abTestimonialsTextSlider = initSlider('testimonial-text-slider');

    // Auto-play functionality (optional)
    function initAutoPlay(sliderInstance, interval = 5000) {
        if (!sliderInstance) return;

        let autoPlayTimer;

        function startAutoPlay() {
            autoPlayTimer = setInterval(() => {
                const current = sliderInstance.getCurrentIndex();
                const total = sliderInstance.getTotalItems();

                if (current < total - 1) {
                    sliderInstance.nextSlide();
                } else {
                    sliderInstance.goToSlide(0);
                }
            }, interval);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayTimer);
        }

        // Only enable auto-play on mobile
        if (window.innerWidth <= 767) {
            startAutoPlay();

            // Pause on user interaction
            document.addEventListener('touchstart', stopAutoPlay);
            document.addEventListener('click', stopAutoPlay);
        }
    }

    // Uncomment the line below if you want auto-play on the reviews slider
    // initAutoPlay(reviewsSlider, 4000);
});
