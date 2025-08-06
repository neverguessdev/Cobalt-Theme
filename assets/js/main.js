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
            // Don't interfere with iframe video controls or video containers with loaded videos
            if (e.target.tagName === 'IFRAME' ||
                e.target.closest('iframe') ||
                e.target.closest('.video-container') ||
                e.target.closest('.testimonial-card svg.play-button')) {
                return;
            }
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        container.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            // Don't interfere with iframe video controls or video containers with loaded videos
            if (e.target.tagName === 'IFRAME' ||
                e.target.closest('iframe') ||
                e.target.closest('.video-container') ||
                e.target.closest('.testimonial-card svg.play-button')) {
                return;
            }
            currentX = e.touches[0].clientX;
        });

        container.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            isDragging = false;

            // Don't interfere with iframe video controls or video containers with loaded videos
            if (e.target.tagName === 'IFRAME' ||
                e.target.closest('iframe') ||
                e.target.closest('.video-container') ||
                e.target.closest('.testimonial-card svg.play-button')) {
                return;
            }

            const diffX = startX - currentX;
            const threshold = 50;

            if (diffX > threshold) {
                nextSlide();
            } else if (diffX < -threshold) {
                prevSlide();
            }
        });

        // Remove the problematic click event listener that causes sliding
        // container.addEventListener('click', (e) => {
        //     // If clicking on a video container (loaded or not), prevent slider navigation
        //     if (e.target.closest('.video-container')) {
        //         e.stopPropagation();
        //         e.preventDefault();
        //         return false;
        //     }
        // });

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

    // Video Loading Functionality
    function initVideoLoading() {
        const videoContainers = document.querySelectorAll('.video-container[data-video-url]');

        videoContainers.forEach(container => {
            // Use capture phase to handle events before they bubble
            container.addEventListener('click', function(e) {
                // Always stop propagation immediately
                e.stopImmediatePropagation();
                e.preventDefault();

                // Check if video is already loaded
                if (this.querySelector('iframe')) {
                    // Video already loaded, allow iframe to handle the click
                    return false;
                }

                const videoUrl = this.getAttribute('data-video-url');
                if (!videoUrl) return;

                // Convert YouTube URL to embed format
                const embedUrl = convertToEmbedUrl(videoUrl);
                if (!embedUrl) return;

                // Hide all children elements
                const children = this.children;
                for (let i = 0; i < children.length; i++) {
                    children[i].style.display = 'none';
                }

                // Create and insert iframe
                const iframe = document.createElement('iframe');
                iframe.src = embedUrl;
                iframe.width = '100%';
                iframe.height = '100%';
                iframe.style.border = 'none';
                iframe.style.borderRadius = '19px';
                iframe.style.position = 'relative';
                iframe.style.zIndex = '1000';
                iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                iframe.allowFullscreen = true;

                // Add iframe to container
                this.appendChild(iframe);

                // Remove cursor pointer and padding since it's now a video
                this.style.cursor = 'default';
                this.style.padding = '0';
                this.style.pointerEvents = 'none'; // Disable container events

                // Enable iframe events
                iframe.style.pointerEvents = 'auto';

                // Mark container as having video loaded
                this.setAttribute('data-video-loaded', 'true');

                return false;
            }, true); // Use capture phase

            // Remove all other event listeners that might interfere
            container.style.webkitTouchCallout = 'none';
            container.style.webkitUserSelect = 'none';
        });
    }

    // Convert various YouTube URL formats to embed format
    function convertToEmbedUrl(url) {
        // Regular YouTube URL patterns
        const patterns = [
            /(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/,
            /(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+)/,
            /(?:https?:\/\/)?(?:www\.)?youtube\.com\/embed\/([a-zA-Z0-9_-]+)/
        ];

        for (const pattern of patterns) {
            const match = url.match(pattern);
            if (match) {
                const videoId = match[1];

                // Always use autoplay for all devices
                let embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&controls=1&rel=0&modestbranding=1`;

                // Try to extract start time for full YouTube URLs only
                if (url.includes('youtube.com/watch')) {
                    try {
                        const urlObj = new URL(url);
                        const startTime = urlObj.searchParams.get('t') || urlObj.searchParams.get('start');
                        if (startTime) {
                            embedUrl += `&start=${startTime}`;
                        }
                    } catch (e) {
                        // Ignore URL parsing errors
                    }
                }

                return embedUrl;
            }
        }

        return null;
    }

    // Initialize all functionality
    initMobileMenu();
    initVideoLoading();

    // Initialize sliders
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

    // Function to extract YouTube video ID from URL
    function getYouTubeVideoId(url) {
        if (!url) return null;

        const patterns = [
            /(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/,
            /(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+)/,
            /(?:https?:\/\/)?(?:www\.)?youtube\.com\/embed\/([a-zA-Z0-9_-]+)/
        ];

        for (const pattern of patterns) {
            const match = url.match(pattern);
            if (match) {
                return match[1];
            }
        }

        return null;
    }

    // Function to update video container backgrounds
    function updateVideoContainerBackgrounds() {
        const videoContainers = document.querySelectorAll('.video-container[data-video-url]');

        videoContainers.forEach(container => {
            const videoUrl = container.getAttribute('data-video-url');
            const videoId = getYouTubeVideoId(videoUrl);

            if (videoId) {
                // Use YouTube thumbnail API - try maxresdefault first for highest quality
                const img = new Image();
                img.onload = function() {
                    // maxresdefault loaded successfully
                    container.style.backgroundImage = `linear-gradient(180deg, rgba(32, 32, 32, 0.00) 29.33%, #202020 100%), url("https://img.youtube.com/vi/${videoId}/maxresdefault.jpg")`;
                };
                img.onerror = function() {
                    // maxresdefault failed, use hqdefault as fallback
                    container.style.backgroundImage = `linear-gradient(180deg, rgba(32, 32, 32, 0.00) 29.33%, #202020 100%), url("https://img.youtube.com/vi/${videoId}/hqdefault.jpg")`;
                };
                img.src = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
            } else {
                // No valid YouTube URL, use fallback Cobalt logo
                container.style.backgroundImage = `linear-gradient(180deg, rgba(32, 32, 32, 0.00) 29.33%, #202020 100%), url("/wp-content/uploads/2025/07/cobalt-logo-h.png")`;
            }

            // Ensure background properties are set correctly
            container.style.backgroundSize = 'cover';
            container.style.backgroundPosition = 'center';
            container.style.backgroundRepeat = 'no-repeat';
        });
    }

    // Initialize the background update function
    updateVideoContainerBackgrounds();
});
