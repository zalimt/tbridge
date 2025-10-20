<?php
/*Template Name: Главная */
$path = get_template_directory_uri() . '/';
get_header();?>

<!-- body code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Reliable bridge to crypto assets</title>

    <!-- swiper -->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>-->

    <!-- main styles -->
    <!--    <link rel="stylesheet" href="src<?=$path?>assets/scss/main.scss">-->
    <script type="module" crossorigin src="<?=$path?>assets/index-BsdXIbfR.js"></script>
    <link rel="stylesheet" crossorigin href="<?=$path?>assets/index-CIbRv2Gr.css">
</head>
<body>

<!-- Main Wrapper -->
<div class="wrapper">

    <!-- Header -->
    <header>
        <div class="container">
            <nav class="header_menu">
                <ul>
                    <li><a href="#about">Tría Bridge</a></li>
                    <li><a href="#license">License</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#become_a_client">Become a client</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                </ul>
                <ul class="mobile_menu">
                    <a class="logo" href="#">
                        <img src="<?=$path?>images/logo_desktop.svg" alt="">
                    </a>
                    <button class="burger">
                        <img src="<?=$path?>images/hamburger.svg" alt="">
                    </button>
                </ul>
            </nav>
        </div>
    </header>

    <!--        Mobile menu-->
    <div class="mobile-menu">
        <div class="mobile-menu__overlay"></div>

        <div class="mobile-menu__dialog">
            <button class="mobile-menu__btn">
                <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.00037 2L16 17" stroke="#0E2E40" stroke-width="2" stroke-linecap="round"/>
                    <path d="M15.9996 2L1.00001 17" stroke="#0E2E40" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a href="#to_about_link" class="mobile-menu__link">About</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#to_why_us_link" class="mobile-menu__link">Why Us</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#to_services_title" class="mobile-menu__link">Services</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#to_license_link" class="mobile-menu__link">Our Licenses</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#to_become_client_link" class="mobile-menu__link">Become a Client</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#contacts" class="mobile-menu__link">Contacts</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Hero -->
    <section class="hero">

        <div class="container">

            <div class="hero_vectors">
                <img src="<?=$path?>images/hero_vector_1.svg" alt="" class="vector_1">
            </div>

            <div class="background_video" style="display: none;">
                <!-- <video autoplay muted loop playsinline>
                    <source src="videos/sequence.mp4" type="video/mp4">
                </video> -->
            </div>

            <div class="hero_logo">
                <img src="<?=$path?>images/logo_desktop.svg" alt="">
            </div>

            <h1 class="hero_title">
                Reliable bridge <br> <span>to crypto assets</span>
            </h1>
            <div class="hero_subtitle">Exchange. Invest. Manage.</div>
            <div class="hero_action">
                <a href="#about" id="to_about_link">
                    Learn more about&nbsp;Tría Bridge
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <rect x="10.6328" y="0.367188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 10.6328 0.367188)" fill="white"/>
                        <path d="M13.4612 10.1741L10.6328 13.0026L7.80439 10.1741" stroke="#078496"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="vectors_container">
            <div class="hero_vectors">
                <img src="<?=$path?>images/hero_vector_2.svg" alt="" class="vector_2">
                <img src="<?=$path?>images/hero_vector_3.svg" alt="" class="vector_3">
                <img src="<?=$path?>images/mobile_hero_vector.svg" alt="" class="mobile_hero_vector mobile">
            </div>
        </div>

    </section>

    <!-- Animation section -->
    <section class="animation bridge_section" id="about">
        <div class="container">
            <img class="line" src="<?=$path?>images/animation_line.png" alt="">
            <div class="texts_row">
                <div class="text_item">
                    <strong>Tr&iacute;a&nbsp;Bridge</strong> is&nbsp;committed to&nbsp;building <br> a&nbsp;modern and&nbsp;transformative business <br> in&nbsp;the&nbsp;digital asset industry, grounded in&nbsp;transparency, ethical values, and&nbsp;regulatory norms.
                </div>
                <div class="text_item">
                    Our team comprises experienced <br> professionals from&nbsp;the&nbsp;financial <br> and&nbsp;information security industries.
                </div>
            </div>
            <div class="bridge_video" style="display: none;">
                <!--                    <img src="./animation/bridge/bridge050.webp" alt="1">-->
            </div>
            <img src="<?=$path?>images/animation_vector.svg" class="animation_vector1" alt="">
            <img src="<?=$path?>images/animation_vector2.svg" class="animation_vector2" alt="">
            <img src="<?=$path?>images/animation_vector3.svg" class="animation_vector3" alt="">
        </div>

        <div class="next_section">
            <a href="#why_we">

                Why work with&nbsp;Us?

                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                    <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                </svg>

            </a>
        </div>
    </section>

    <!-- Why We? -->
    <section class="why_we" id="why_we">
        <div class="container">
            <h2 class="section_title" id="to_why_us_link">Why us</h2>
            <div class="why_we_block">
                <div class="row">

                    <!-- Why Item -->
                    <div class="why_item">
                        <div class="why_image">
                            <img src="<?=$path?>images/why_1.svg" alt="">
                        </div>
                        <div class="why_box rotating-box">
                            <h3 class="why_name">Accuracy</h3>
                            <div class="why_description">Analytical tools for&nbsp;monitoring and&nbsp;allocating funds from&nbsp;the&nbsp;blockchain.
                                <br><br>Regular reports from&nbsp;the&nbsp;team of&nbsp;analysts.
                            </div>
                        </div>
                    </div>

                    <!-- Why Item -->
                    <div class="why_item">
                        <div class="why_image">
                            <img src="<?=$path?>images/why_2.svg" alt="">
                        </div>
                        <div class="why_box rotating-box">
                            <h3 class="why_name">Security&nbsp;first</h3>
                            <div class="why_description">Digital assets are managed using a&nbsp;secure custody provider.
                                <br><br>Safe operations with&nbsp;a&nbsp;customized transaction authorization policy.
                            </div>
                        </div>
                    </div>

                    <!-- Why Item -->
                    <div class="why_item">
                        <div class="why_image">
                            <img src="<?=$path?>images/why_3.svg" alt="">
                        </div>
                        <div class="why_box rotating-box">
                            <h3 class="why_name">Accessibility</h3>
                            <div class="why_description">Easy-to-use investments in&nbsp;a&nbsp;high-growth field.
                                <br><br>Online tools with&nbsp;a&nbsp;personalized <br class="mobile"> mobile application.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <div class="next_section">
            <a href="#services">

                Learn more about our services

                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                    <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                </svg>

            </a>
        </div>
    </section>

    <section class="service" id="services">
        <div class="container service_container">

            <div class="services_vectors">
                <img src="<?=$path?>images/services_vector_1.svg" alt="" class="vector_1">
                <img src="<?=$path?>images/services_vector_2.svg" alt="" class="vector_2">
            </div>

            <div class="section_title" id="to_services_title">
                Services
            </div>

            <div class="services_block">
                <div class="service_row">
                    <div class="service_item">
                        <img src="<?=$path?>images/service_1.png" alt="" class="service_bg">
                        <div class="service_item_text">
                            Exchange <br>
                            between <br>
                            crypto assets
                        </div>
                    </div>
                    <div class="service_item">
                        <img src="<?=$path?>images/service_2.png" alt="" class="service_bg">
                        <div class="service_item_text">
                            Custody <br>
                            service
                        </div>
                    </div>
                    <div class="service_item">
                        <img src="<?=$path?>images/service_3.png" alt="" class="service_bg">
                        <div class="service_item_text">
                            Brokerage
                        </div>
                    </div>
                    <div class="service_item">
                        <img src="<?=$path?>images/service_4.png" alt="" class="service_bg">
                        <div class="service_item_text">
                            Provision <br>
                            of Investment <br>
                            Advice
                        </div>
                    </div>

                    <div class="service_item">
                        <img src="<?=$path?>images/service_5.png" alt="" class="service_bg">
                        <div class="service_item_text">
                            Portfolio <br> management
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="next_section" id="to_license_link">
                <a href="#license">

                    Learn more about our licenses

                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                        <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                    </svg>

                </a>
            </div>
        </div>
    </section>

    <section class="licenses" id="license">
        <div class="licenses_vectors">
            <img src="<?=$path?>images/licenses_vector_1.svg" class="vector_1" alt="">
            <img src="<?=$path?>images/licenses_vector_1.svg" class="vector_2" alt="">
            <img src="<?=$path?>images/licenses_vector_2.svg" class="vector_3" alt="">
        </div>
        <div class="container">


            <div class="licenses_block">
                <div class="licenses_text"><span>Tr&iacute;a&nbsp;Bridge</span> (Tokenomica&nbsp;Bridge&nbsp;Ltd) is&nbsp;a&nbsp;licensed
                    crypto asset service provider based in&nbsp;Cyprus.
                    Tr&iacute;a Bridge operates under&nbsp;the&nbsp;registration number <span>HE&nbsp;429492</span> and&nbsp;is&nbsp;licensed
                    by&nbsp;the&nbsp;Cyprus Securities and&nbsp;Exchange Commission <span>with&nbsp;Registration Number&nbsp;013/24 dated&nbsp;14/05/2024.</span>
                </div>
                <div class="next_section" id="to_become_client_link">
                    <a href="#become_a_client">

                        Become a&nbsp;client

                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                            <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="form" id="become_a_client">
        <div class="container">
            <?php echo apply_shortcodes( '[contact-form-7 id="5b7d0eb" title="Contact form"]' ); ?>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <img class="contacts_img" src="<?=$path?>images/contacts_vector.svg" alt="">
        <div class="container">


            <a href="#" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="194" height="54" viewBox="0 0 194 54" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.597065 7.6875H63.065C63.5956 7.6875 63.861 8.31723 63.4909 8.68399L54.6543 17.3583C54.4867 17.521 54.2598 17.6178 54.0223 17.6178H35.4832C35.4745 17.6178 35.4658 17.6196 35.457 17.6213C35.4483 17.623 35.4396 17.6248 35.4309 17.6248C34.139 17.6524 33.0986 18.6835 33.0986 19.9568V22.1017H48.6215C49.1773 22.1017 49.4571 22.7873 49.0632 23.1866L47.3259 24.9457L39.7471 32.63C39.5704 32.8108 39.3311 32.9125 39.0808 32.9125H33.0986V43.8762C33.0986 43.8848 33.096 43.8926 33.0934 43.9004C33.0908 43.9082 33.0881 43.916 33.0881 43.9246C33.0742 44.1391 32.9939 44.3433 32.8368 44.4955L24.0141 53.1595C23.6405 53.5297 22.9981 53.2667 22.9981 52.7477L22.9876 19.9534C22.9876 18.6801 21.9507 17.649 20.6589 17.6213C20.6502 17.6213 20.6415 17.6196 20.6327 17.6178C20.624 17.6161 20.6153 17.6144 20.6065 17.6144H9.64318C9.40577 17.6144 9.17883 17.521 9.01124 17.3583L0.17461 8.68399C-0.198965 8.31723 0.0663782 7.6875 0.597065 7.6875Z" fill="#194453"/>
                    <path d="M181.529 50.1626V44.562H193.195V42.0401H181.529V37.3895H193.816V34.8555H179.635C179.155 34.8555 178.764 35.2467 178.764 35.7272V51.8249C178.764 52.3058 179.155 52.697 179.635 52.697H193.999V50.1626H181.529Z" fill="#222831"/>
                    <path d="M174.728 43.2576H167.032C166.552 43.2576 166.16 43.6488 166.16 44.1293V44.9203C166.16 45.4008 166.552 45.792 167.032 45.792H172.968V49.8957C172.755 49.9513 172.518 50.0073 172.259 50.0633C171.808 50.1515 171.309 50.2361 170.783 50.3136C170.243 50.3844 169.658 50.4449 169.046 50.4927C168.445 50.5401 167.829 50.5643 167.215 50.5643C165.662 50.5643 164.294 50.3878 163.15 50.0399C162.024 49.6977 161.075 49.219 160.332 48.619C159.607 48.028 159.058 47.3179 158.7 46.5147C158.342 45.6882 158.161 44.7708 158.161 43.7882C158.161 42.7336 158.346 41.7759 158.709 40.9456C159.077 40.1232 159.632 39.4153 160.361 38.8413C161.104 38.2558 162.055 37.7975 163.188 37.4783C164.342 37.1527 165.721 36.9877 167.288 36.9877C168.052 36.9877 168.771 37.0426 169.426 37.1508C170.096 37.2599 170.724 37.4089 171.296 37.5947C171.877 37.7805 172.419 37.9992 172.912 38.2458C173.419 38.4954 173.901 38.7642 174.346 39.0449L175.197 39.5818V36.3555L174.856 36.2131C174.264 35.9661 173.666 35.7403 173.086 35.5445C172.493 35.3354 171.874 35.157 171.253 35.0165C170.623 34.8656 169.957 34.7506 169.278 34.6765C168.595 34.5931 167.847 34.5508 167.056 34.5508C166.007 34.5508 164.984 34.6353 164.019 34.8014C163.043 34.9616 162.117 35.2093 161.27 35.5367C160.417 35.8604 159.625 36.2802 158.914 36.7863C158.204 37.2973 157.586 37.9073 157.073 38.6007C156.569 39.2889 156.173 40.0757 155.897 40.9382C155.621 41.7944 155.48 42.7533 155.48 43.7882C155.48 45.3389 155.784 46.715 156.382 47.8782C156.98 49.038 157.814 50.0166 158.865 50.7893C159.906 51.5402 161.147 52.1101 162.557 52.4839C163.945 52.8432 165.467 53.0253 167.081 53.0253C167.866 53.0253 168.623 52.996 169.329 52.9381C170.045 52.8807 170.744 52.7972 171.413 52.6886C172.084 52.5725 172.74 52.4294 173.359 52.2644C173.985 52.0994 174.615 51.9065 175.229 51.6911L175.599 51.5606V44.1293C175.599 43.6488 175.208 43.2576 174.728 43.2576Z" fill="#222831"/>
                    <path d="M151.08 36.7451C150.16 36.0513 149.061 35.5552 147.812 35.2708C146.6 34.9953 145.272 34.8555 143.865 34.8555H135.573C135.092 34.8555 134.701 35.2467 134.701 35.7272V51.8249C134.701 52.3058 135.092 52.697 135.573 52.697H143.89C144.829 52.697 145.735 52.638 146.588 52.5209C147.457 52.3944 148.273 52.1923 149.012 51.9209C149.773 51.6435 150.472 51.2694 151.087 50.8111C151.722 50.3439 152.267 49.7676 152.707 49.0983C153.144 48.4339 153.484 47.6496 153.717 46.7712C153.955 45.892 154.077 44.8805 154.077 43.764C154.077 42.0906 153.81 40.6641 153.284 39.5283C152.761 38.3751 152.017 37.4374 151.08 36.7451ZM137.333 37.3532H143.865C144.632 37.3532 145.367 37.3969 146.048 37.4826C146.71 37.5664 147.33 37.7125 147.894 37.9183C148.443 38.1115 148.94 38.3688 149.372 38.684C149.793 38.9906 150.155 39.3789 150.451 39.8409C150.75 40.2996 150.983 40.8547 151.146 41.4906C151.312 42.1406 151.397 42.9056 151.397 43.764C151.397 45.0444 151.212 46.1123 150.847 46.9362C150.491 47.7368 149.988 48.3846 149.355 48.8603C148.715 49.3383 147.93 49.6824 147.026 49.8826C146.077 50.0847 145.014 50.187 143.865 50.187H137.333V37.3532Z" fill="#222831"/>
                    <path d="M130.919 34.8555H128.287V52.697H130.919V34.8555Z" fill="#222831"/>
                    <path d="M123.22 43.5923C123.965 42.7369 124.342 41.6022 124.342 40.2202C124.342 39.3411 124.191 38.5564 123.893 37.8879C123.584 37.1945 123.088 36.6123 122.427 36.1622C121.791 35.7146 120.973 35.3816 119.999 35.1732C119.056 34.9623 117.914 34.8555 116.603 34.8555H108.591C108.11 34.8555 107.719 35.2467 107.719 35.7272V52.697H110.35V45.5364H116.603C116.862 45.5364 117.112 45.5327 117.352 45.5238C117.491 45.5194 117.628 45.5134 117.763 45.5057L122.883 52.3481C123.047 52.5665 123.308 52.697 123.581 52.697H126.465L120.59 45.1056C121.739 44.7789 122.621 44.272 123.22 43.5923ZM110.35 37.3895H114.984C116.297 37.3895 117.417 37.4337 118.32 37.5212C119.182 37.5972 119.879 37.747 120.391 37.9658C120.848 38.1619 121.164 38.423 121.358 38.7674C121.56 39.1182 121.662 39.6073 121.662 40.2202C121.662 40.8387 121.557 41.3293 121.348 41.6816C121.157 42.009 120.836 42.2641 120.375 42.4588C119.853 42.672 119.149 42.8188 118.288 42.8945C117.385 42.966 116.256 43.0024 114.935 43.0024H110.35V37.3895Z" fill="#222831"/>
                    <path d="M103.997 44.1144C103.578 43.6954 103.037 43.358 102.389 43.111C102.349 43.0962 102.31 43.0813 102.269 43.0673C102.563 42.8945 102.818 42.6939 103.028 42.4703C103.362 42.1265 103.611 41.7101 103.763 41.2429C103.921 40.7887 104.001 40.2521 104.001 39.6481C104.001 38.9773 103.908 38.3807 103.727 37.8838C103.549 37.3688 103.29 36.9197 102.963 36.5556C102.643 36.1874 102.255 35.8856 101.815 35.6608C101.403 35.4462 100.946 35.2782 100.468 35.1655C100.002 35.0442 99.5076 34.9611 98.9998 34.9181C98.5107 34.8766 98.0114 34.8555 97.516 34.8555H88.3952C87.9144 34.8555 87.5234 35.2467 87.5234 35.7272V51.8249C87.5234 52.3058 87.9144 52.697 88.3952 52.697H97.735C98.3709 52.697 98.9968 52.6718 99.5956 52.6221C100.202 52.5717 100.783 52.4812 101.33 52.351C101.878 52.212 102.386 52.0258 102.846 51.7963C103.336 51.5468 103.76 51.2208 104.106 50.8289C104.46 50.4281 104.738 49.9494 104.931 49.4058C105.122 48.8696 105.219 48.2374 105.219 47.5269C105.219 46.8361 105.123 46.2028 104.934 45.6466C104.737 45.0544 104.422 44.539 103.997 44.1144ZM90.155 42.0646V37.3287H97.0167C97.7561 37.3287 98.3922 37.3676 98.9167 37.4459C99.4247 37.513 99.8515 37.6094 100.196 37.7366C100.499 37.8419 100.731 37.9654 100.894 38.1093C101.058 38.2483 101.181 38.3974 101.265 38.559C101.348 38.7125 101.4 38.8709 101.423 39.0415C101.452 39.2517 101.467 39.4642 101.467 39.6722C101.467 40.0115 101.418 40.3363 101.319 40.6474C101.247 40.8895 101.086 41.1027 100.819 41.3026C100.533 41.5221 100.094 41.706 99.5202 41.8477C98.9071 41.9916 98.0648 42.0646 97.0167 42.0646H90.155ZM102.242 46.1282C102.422 46.4946 102.514 46.957 102.514 47.5024C102.514 48.0049 102.436 48.4324 102.28 48.7806C102.145 49.0913 101.917 49.3438 101.585 49.5511C101.225 49.7721 100.725 49.9397 100.104 50.0483C99.4482 50.1566 98.6182 50.2115 97.6374 50.2115H90.155V44.5134H97.4305C98.3713 44.5134 99.1924 44.5798 99.876 44.7114C100.518 44.8286 101.043 45.0125 101.435 45.2576C101.804 45.4875 102.067 45.7723 102.242 46.1282Z" fill="#222831"/>
                    <path d="M124.706 7.72266H121.951V26.4039H124.706V7.72266Z" fill="#222831"/>
                    <path d="M116.533 16.8707C117.313 15.975 117.708 14.7869 117.708 13.3399C117.708 12.4201 117.55 11.5986 117.237 10.8978C116.913 10.1714 116.394 9.56181 115.702 9.09086C115.037 8.62224 114.18 8.27359 113.161 8.05539C112.173 7.83447 110.977 7.72266 109.605 7.72266H101.215C100.712 7.72266 100.303 8.13226 100.303 8.63544V26.4039H103.058V18.9063H109.605C109.875 18.9063 110.137 18.9024 110.389 18.8931C110.534 18.8884 110.678 18.8822 110.82 18.8741L116.181 26.0393C116.352 26.2676 116.625 26.4039 116.911 26.4039H119.931L113.779 18.4551C114.983 18.1131 115.906 17.5824 116.533 16.8707ZM111.369 16.14C110.423 16.2149 109.242 16.253 107.858 16.253H103.058V10.376H107.909C109.284 10.376 110.457 10.4222 111.402 10.5138C112.306 10.5934 113.035 10.7502 113.571 10.9793C114.05 11.1847 114.38 11.458 114.583 11.8187C114.795 12.1864 114.902 12.6981 114.902 13.3399C114.902 13.9871 114.792 14.5012 114.573 14.87C114.373 15.2129 114.037 15.48 113.554 15.6838C113.008 15.907 112.271 16.0608 111.369 16.14Z" fill="#222831"/>
                    <path d="M79.4961 10.3379H87.465V26.4039H90.2075V10.3379H98.1765V7.72266H79.4961V10.3379Z" fill="#222831"/>
                    <path d="M138.631 7.72266H137.56C137.095 7.72266 136.672 7.97853 136.457 8.39007L127.031 26.4039H130.089L132.499 21.7879H143.691L146.101 26.4039H149.159L139.733 8.39045C139.518 7.97851 139.095 7.72266 138.631 7.72266ZM133.884 19.1598L138.101 11.1009L142.307 19.1598H133.884Z" fill="#222831"/>
                    <path d="M129.114 2.81548C129.259 2.7554 129.322 2.5856 129.253 2.44523L128.501 0.924372C128.435 0.790632 128.273 0.7355 128.139 0.80105L121.254 4.1688C121.118 4.23528 121.062 4.40019 121.131 4.53505L121.688 5.62968C121.752 5.75585 121.903 5.81134 122.033 5.75704L129.114 2.81548Z" fill="#222831"/>
                </svg>
            </a>
            <div class="contacts_block">
                <div class="section_title">Contacts</div>
                <div class="contacts_infos">
                    Telephone:&nbsp;<a href="tel:+35725259376">+357&nbsp;25&nbsp;259&nbsp;376</a> <br>
                    Fax:&nbsp;<a href="tel:+35725259374">+357&nbsp;25&nbsp;259&nbsp;374</a><br>
                    Country: Cyprus <br>
                    E-Mail:&nbsp;<a href="mailto:info@triabridge.com">info@triabridge.com</a>
                    <br> <br>
                    Address: <br>
                    <span class="address-line">Spyrou Kyprianou, 61, Mesa Geitonia,</span> <br>
                    <span class="address-line">4003, Limassol, Cyprus</span>
                </div>
            </div>
        </div>
    </section>
</div>

<!--    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>-->
<!--    <script src="src/modules/main.js"></script>-->

</body>
</html>
<!--// body code -->

<?php get_footer(); ?>
