<?php

/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordcamp2025
 */

get_header('default');
?>

<main id="primary" class="site-main">

    <!-- Leadspace Section Starts -->
    <section class="os-leadspace" id="os-leadspace">
        <div class="bg-primary h-100 rounded-5 d-flex justify-content-center align-items-center">
            <div class="os-leadspace__wrapper">
                <h1 class="os-leadspace__title text-white text-center">
                    <div>Hello</div>
                    <div>Bonjour</div>
                    <div>Hola</div>
                    <div>Ciao</div>
                </h1>
            </div>
        </div>
    </section>
    <!-- Leadspace Section Ends -->

    <!-- Project Section -->
    <div class="os-project section" id="os-project">
        <div class="container">
            <div class="os-project__slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="pe-none" aria-label="Firefly partners" title="Firefly partners">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="os-project__title pe-auto">
                                            Revolutionizing tech strategies for social impact orgs with
                                            <span class="position-relative d-inline-block">
                                                Firefly partners
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.7071 8.70711C15.0976 8.31658 15.0976 7.68342 14.7071 7.29289L8.34315 0.928932C7.95262 0.538408 7.31946 0.538408 6.92893 0.928932C6.53841 1.31946 6.53841 1.95262 6.92893 2.34315L12.5858 8L6.92893 13.6569C6.53841 14.0474 6.53841 14.6805 6.92893 15.0711C7.31946 15.4616 7.95262 15.4616 8.34315 15.0711L14.7071 8.70711ZM0 9H14V7H0V9Z" fill="#7C4732" />
                                                </svg>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="os-project__figure pe-auto">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/os-project-img1.webp' ?>" alt="" class="w-100 h-100 object-fit-cover rounded-5 os-transition">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="pe-none" aria-label="Mauj" title="Mauj">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="os-project__title pe-auto">
                                            Creating a sexual & menstrual resource hub for Arab women with
                                            <span class="position-relative d-inline-block">
                                                Mauj
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.7071 8.70711C15.0976 8.31658 15.0976 7.68342 14.7071 7.29289L8.34315 0.928932C7.95262 0.538408 7.31946 0.538408 6.92893 0.928932C6.53841 1.31946 6.53841 1.95262 6.92893 2.34315L12.5858 8L6.92893 13.6569C6.53841 14.0474 6.53841 14.6805 6.92893 15.0711C7.31946 15.4616 7.95262 15.4616 8.34315 15.0711L14.7071 8.70711ZM0 9H14V7H0V9Z" fill="#7C4732" />
                                                </svg>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="os-project__figure pe-auto">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/os-project-img2.webp' ?>" alt="" class="w-100 h-100 object-fit-cover rounded-5 os-transition">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="pe-none" aria-label="Fork & Good" title="Fork & Good">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="os-project__title pe-auto">
                                            Exploring the future of ethically sourced meat with
                                            <span class="position-relative d-inline-block">
                                                Fork & Good
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.7071 8.70711C15.0976 8.31658 15.0976 7.68342 14.7071 7.29289L8.34315 0.928932C7.95262 0.538408 7.31946 0.538408 6.92893 0.928932C6.53841 1.31946 6.53841 1.95262 6.92893 2.34315L12.5858 8L6.92893 13.6569C6.53841 14.0474 6.53841 14.6805 6.92893 15.0711C7.31946 15.4616 7.95262 15.4616 8.34315 15.0711L14.7071 8.70711ZM0 9H14V7H0V9Z" fill="#7C4732" />
                                                </svg>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="os-project__figure pe-auto">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/os-project-img3.webp' ?>" alt="" class="w-100 h-100 object-fit-cover rounded-5 os-transition">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Section -->

    <!-- Why Us Section -->
    <section class="os-why-us section" id="os-why-us">
        <div class="container">
            <div class="px-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="os-why-us__left">
                            <div class="os-why-us__figure active">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/os-why-img1.webp' ?>" alt="">
                            </div>
                            <div class="os-why-us__figure">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/hero-img.png' ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="os-why-us__right">
                            <h2 class="os-why-us__title">
                                Why Outside?
                            </h2>
                            <div class="os-why-us__accordion">
                                <div class="os-why-us__accordion-wrapper active">
                                    <h3 class="os-why-us__accordion-title">
                                        <a href="#" aria-label="Our mission" title="Our mission" class="d-flex justify-content-between gap-3 align-items-center">
                                            <span>Our mission</span>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 1C9 0.447715 8.55228 -2.41411e-08 8 0C7.44772 2.41411e-08 7 0.447715 7 1L9 1ZM7.29289 16.7071C7.68342 17.0976 8.31658 17.0976 8.70711 16.7071L15.0711 10.3431C15.4616 9.95262 15.4616 9.31946 15.0711 8.92893C14.6805 8.53841 14.0474 8.53841 13.6569 8.92893L8 14.5858L2.34315 8.92893C1.95262 8.53841 1.31946 8.53841 0.928933 8.92893C0.538408 9.31946 0.538408 9.95262 0.928933 10.3431L7.29289 16.7071ZM7 1L7 16L9 16L9 1L7 1Z" fill="black" />
                                            </svg>
                                        </a>
                                    </h3>
                                    <div class="os-why-us__accordion-content">
                                        <p>
                                            Our mission is to support the meaningful companies, causes, and communities building a more equitable world.
                                        </p>
                                    </div>
                                </div>

                                <div class="os-why-us__accordion-wrapper">
                                    <h3 class="os-why-us__accordion-title">
                                        <a href="#" aria-label="Our mission" title="Our mission" class="d-flex justify-content-between gap-3 align-items-center">
                                            <span>Our mission</span>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 1C9 0.447715 8.55228 -2.41411e-08 8 0C7.44772 2.41411e-08 7 0.447715 7 1L9 1ZM7.29289 16.7071C7.68342 17.0976 8.31658 17.0976 8.70711 16.7071L15.0711 10.3431C15.4616 9.95262 15.4616 9.31946 15.0711 8.92893C14.6805 8.53841 14.0474 8.53841 13.6569 8.92893L8 14.5858L2.34315 8.92893C1.95262 8.53841 1.31946 8.53841 0.928933 8.92893C0.538408 9.31946 0.538408 9.95262 0.928933 10.3431L7.29289 16.7071ZM7 1L7 16L9 16L9 1L7 1Z" fill="black" />
                                            </svg>
                                        </a>
                                    </h3>
                                    <div class="os-why-us__accordion-content">
                                        <p>
                                            Our mission is to support the meaningful companies, causes, and communities building a more equitable world.
                                        </p>
                                    </div>
                                </div>

                                <div class="os-why-us__accordion-wrapper">
                                    <h3 class="os-why-us__accordion-title">
                                        <a href="#" aria-label="Our mission" title="Our mission" class="d-flex justify-content-between gap-3 align-items-center">
                                            <span>Our mission</span>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 1C9 0.447715 8.55228 -2.41411e-08 8 0C7.44772 2.41411e-08 7 0.447715 7 1L9 1ZM7.29289 16.7071C7.68342 17.0976 8.31658 17.0976 8.70711 16.7071L15.0711 10.3431C15.4616 9.95262 15.4616 9.31946 15.0711 8.92893C14.6805 8.53841 14.0474 8.53841 13.6569 8.92893L8 14.5858L2.34315 8.92893C1.95262 8.53841 1.31946 8.53841 0.928933 8.92893C0.538408 9.31946 0.538408 9.95262 0.928933 10.3431L7.29289 16.7071ZM7 1L7 16L9 16L9 1L7 1Z" fill="black" />
                                            </svg>
                                        </a>
                                    </h3>
                                    <div class="os-why-us__accordion-content">
                                        <p>
                                            Our mission is to support the meaningful companies, causes, and communities building a more equitable world.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us Section -->

    <!-- Testimonial Section -->
    <section class="section-lg testimonial-section">
        <div class="container">
            <h2 class="os-title text-center">
                Our Testimonial
            </h2>
            <p class="os-subtitle text-center mt-4">
                Join Our Growing Community of Happy Customers
            </p>
            <div class="testimonial-slider os-wrapper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="os-card m-3 p-5 rounded-4">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/user1.jpg' ?>" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="post-content">
                                            <p>
                                                Partnering with XYZ Company was one of the best business decisions we've made. Their team understood our challenges and delivered a solution that improved our efficiency and boosted revenue. Their commitment to excellence and customer satisfaction truly sets them apart. We highly recommend them to any business looking for reliable and innovative services.
                                            </p>
                                        </div>

                                        <div class=" mt-5 d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="testimonial-name">
                                                    John Doe
                                                </h3>
                                                <p class="testimonial-desg">
                                                    CEO at XYZ Corp
                                                </p>
                                            </div>

                                            <div class="quote-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -72 512 512">
                                                    <path d="m207.800781 0h-192.800781c-8.285156 0-15 6.714844-15 15v192.800781c0 8.285157 6.714844 15 15 15h81.398438v129.601563c0 8.28125 6.714843 15 15 15h48.203124c6.453126 0 12.1875-4.132813 14.226563-10.257813l48.199219-144.597656c.511718-1.53125.773437-3.132813.773437-4.746094v-192.800781c0-8.285156-6.714843-15-15-15zm-15 205.367188-44.011719 132.03125h-22.390624v-129.597657c0-8.285156-6.714844-15-15-15h-81.398438v-162.800781h162.800781zm0 0"></path>
                                                    <path d="m497 0h-192.800781c-8.285157 0-15 6.714844-15 15v192.800781c0 8.285157 6.714843 15 15 15h81.402343v129.601563c0 8.28125 6.714844 15 15 15h48.199219c6.457031 0 12.1875-4.132813 14.230469-10.257813l48.199219-144.597656c.507812-1.53125.769531-3.132813.769531-4.746094v-192.800781c0-8.285156-6.714844-15-15-15zm-15 205.367188-44.011719 132.03125h-22.386719v-129.597657c0-8.285156-6.71875-15-15-15h-81.402343v-162.800781h162.800781zm0 0"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="os-card m-3 p-5 rounded-4">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/user2.jpg' ?>" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="post-content">
                                            <p>
                                                I was hesitant to order online, but Wordpress completely changed my perception. The website was easy to navigate, the checkout process was seamless, and my order arrived earlier than expected. The quality of the product exceeded my expectations, and the packaging was just beautiful. This is now my go-to store for all my shopping needs!
                                            </p>
                                        </div>

                                        <div class=" mt-5 d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="testimonial-name">
                                                    Sarah L.
                                                </h3>
                                                <p class="testimonial-desg">
                                                    Verified Customer
                                                </p>
                                            </div>

                                            <div class="quote-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -72 512 512">
                                                    <path d="m207.800781 0h-192.800781c-8.285156 0-15 6.714844-15 15v192.800781c0 8.285157 6.714844 15 15 15h81.398438v129.601563c0 8.28125 6.714843 15 15 15h48.203124c6.453126 0 12.1875-4.132813 14.226563-10.257813l48.199219-144.597656c.511718-1.53125.773437-3.132813.773437-4.746094v-192.800781c0-8.285156-6.714843-15-15-15zm-15 205.367188-44.011719 132.03125h-22.390624v-129.597657c0-8.285156-6.714844-15-15-15h-81.398438v-162.800781h162.800781zm0 0"></path>
                                                    <path d="m497 0h-192.800781c-8.285157 0-15 6.714844-15 15v192.800781c0 8.285157 6.714843 15 15 15h81.402343v129.601563c0 8.28125 6.714844 15 15 15h48.199219c6.457031 0 12.1875-4.132813 14.230469-10.257813l48.199219-144.597656c.507812-1.53125.769531-3.132813.769531-4.746094v-192.800781c0-8.285156-6.714844-15-15-15zm-15 205.367188-44.011719 132.03125h-22.386719v-129.597657c0-8.285156-6.71875-15-15-15h-81.402343v-162.800781h162.800781zm0 0"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="os-card m-3 p-5 rounded-4">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/user3.jpg' ?>" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="post-content">
                                            <p>
                                                We struggled with outdated software that slowed down our operations until we discovered Wordpress. The platform is incredibly user-friendly, feature-rich, and has completely transformed how we manage our projects. The support team is always responsive and helpful, ensuring we get the most out of the software. It’s a game-changer for any business looking to streamline operations!
                                            </p>
                                        </div>

                                        <div class=" mt-5 d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="testimonial-name">
                                                    Mike T.
                                                </h3>
                                                <p class="testimonial-desg">
                                                    Project Manager at TechWorks
                                                </p>
                                            </div>

                                            <div class="quote-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -72 512 512">
                                                    <path d="m207.800781 0h-192.800781c-8.285156 0-15 6.714844-15 15v192.800781c0 8.285157 6.714844 15 15 15h81.398438v129.601563c0 8.28125 6.714843 15 15 15h48.203124c6.453126 0 12.1875-4.132813 14.226563-10.257813l48.199219-144.597656c.511718-1.53125.773437-3.132813.773437-4.746094v-192.800781c0-8.285156-6.714843-15-15-15zm-15 205.367188-44.011719 132.03125h-22.390624v-129.597657c0-8.285156-6.714844-15-15-15h-81.398438v-162.800781h162.800781zm0 0"></path>
                                                    <path d="m497 0h-192.800781c-8.285157 0-15 6.714844-15 15v192.800781c0 8.285157 6.714843 15 15 15h81.402343v129.601563c0 8.28125 6.714844 15 15 15h48.199219c6.457031 0 12.1875-4.132813 14.230469-10.257813l48.199219-144.597656c.507812-1.53125.769531-3.132813.769531-4.746094v-192.800781c0-8.285156-6.714844-15-15-15zm-15 205.367188-44.011719 132.03125h-22.386719v-129.597657c0-8.285156-6.71875-15-15-15h-81.402343v-162.800781h162.800781zm0 0"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="os-card m-3 p-5 rounded-4">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/user4.jpg' ?>" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="post-content">
                                            <p>
                                                I hired to redesign my brand’s identity, and I was blown away by the results. Their creativity, expertise, and ability to capture my vision perfectly made the entire process enjoyable. Communication was smooth, deadlines were met, and the final designs were nothing short of stunning. I’ve received countless compliments on my new branding!
                                            </p>
                                        </div>

                                        <div class=" mt-5 d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="testimonial-name">
                                                    Anna S.
                                                </h3>
                                                <p class="testimonial-desg">
                                                    Founder of Creative Studio
                                                </p>
                                            </div>

                                            <div class="quote-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -72 512 512">
                                                    <path d="m207.800781 0h-192.800781c-8.285156 0-15 6.714844-15 15v192.800781c0 8.285157 6.714844 15 15 15h81.398438v129.601563c0 8.28125 6.714843 15 15 15h48.203124c6.453126 0 12.1875-4.132813 14.226563-10.257813l48.199219-144.597656c.511718-1.53125.773437-3.132813.773437-4.746094v-192.800781c0-8.285156-6.714843-15-15-15zm-15 205.367188-44.011719 132.03125h-22.390624v-129.597657c0-8.285156-6.714844-15-15-15h-81.398438v-162.800781h162.800781zm0 0"></path>
                                                    <path d="m497 0h-192.800781c-8.285157 0-15 6.714844-15 15v192.800781c0 8.285157 6.714843 15 15 15h81.402343v129.601563c0 8.28125 6.714844 15 15 15h48.199219c6.457031 0 12.1875-4.132813 14.230469-10.257813l48.199219-144.597656c.507812-1.53125.769531-3.132813.769531-4.746094v-192.800781c0-8.285156-6.714844-15-15-15zm-15 205.367188-44.011719 132.03125h-22.386719v-129.597657c0-8.285156-6.71875-15-15-15h-81.402343v-162.800781h162.800781zm0 0"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-button-wrapper">
                    <div class="custom-button-prev custom-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                            <path d="M15 18L9 12L15 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="custom-button-next custom-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                            <path d="M9 18L15 12L9 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
