<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ secure_asset('resources/images/favicon.svg') }}" type="image/x-icon">
    <title>Build Pitchdeck</title>

    <!-- Bootstrap Css Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Slick Slider Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />

    <!-- AOS Animation Cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/style.css', 'resources/js/bootstrap.js'])

</head>

<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <!-- Header Section Start -->
    <header>
        <div class="container">
            <div class="main_navbarclass d-flex justify-content-between align-items-center">
                <a href="/" class="logo">
                    <img class="lazyload" data-src="{{ secure_asset('/resources/images/logo.png') }}" alt="Logo" />
                </a>
                <div class="hamburder_icon">
                    <img class="lazyload" data-src="{{ secure_asset('/resources/images/hamburger.svg') }}" alt="Menu Icon" />
                </div>
                <nav class="nav_links justify-content-lg-between align-items-lg-center">
                    <ul>
                        <li class="active"><a href="/" class="regular_text">Home</a></li>
                        <li class="dropdown_item">
                            <a href="javascript:;" class="regular_text">services <span><i
                                        class="fa-solid fa-angle-down"></i></span></a>
                        </li>
                        <li><a href="about-us.html" class="regular_text">about us</a></li>
                        <li><a href="portfolio.html" class="regular_text">portfolio</a></li>
                        <li>
                            <a href="testimonial.html" class="regular_text">testimonial</a>
                        </li>
                        <li><a href="blog.html" class="regular_text">blog</a></li>
                    </ul>
                    <a href="contact-us.html" class="global_btn">Contact us</a>
                </nav>
                <div class="dropdown_content">
                    <ul>
                        <li class="bg_blue">
                            <a href="info-graphics-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/graphics_design_icon.svg') }}"
                                        alt="Graphics Design">
                                    <h3 class="text">info graphics design</h3>
                                </div>
                                <p class="regular_text">Too much data can overwhelm and disengage your audience. We
                                    transform complex
                                    information into visually compelling infographics that simplify, engage, and
                                    communicate key insights
                                    instantly.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_green">
                            <a href="play-book-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/playBook_design_icon.svg') }}"
                                        alt="play book design">
                                    <h3 class="text">Play book design</h3>
                                </div>
                                <p class="regular_text">A poorly structured playbook can lead to misalignment and
                                    confusion. Our
                                    Playbook Designs turn strategies into clear, visually appealing, and actionable
                                    guides that keep teams
                                    focused and on track.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_yellow">
                            <a href="pitch-deck-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/pitch_design_icon.svg') }}"
                                        alt="Pitch deck design">
                                    <h3 class="text">Pitch deck design</h3>
                                </div>
                                <p class="regular_text">A weak pitch deck can cost you investors. We craft persuasive,
                                    visually striking
                                    presentations that tell a compelling story, build trust, and help you secure your
                                    needed funding.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_orange">
                            <a href="communication-design .html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/pitch_design_icon.svg') }}"
                                        alt="communication design ">
                                    <h3 class="text">communication design </h3>
                                </div>
                                <p class="regular_text">Unclear messaging weakens the brand impact. We create
                                    communication designs that
                                    unify your message, ensuring clarity, engagement, and consistency across all
                                    channels.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_pink">
                            <a href="brand-identity-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/brand_design_icon.svg') }}"
                                        alt="Brand identity Design">
                                    <h3 class="text">Brand identity Design </h3>
                                </div>
                                <p class="regular_text">Inconsistent branding makes you forgettable. We design visually
                                    compelling,
                                    strategically aligned brand identities that boost recognition, build trust, and set
                                    you apart</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_purple">
                            <a href="presentation-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/presentation_design_icon.svg') }}"
                                        alt="presentation design">
                                    <h3 class="text">presentation design</h3>
                                </div>
                                <p class="regular_text">Dull slides lose attention fast. We create engaging,
                                    professionally structured
                                    presentations that captivate, communicate effectively, and leave a lasting
                                    impression.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- SideBar Section Start -->
    <div class="sideBar">
        <a href="javascript:;" class="cancel_icon">
            <i class="fa-solid fa-xmark"></i>
        </a>
        <ul>
            <li class="active"><a href="/" class="regular_text">Home</a></li>
            <li class="dropdown_item">
                <a href="javascript:;" class="regular_text">services <span><i
                            class="fa-solid fa-angle-down"></i></span></a>
                <div class="dropdown_content">
                    <ul>
                        <li class="bg_blue">
                            <a href="info-graphics-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/graphics_design_icon.svg') }}"
                                        alt="Graphics Design">
                                    <h3 class="text">info graphics design</h3>
                                </div>
                                <p class="regular_text">Too much data can overwhelm and disengage your audience. We
                                    transform complex
                                    information into visually compelling infographics that simplify, engage, and
                                    communicate key insights
                                    instantly.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_green">
                            <a href="play-book-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/playBook_design_icon.svg') }}"
                                        alt="play book design">
                                    <h3 class="text">Play book design</h3>
                                </div>
                                <p class="regular_text">A poorly structured playbook can lead to misalignment and
                                    confusion. Our
                                    Playbook Designs turn strategies into clear, visually appealing, and actionable
                                    guides that keep teams
                                    focused and on track.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_yellow">
                            <a href="pitch-deck-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/pitch_design_icon.svg') }}"
                                        alt="Pitch deck design">
                                    <h3 class="text">Pitch deck design</h3>
                                </div>
                                <p class="regular_text">A weak pitch deck can cost you investors. We craft persuasive,
                                    visually striking
                                    presentations that tell a compelling story, build trust, and help you secure your
                                    needed funding.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_orange">
                            <a href="communication-design .html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/pitch_design_icon.svg') }}"
                                        alt="communication design ">
                                    <h3 class="text">communication design </h3>
                                </div>
                                <p class="regular_text">Unclear messaging weakens the brand impact. We create
                                    communication designs that
                                    unify your message, ensuring clarity, engagement, and consistency across all
                                    channels.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_pink">
                            <a href="brand-identity-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/brand_design_icon.svg') }}"
                                        alt="Brand identity Design">
                                    <h3 class="text">Brand identity Design </h3>
                                </div>
                                <p class="regular_text">Inconsistent branding makes you forgettable. We design visually
                                    compelling,
                                    strategically aligned brand identities that boost recognition, build trust, and set
                                    you apart</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                        <li class="bg_purple">
                            <a href="presentation-design.html">
                                <div class="d-flex align-items-center gap-2">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/presentation_design_icon.svg') }}"
                                        alt="presentation design">
                                    <h3 class="text">presentation design</h3>
                                </div>
                                <p class="regular_text">Dull slides lose attention fast. We create engaging,
                                    professionally structured
                                    presentations that captivate, communicate effectively, and leave a lasting
                                    impression.</p>
                                <div class="bottom_icon ms-auto mt-auto">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/service_arrow_icon.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="about-us.html" class="regular_text">about us</a></li>
            <li><a href="portfolio.html" class="regular_text">portfolio</a></li>
            <li>
                <a href="testimonial.html" class="regular_text">testimonial</a>
            </li>
            <li><a href="blog.html" class="regular_text">blog</a></li>
        </ul>
        <a href="contact-us.html" class="global_btn">Contact us</a>
    </div>
    <!-- SideBar Section End -->
    {{ $slot }}
    <!-- Footer Section Start -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-4 col-lg-6 col-12 mb-xl-0 mb-5">
                    <div class="footer_content">
                        <a class="f_logo" href="/">
                            <img class="lazyload" data-src="{{ secure_asset('/resources/images/footer_logo.svg') }}"
                                alt="Logo" />
                        </a>
                        <div>
                            <h3 class="sub_title">About us</h3>
                            <p class="text">
                                We don't just create visually appealing designs; we craft solutions that work. No
                                extravagant promises,
                                no convoluted jargon, just effective strategies that deliver results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-12 mb-xl-0 mb-5">
                    <div class="footer_content">
                        <div class="social_icons d-flex justify-content-xl-center align-items-center gap-3">
                            <a href="javascript:;">
                                <img class="lazyload" data-src="{{ secure_asset('/resources/images/fb_icon.svg') }}"
                                    alt="Facebook" />
                            </a>
                            <a href="javascript:;">
                                <img class="lazyload" data-src="{{ secure_asset('/resources/images/tiktok_icon.svg') }}"
                                    alt="TikTok" />
                            </a>
                            <a href="javascript:;">
                                <img class="lazyload" data-src="{{ secure_asset('/resources/images/insta_icon.svg') }}"
                                    alt="Instagram" />
                            </a>
                            <a href="javascript:;">
                                <img class="lazyload" data-src="{{ secure_asset('/resources/images/twitter_icon.svg') }}"
                                    alt="Twitter" />
                            </a>
                            <a href="javascript:;">
                                <img class="lazyload" data-src="{{ secure_asset('/resources/images/yt_icon.svg') }}"
                                    alt="Youtube" />
                            </a>
                        </div>
                        <div>
                            <h3 class="sub_title">contact us</h3>
                            <ul>
                                <li class="text mb-2">
                                    757 North Lincoln Ave Chicago IL 60659 1117 Loblolly Lane
                                    Princeton Texas 75407
                                </li>
                                <li class="mb-2"><a class="text" href="tel:+18888712881">(888) 871-2881</a></li>
                                <li class="mb-2"><a class="text"
                                        href="mailto:support@buildpitchdeck.com">support@buildpitchdeck.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-12 mb-xl-0 mb-5">
                    <div class="footer_content">
                        <div class="get_touch d-flex justify-content-xl-center align-items-center">
                            <button class="global_btn">get in touch</button>
                        </div>
                        <div>
                            <h3 class="sub_title">Certified</h3>
                            <div class="Certified_div d-flex align-items-center gap-2 flex-wrap">
                                <a href="javascript:;">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/certificate_img1.svg') }}"
                                        alt="Geo Trust" />
                                </a>
                                <a href="javascript:;">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/certificate_img2.svg') }}"
                                        alt="DMCA" />
                                </a>
                                <a href="javascript:;">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/certificate_img3.svg') }}"
                                        alt="Protect ED" />
                                </a>
                                <a href="javascript:;">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/certificate_img4.svg') }}"
                                        alt="MCAfee" />
                                </a>
                                <a href="javascript:;">
                                    <img class="lazyload"
                                        data-src="{{ secure_asset('/resources/images/certificate_img5.svg') }}"
                                        alt="ADA" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="py-3 d-flex flex-lg-row flex-column justify-content-between align-items-center">
                        <p class="text mb-lg-0 mb-2">
                            Powered By Build Pitchdeck . All rights reserved.
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <a href="terms-and-conditions.html" class="text">Terms & Conditions</a>
                            <a href="privacy-policy.html" class="text">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Start -->

    <button id="backToTop">↑ Top</button>


    <!-- JQuery File Cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Bootstrap JS File Cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GSAP Files Cdn -->
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollToPlugin.min.js"></script>

    <!-- Slick Slider Cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- AOS Animation Cdn -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js"></script>
    <script>
        $(function() {
            $("img.lazyload").lazy();
        });
    </script>

    <script src="{{ secure_asset('/resources/js/custom-gsap.js') }}"></script>
    <script src="{{ secure_asset('/resources/js/script.js') }}"></script>

</body>

</html>
