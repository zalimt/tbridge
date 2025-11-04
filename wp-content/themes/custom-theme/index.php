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

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?=$path?>images/logo.svg">
    <link rel="apple-touch-icon" href="<?=$path?>images/logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- swiper -->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>-->

    <!-- main styles -->
    <link rel="stylesheet" href="<?=$path?>style.css?v=<?=time()?>">
</head>
<body>

<!-- Main Wrapper -->
<div class="wrapper">

    <!-- Header -->
    <header>
        <div class="container">
            <nav class="header_menu">
                <ul class="header_menu_left">
                    <li><a href="#about">Tría Bridge</a></li>
                    <li><a href="#services-section">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                </ul>
                <div class="header_logo">
                    <a href="#">
                        <img src="<?=$path?>images/logo_desktop.svg" alt="Tría Bridge">
                    </a>
                </div>
                <ul class="header_menu_right">
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#license">License</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                </ul>
                <ul class="mobile_menu">
                    <a class="logo" href="#">
                        <img src="<?=$path?>images/logo_desktop.svg" alt="Tría Bridge">
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
                    <path d="M1.00037 2L16 17" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                    <path d="M15.9996 2L1.00001 17" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            <ul class="mobile-menu__list">
                <li><a href="#about">Tría Bridge</a></li>
                <li><a href="#services-section">Services</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#license">License</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </ul>
        </div>
    </div>

    <!-- Hero -->
    <section class="hero">
        <div class="container">

            <!-- <div class="background_video" style="display: none;">
                <video autoplay muted loop playsinline>
                    <source src="videos/sequence.mp4" type="video/mp4">
                </video>
            </div> -->


            <h1 class="hero_title">
            <strong>Reliable Bridge</strong> to Crypto Assets
            </h1>
            <div class="hero_subtitle">Exchange <span>Invest</span> Manage</div>
            <div class="hero_action">
                <a href="#about" id="to_about_link">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
  <path d="M19.1424 8.51053L12.7532 2.12132C11.5816 0.949747 9.68209 0.949747 8.51052 2.12132L2.12131 8.51052C0.949738 9.6821 0.949738 11.5816 2.12131 12.7532L8.51052 19.1424C9.68209 20.3139 11.5816 20.3139 12.7532 19.1424L19.1424 12.7532C20.3139 11.5816 20.3139 9.6821 19.1424 8.51053Z" fill="#078496"/>
  <path d="M13.8142 10.1604L10.6316 13.342L7.44995 10.1604L8.15698 9.45337L10.6316 11.928L13.1072 9.45337L13.8142 10.1604Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <img src="<?=$path?>images/hero_vector_2.svg" alt="" class="vector_2">
        <img src="<?=$path?>images/hero_vector_3.svg" alt="" class="vector_3">
    </section>
    <!-- Animation section -->
    <section class="animation bridge_section" id="about">
        <div class="container">
            <img class="line" src="<?=$path?>images/animation_line.png" alt="">
            <div class="texts_row">
                <div class="text_item">
                    <strong>Tr&iacute;aBridge</strong> is committed to building modern and transformative business in the digital asset industry, grounded in transparency, ethical values, and regulatory norms.
                </div>
                <div class="text_item">
                    Our team comprises experienced professionals from the financial and information security industries.
                </div>
            </div>
            <div class="bridge_video" style="display: none;">
                <!--                    <img src="./animation/bridge/bridge050.webp" alt="1">-->
            </div>
        </div>

        <div class="next_section">
            <a href="#why_we">

                Why work with us?

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
                            <div class="why_description">
                                <p>Analytical tools for monitoring and allocating funds from the blockchain.</p>
                                <p>Regular reports from the team of analysts.</p>
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
                            <div class="why_description">
                                <p>Digital assets are managed using a secure custody provider.</p>
                                <p>Safe operations with a customized transaction authorization policy.</p>
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
                            <div class="why_description">
                                <p>Easy-to-use investments in a high-growth field.</p>
                                <p>Online tools with a personalized mobile application.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="next_section">
            <a href="#services-section">

                Learn more about our services

                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                    <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                </svg>

            </a>
        </div>
    </section>

    <section class="services-section" id="services-section">
        <div class="container service-section_container">

            <div class="section_title" id="to_services_title">
                Services
            </div>

            <div class="services-section_block">
                <img src="<?=$path?>images/hero_vector_2.svg" alt="" class="vector_2">
                <img src="<?=$path?>images/hero_vector_1.svg" alt="" class="vector_3">
                <div class="service_row">
                    <div class="service_item service-item-1">
                        <div class="service_item_text">
                            <strong>Exchange</strong>Between Crypto Assets
                        </div>
                    </div>
                    <div class="service_item service-item-2">
                        <div class="service_item_text">
                            <strong>Custody</strong> Service
                        </div>
                    </div>
                    <div class="service_item service-item-3">
                        <div class="service_item_text">
                            <strong>Brokerage</strong>Service
                        </div>
                    </div>
                    <div class="service_item service-item-4">
                        <div class="service_item_text">
                            <strong>Investment Advice</strong>Provision
                        </div>
                    </div>
                    <div class="service_item service-item-5">
                        <div class="service_item_text">
                            <strong>Portfolio management</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="next_section">
                <a href="#pricing">

                    Learn more about our pricing

                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                        <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                    </svg>

                </a>
            </div>
        </div>
    </section>

    <!-- Transparent Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="container">
            <h2 class="section_title">Transparent pricing</h2>
            <div class="pricing_subtitle">No hidden fees, no surprises</div>
            
            <div class="pricing_cards">
                <div class="pricing_card_h">
                    <div class="pricing_card_left">
                        <div class="pricing_card_title">Crypto Account</div>
                        <div class="pricing_card_sub">Manage your digital assets securely and legitimately</div>
                    </div>
                    <div class="pricing_card_right">
                        <div class="kv"><span>Assets</span><span>BTC, ETH, USDC, and others</span></div>
                        <div class="kv"><span>Opening</span><span class="pricing_free">Free</span></div>
                        <div class="kv"><span>Deposits</span><span class="pricing_free">Free</span></div>
                        <div class="kv"><span>Withdrawals</span><span class="pricing_free">Free</span></div>
                        <div class="kv no_border"><span>Safekeeping</span><span>0,25% annum</span></div>
                    </div>
                </div>

                <div class="pricing_card_h">
                    <div class="pricing_card_left">
                        <div class="pricing_card_title">Fiat <> Crypto</div>
                        <div class="pricing_card_sub">Switch between traditional and digital finance easily</div>
                    </div>
                    <div class="pricing_card_right">
                        <div class="kv"><span>Purchase fee</span><span>1%</span></div>
                        <div class="kv no_border"><span>Sales fee</span><span>1%</span></div>
                    </div>
                </div>

                <div class="pricing_card_h">
                    <div class="pricing_card_left">
                        <div class="pricing_card_title">Exchange</div>
                        <div class="pricing_card_sub">Adjust your portfolio to your needs and the market</div>
                    </div>
                    <div class="pricing_card_right">
                        <div class="kv no_border"><span>Exchange fee</span><span>0,5%</span></div>
                    </div>
                </div>
            </div>
            
            <div class="next_section">
                <a href="#benefits">

                    Learn more about our benefits

                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                        <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                    </svg>

                </a>
            </div>
        </div>
    </section>

    <!-- Our Benefits Section -->
    <section class="benefits" id="benefits">
        <div class="container">
        <img src="<?=$path?>images/hero_vector_2.svg" alt="" class="vector_2">
        <img src="<?=$path?>images/hero_vector_1.svg" alt="" class="vector_3">
            <h2 class="section_title">Our benefits</h2>
            <div class="benefits_block">
                <div class="row">

                    <!-- Benefit Item -->
                    <div class="why_item">
                        <div class="why_image">
                            <img src="<?=$path?>images/competitive.svg" alt="">
                        </div>
                        <div class="why_box rotating-box">
                            <h3 class="why_name">Competitive Rates</h3>
                            <div class="why_description">Best exchange rates in&nbsp;the&nbsp;market.
                                <br><br>Low transaction fees for&nbsp;all&nbsp;operations.
                            </div>
                        </div>
                    </div>

                    <!-- Benefit Item -->
                    <div class="why_item">
                        <div class="why_image">
                            <img src="<?=$path?>images/fast.svg" alt="">
                        </div>
                        <div class="why_box rotating-box">
                            <h3 class="why_name">Fast Processing</h3>
                            <div class="why_description">Quick transaction processing times.
                                <br><br>Instant confirmations and&nbsp;updates.
                            </div>
                        </div>
                    </div>

                    <!-- Benefit Item -->
                    <div class="why_item">
                        <div class="why_image">
                            <img src="<?=$path?>images/support.svg" alt="">
                        </div>
                        <div class="why_box rotating-box">
                            <h3 class="why_name">24/7 Support</h3>
                            <div class="why_description">Professional support team available around&nbsp;the&nbsp;clock.
                                <br><br>Personalized assistance for&nbsp;your&nbsp;needs.
                            </div>
                        </div>
                    </div>

                </div>
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
        <div class="container">
            <div class="licenses_block">
                <div class="licenses_text">
                    <strong>Tría Bridge (Tokenomica Bridge Ltd)</strong> is a licensed crypto asset service provider based in Cyprus. Tría Bridge operates under the registration number <strong>HE 429492</strong> and is licensed by the Cyprus Securities and Exchange Commission with <strong>Registration Number 013/24 dated 14/05/2024.</strong>
                </div>
                </div>
                <div class="next_section" id="to_become_client_link">
                    <a href="#become_a_client">

                    Become a client

                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <rect x="11" y="0.492188" width="15.0357" height="15.0357" rx="3" transform="rotate(45 11 0.492188)" fill="#078495"/>
                            <path d="M13.8284 10.2972L11 13.1256L8.17157 10.2972" stroke="white"/>
                        </svg>
                    </a>
            </div>
        </div>
    </section>

    <section class="form" id="become_a_client">
        <div class="container">
            <img src="<?=$path?>images/hero_vector_1.svg" alt="" class="vector_3">
            <img src="<?=$path?>images/hero_vector_2.svg" alt="" class="vector_2">
            <h2 class="section_title">Become a Client</h2>
            <?php echo apply_shortcodes( '[contact-form-7 id="5b7d0eb" title="Contact form"]' ); ?>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <img class="contacts_img" src="<?=$path?>images/contacts_vector.svg" alt="">
        <div class="container">


            <div class="contacts_logo">
            <a href="#" onclick="window.scrollTo({top:0,left:0,behavior:'smooth'}); return false;">
                <img src="<?=$path?>images/logo_desktop.svg" alt="Tría Bridge">
            </a>
            </div>
            <div class="contacts_block">
                <div class="contacts_infos">
                    <ul class="contacts_list">
                        <li class="contact_item contact_phone">
                            <span class="label">Telephone</span>
                            <a href="tel:+35725259376">+357 25 259 376</a>
                        </li>
                        <li class="contact_item contact_fax">
                            <span class="label">Fax</span>
                            <a href="tel:+35725259374">+357 25 259 374</a>
                        </ul>
                        <ul class="contacts_list">
                            </li>
                            <li class="contact_item contact_email">
                                <span class="label">E‑Mail</span>
                                <a href="mailto:info@triabridge.com">info@triabridge.com</a>
                            </li>
                            <li class="contact_item contact_address">
                                <span class="label">Address</span>
                                <span>Spyrou Kyprianou, 61, Mesa Geitonia, 4003, Limassol, Cyprus</span>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="<?=$path?>scripts/main.js"></script>

</body>
</html>
<!--// body code -->

<?php get_footer(); ?>
