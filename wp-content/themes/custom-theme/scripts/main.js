document.addEventListener("DOMContentLoaded", function () {

    // Mobile Menu Toggle
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuBtn = document.querySelector('.mobile-menu__btn');
    const mobileMenuOverlay = document.querySelector('.mobile-menu__overlay');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu__list a');
    const body = document.body;

    // Function to close mobile menu
    function closeMobileMenu() {
        mobileMenu.classList.remove('mobile-menu_open');
        body.classList.remove('no-scroll');
    }

    // Open mobile menu
    if (burger) {
        burger.addEventListener('click', function() {
            mobileMenu.classList.add('mobile-menu_open');
            body.classList.add('no-scroll');
        });
    }

    // Close mobile menu - close button
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', closeMobileMenu);
    }

    // Close mobile menu - overlay click
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);
    }

    // Close mobile menu when a link is clicked
    if (mobileMenuLinks.length > 0) {
        mobileMenuLinks.forEach(function(link) {
            link.addEventListener('click', closeMobileMenu);
        });
    }

    // Custom checkbox helper - add checked class to label for CSS targeting
    const checkboxes = document.querySelectorAll('.wpcf7-acceptance input[type="checkbox"], .wpcf7-list-item input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        const label = checkbox.closest('label');
        
        // Update on change
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                if (label) label.classList.add('is-checked');
            } else {
                if (label) label.classList.remove('is-checked');
            }
        });
        
        // Set initial state
        if (checkbox.checked && label) {
            label.classList.add('is-checked');
        }
    });

    // Check if the browser is Safari
    const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
    const backgroundVideoEl = document.querySelector('.background_video');
    const bridgeVideoEl = document.querySelector('.bridge_video');

    if (isSafari && backgroundVideoEl) {

        // / Create and display the GIF
        // const gif = document.createElement('img');
        // gif.src = './videos/sequence.gif'; // Replace with your GIF path
        // backgroundVideoEl.appendChild(gif);
        function generateMainSequence() {
            for(let i = 1; i <= 361; i++){
                sequenceImage = document.createElement('img');



                if(i < 10){
                    sequenceImage.src = `./animation/sequence/animation0000${i}.webp`;
                }else if(i >= 10 && i <= 99){
                    sequenceImage.src = `./animation/sequence/animation000${i}.webp`;
                }else{
                    sequenceImage.src = `./animation/sequence/animation00${i}.webp`;
                }

                if(i == 1){
                    sequenceImage.className = 'active animation-' + i;
                }else{
                    sequenceImage.className = 'animation-' + i;
                }
                sequenceImage.loading = 'lazy';

                if(backgroundVideoEl) {
                    backgroundVideoEl.appendChild(sequenceImage);
                }
            }
        }

        generateMainSequence();

        function startSequenceAnim() {


            let currentImage = 1;

            if(currentImage <= 361){
                setInterval(function (){
                    $('.background_video img').removeClass('active');
                    $('.animation-' + currentImage).addClass('active');
                    currentImage++;
                    if(currentImage == 361){
                        currentImage = 1;
                    }
                }, 28);
            }

        }

        startSequenceAnim();


        const block = document.querySelector(".animation");
        let bridgeImage;
        let isAnimated = false;

        function generateBridgeSequence() {
            if(!bridgeVideoEl) return;
            for(let i = 0; i <= 50; i++){
                bridgeImage = document.createElement('img');
                if(i < 10){
                    bridgeImage.src = `./animation/bridge/bridge00${i}.webp`;
                    bridgeImage.className = 'bridge-' + i;
                    if(i == 0){
                        bridgeImage.className = 'active bridge-' + i;
                    }
                }else{
                    bridgeImage.src = `./animation/bridge/bridge0${i}.webp`;
                    bridgeImage.className = 'bridge-' + i;
                }

                bridgeImage.loading = 'lazy'

                bridgeVideoEl.appendChild(bridgeImage)
            }
        }

        generateBridgeSequence();

        // Function to check if the block is in the viewport
        function isInViewport() {
            const blockTop = block.offsetTop; // The block's top position relative to the document
            const scrollY = window.scrollY || window.pageYOffset; // Current scroll position
            const windowHeight = window.innerHeight; // Height of the viewport
            return scrollY > blockTop; // Check if the block is in the viewport
        }
        // Function to append the GIF when the block is in view
        function checkAndStartAnim() {

            let currentImage = 1;

            if (isInViewport() && !isAnimated) {

                if(currentImage <= 50){
                    setInterval(function (){
                        if(currentImage <= 50){
                            $('.bridge_video img').removeClass('active');
                        }
                        $('.bridge-' + currentImage).addClass('active');
                        currentImage++;
                    }, 50);
                }

                isAnimated = true;

            }
        }



        // Listen for the scroll event to check when the block enters the viewport
        if(block) {
            window.addEventListener('scroll', checkAndStartAnim);
        }


    } else if (backgroundVideoEl) {
        // Create and display the video
        const video = document.createElement('video');
        video.autoplay = true;
        video.muted = true;
        video.loop = true;
        video.playsinline = true;

        const sourceWebM = document.createElement('source');
        sourceWebM.src = 'videos/sequence.webm'; // Replace with your WebM path
        sourceWebM.type = 'video/webm';

        video.appendChild(sourceWebM);
        backgroundVideoEl.appendChild(video);

        // Create and display the video for bridge
        if(bridgeVideoEl) {
            const bridgeVideo = document.createElement('video');
        bridgeVideo.autoplay = false; // Autoplay is disabled; we will manually trigger it
        bridgeVideo.muted = true; // Ensure the video is muted (autoplay restriction workaround)
        bridgeVideo.loop = false;
        bridgeVideo.playsinline = true;
        bridgeVideo.id = 'normal'; // Add ID for future reference

        const bridgeSourceWebM = document.createElement('source');
        bridgeSourceWebM.src = './videos/bridge.webm'; // Replace with your WebM path
        bridgeSourceWebM.type = 'video/webm';

        bridgeVideo.appendChild(bridgeSourceWebM);
        bridgeVideoEl.appendChild(bridgeVideo);

        // Get the normal video element
        const normalVideo = document.getElementById('normal');

        // Get the absolute position of the video block
        const block = document.querySelector('.animation'); // Assuming this is the block to track
        const blockTop = block.getBoundingClientRect().top + window.pageYOffset;

        let videoPlayed = false; // Flag to track if the video has already been played

        // Listen for scroll events
        window.addEventListener('scroll', function () {
            const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // Check if the user has scrolled down to the block and the video hasn't played yet
            if (!videoPlayed && currentScrollTop >= blockTop - 200) {
                normalVideo.play(); // Manually play the video when the user reaches the block
                videoPlayed = true; // Set the flag to prevent future plays
            }
        });
        }
    }





    let textarea = document.querySelector('.textarea');
    if(textarea){
        textarea.addEventListener('input',function (e){
            this.style.height = 'auto';
            this.style.height = `${this.scrollHeight}px`;
        })
    }

    // Function to initialize or reinitialize Swiper
    function initializeSwiper() {
        // Function to handle starting and stopping Swiper autoplay
        function handleAutoplay(swiperInstance, inView) {
            if (inView) {
                swiperInstance.autoplay.start();  // Start autoplay when in viewport
            } else {
                swiperInstance.autoplay.stop();   // Stop autoplay when out of viewport
            }
        }

        // Initialize intersection observer
        function createObserver(element, swiperInstance) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    handleAutoplay(swiperInstance, entry.isIntersecting);
                });
            }, { threshold: 0.5 }); // Trigger when at least 50% of the element is visible

            observer.observe(element);
        }

        if (window.innerWidth < 800) {
            $('.why_we_block').addClass('swiper');
            $('.why_we_block .row').addClass('swiper-wrapper');
            $('.why_we_block .why_item').addClass('swiper-slide');

            $('.services_block').addClass('swiper');
            $('.services_block .service_row').addClass('swiper-wrapper');
            $('.services_block .service_item').addClass('swiper-slide');

            $('.benefits_block').addClass('swiper');
            $('.benefits_block .row').addClass('swiper-wrapper');
            $('.benefits_block .why_item').addClass('swiper-slide');

            // Initialize Swiper for .why_we_block if not already initialized
            let whyWeSwiper;
            const whyWeBlock = document.querySelector('.why_we_block');
            if (whyWeBlock && !whyWeBlock.swiper) {
                whyWeSwiper = new Swiper('.why_we_block', {
                    autoplay: {
                        delay: 3000,  // 3 seconds delay
                        disableOnInteraction: false,
                    },
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: '100%',
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
                createObserver(document.querySelector('.why_we_block'), whyWeSwiper);
            }

            // Initialize Swiper for .services_block if not already initialized
            let servicesSwiper;
            const servicesBlock = document.querySelector('.services_block');
            if (servicesBlock && !servicesBlock.swiper) {
                servicesSwiper = new Swiper('.services_block', {
                    autoplay: {
                        delay: 3000,  // 3 seconds delay
                        disableOnInteraction: false,
                    },
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: '100%',
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
                createObserver(document.querySelector('.services_block'), servicesSwiper);
            }

            // Initialize Swiper for .benefits_block if not already initialized
            let benefitsSwiper;
            const benefitsBlock = document.querySelector('.benefits_block');
            if (benefitsBlock && !benefitsBlock.swiper) {
                benefitsSwiper = new Swiper('.benefits_block', {
                    autoplay: {
                        delay: 3000,  // 3 seconds delay
                        disableOnInteraction: false,
                    },
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: '100%',
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
                createObserver(document.querySelector('.benefits_block'), benefitsSwiper);
            }

        } else {
            // Remove Swiper classes and destroy instances for larger screen sizes
            $('.why_we_block').removeClass('swiper');
            $('.why_we_block .row').removeClass('swiper-wrapper');
            $('.why_we_block .why_item').removeClass('swiper-slide');
            const whyWeBlockEl = document.querySelector('.why_we_block');
            const whyWeSwiperInstance = whyWeBlockEl ? whyWeBlockEl.swiper : null;
            if (whyWeSwiperInstance) whyWeSwiperInstance.destroy(true, true);

            $('.services_block').removeClass('swiper');
            $('.services_block .service_row').removeClass('swiper-wrapper');
            $('.services_block .service_item').removeClass('swiper-slide');
            const servicesBlockEl = document.querySelector('.services_block');
            const servicesSwiperInstance = servicesBlockEl ? servicesBlockEl.swiper : null;
            if (servicesSwiperInstance) servicesSwiperInstance.destroy(true, true);

            $('.benefits_block').removeClass('swiper');
            $('.benefits_block .row').removeClass('swiper-wrapper');
            $('.benefits_block .why_item').removeClass('swiper-slide');
            const benefitsBlockEl = document.querySelector('.benefits_block');
            const benefitsSwiperInstance = benefitsBlockEl ? benefitsBlockEl.swiper : null;
            if (benefitsSwiperInstance) benefitsSwiperInstance.destroy(true, true);
        }
    }

    // Reinitialize Swiper on window resize
    window.addEventListener('resize', function () {
        initializeSwiper();
    });

    initializeSwiper();

    // 3D Tilt Effect on Mouse Move
    const rotatingBoxes = document.querySelectorAll('.rotating-box');
    console.log('Found rotating boxes:', rotatingBoxes.length);
    
    rotatingBoxes.forEach((box, index) => {
        console.log('Setting up box', index, box);
        
        box.addEventListener('mouseenter', function() {
            console.log('Mouse entered box', index);
        });
        
        box.addEventListener('mousemove', function(e) {
            e.stopPropagation();
            
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = ((y - centerY) / centerY) * -15; // -15 to 15 degrees
            const rotateY = ((x - centerX) / centerX) * 15;  // -15 to 15 degrees
            
            console.log('Applying transform:', rotateX, rotateY);
            
            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
            this.style.willChange = 'transform';
        });
        
        box.addEventListener('mouseleave', function() {
            console.log('Mouse left box', index);
            this.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            this.style.willChange = 'auto';
        });
    });

});