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
    function initSlider(sliderName) {
        const container = document.querySelector(`[data-slider="${sliderName}"]`);
        const prevBtn = document.querySelector(`[data-slider-target="${sliderName}"].slider-prev`);
        const nextBtn = document.querySelector(`[data-slider-target="${sliderName}"].slider-next`);
        const dots = document.querySelectorAll(`[data-slider-target="${sliderName}"] .slider-dot`);

        if (!container || !prevBtn || !nextBtn) return; // Remove dots requirement

        const items = container.children;
        const totalItems = items.length;
        let currentIndex = 0;

        // Update slider position
        function updateSlider() {
            const translateX = -currentIndex * 33.333; // Move by 33.333% for each slide
            container.style.transform = `translateX(${translateX}%)`;

            // Update dots only if they exist
            if (dots.length > 0) {
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }

            // Update arrow states
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex === totalItems - 1;
        }

        // Go to specific slide
        function goToSlide(index) {
            currentIndex = Math.max(0, Math.min(index, totalItems - 1));
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
            if (currentIndex < totalItems - 1) {
                goToSlide(currentIndex + 1);
            }
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

    // Initialize reviews slider
    const reviewsSlider = initSlider('reviews');

    // Initialize teams slider
    const teamsSlider = initSlider('teams');

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
