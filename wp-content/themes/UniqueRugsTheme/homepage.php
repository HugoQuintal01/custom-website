<?php
/*
Template Name: Custom Homepage
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- Add this line to include WordPress head elements -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style/styles.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style/css-glide/glide.core.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style/css-glide/glide.theme.min.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/style/css-glide/glide.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/style/css-glide/glide.modular.esm.min.js"></script>
    <title>Homepage</title>
</head>
<body <?php body_class(); ?>> <!-- Add this line to include body classes -->
<?php get_header(); ?>

    <section id="cover-transition-id" class="cover-transition">
        <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/logo_cover.png" alt="logo_cover">
    </section>    
    <section id="contact-us-popup-id" class="gridrowfull contact-us-popup">
        <div class="contact-us-popup-inner col-ld-8 col-d-10 col-t-10 col-12">
            <div class="contact-us-popup-inner-left col-ld-6 col-d-6 col-t-6 col-12">
                <h3>Hi, </h3>
                <h3 id="user-name"></h3>
                <h3 class="col-ld-12 col-d-12 col-t-12 col-12">What can we do for you?</h3>
            </div>
            <div class="contact-us-popup-inner-right col-ld-6 col-d-6 col-t-6 col-12">
                <h3>Feel free to contact us</h3>
                <input id="input-user-name" type="text" placeholder="Name">
                <input id="input-user-email" type="email" placeholder="Email">
                <textarea placeholder="Write here" name="contact-text" id="contact-text-id" cols="10" rows="5"></textarea>
                <button type="submit" class="button button-black">Send</button>
            </div>
            <div id="close-button-contact-popup" class="close-button">
                <span>X</span>
            </div>
        </div>
        
    </section>
    <section class="gridrowfull banner-homepage">
        <div class="gridrowfull titles-banner-homepage col-12 col-ld-7 col-d-10 col-t-12">
            <h1 class="col-12 col-t-12 col-d-7 col-ld-8">Step into a world full of creativity</h1>
            <span class="col-12 col-ld-12 col-d-12 col-t-12">We roll out the tailored rugs to your specific needs!</span>
            <img class="arrow-fixed" src="http://localhost/uniquerugs/wp-content/uploads/2023/12/arrow-icon.svg" alt="arrow-icon">
        </div>
    </section>
    <section class="gridrowfull work-with-us-homepage">
        <div class="work-with-us-homepage-image col-ld-3 col-d-3 col-t-12 col-12">
            <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/work-with-us.jpg" alt="work-with-us">
        </div>
        <div class="work-with-us-homepage-text col-ld-6 col-d-6 col-t-12 col-12">
            <p class="col-ld-10 col-d-10 col-t-12 col-12">“With over 77 years of experience and as Europe’s leading manufacturer, we are committed to providing our customers with an outstanding service. Whether you are looking for a bespoke or individualised solution, Unique Rugs is committed to guiding you throughout the process to meet your needs. With the use of the most advanced technologies and expert craftmanship we guarantee the highest quality and precision.”</p>
            <p class="col-ld-10 col-d-10 col-t-12 col-12 author">Calixto Valenti</p>
            <p class="col-ld-10 col-d-10 col-t-12 col-12 author-position">CEO</p>
        </div>
    </section>
    <section class="gridrowfull unique-rugs-homepage">
        <div class="unique-rugs-homepage-absolute unique-rugs-homepage-image-top-left col-ld-3 col-d-3 col-t-12 col-12">
            <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/unique-rugs-01.jpg" alt="unique-rugs-01">
        </div>
        <div class="unique-rugs-homepage-absolute unique-rugs-homepage-image-right col-ld-2 col-d-2 col-t-12 col-12">
            <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/unique-rugs-02.jpg" alt="unique-rugs-02">
        </div>
        <div class="unique-rugs-homepage-absolute unique-rugs-homepage-image-bottom-left col-ld-3 col-d-3 col-t-12 col-12">
            <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/unique-rugs-03.jpg" alt="unique-rugs-03">
        </div>
        <div class="unique-rugs-homepage-content col-ld-6 col-d-8 col-t-12 col-12">
            <h2 class="col-ld-8 col-d-8 col-t-12 col-12">Creating unique rugs at every stage.</h2>
            <p class="col-ld-10 col-d-10 col-t-12 col-12">Our production facilities in Portugal offer you the tailor-made rugs in the best raw materials, combining technology with expert craftsmanship. With a team of talented Designers and an Innovation & Development Department we ensure that every brand and project is fulfilled according to its needs.</p>
            <a class="button button-black" href="#work-with-us">Ir para Why work with us</a>
        </div>
    </section>
    <section class="gridrowfull own-collection-homepage">
        <div class="own-collection-homepage-top-section col-ld-12 col-d-12 col-t-12 col-12">
            <div class="top-section-left-div col-ld-8 col-d-8 col-t-12 col-12">
                <h3 class="col-ld-6 col-d-8 col-t-12 col-12">Create your own collection</h3>
                <p class="col-ld-6 col-d-9 col-t-12 col-12">Our production facilities in Portugal offer you the tailor-made rugs in the best raw materials, combining technology with expert craftsmanship.</p>
                <p class="col-ld-6 col-d-9 col-t-12 col-12">With made by order production and the most competitive lead time in the market, our customers avoid the need of stock.</p>
                <div class="button-div col-ld-12 col-d-12 col-t-12 col-12">
                    <a href="#" class="button button-white">Ir para Production capacity</a>
                </div>
            </div>
            <div class="top-section-right-div col-ld-4 col-d-4 col-t-12 col-12">
                <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/own-collection-02.png" alt="own-collection-01">
            </div>
        </div>
        <div class="own-collection-homepage-bottom-section col-ld-12 col-d-12 col-t-12 col-12">
            <div class="own-collection-homepage-overlay"></div>
            <div class="own-collection-homepage-overlay-background"></div>
            <div class="bottom-section-left-div col-ld-6 col-d-6 col-t-12 col-12">
                <div class="bottom-section-left-div-title-section col-ld-12 col-d-12 col-t-12 col-12">
                    <span class="intro-title-bottom-section col-ld-12 col-d-12 col-t-12 col-12">Explore the world of</span>
                    <h4 class="col-ld-12 col-d-12 col-t-12 col-12">Bespoke Carpets</h4>
                </div>
                <div class="card-content col-ld-12 col-d-12 col-t-12 col-12">
                    <div class="card-content-icon col-ld-1 col-d-1 col-t-1 col-2">
                        <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/icon-carpets-01.svg" alt="icon-carpets-01">
                    </div>
                    <div class="card-content-text col-ld-8 col-d-10 col-t-10 col-10">
                        <span>The of bespoke carpets</span>
                        <p class="col-ld-9 col-d-9 col-t-12 col-12">Unleash your vision with Unique Rugs expert craftmanship. Immerse yourself in a collaborative journey where we work closely with our customers to bring the desired design to life.</p>
                    </div>
                </div>
                <div class="card-content col-ld-12 col-d-12 col-t-12 col-12">
                    <div class="card-content-icon col-ld-1 col-d-1 col-t-1 col-2">
                        <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/icon-carpets-02.svg" alt="icon-carpets-02">
                    </div>
                    <div class="card-content-text col-ld-8 col-d-10 col-t-10 col-10">
                        <span>Quality and excelence</span>
                        <p class="col-ld-9 col-d-9 col-t-12 col-12">With our unwavering commitment to excellence and more than 77 years of experience, your rugs will be meticulously crafted to perfection</p>
                    </div>
                </div>
                <div class="card-content col-ld-12 col-d-12 col-t-12 col-12">
                    <div class="card-content-icon col-ld-1 col-d-1 col-t-1 col-2">
                        <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/icon-carpets-03.svg" alt="icon-carpets-03">
                    </div>
                    <div class="card-content-text col-ld-8 col-d-10 col-t-10 col-10">
                        <span>Unique Lead Times</span>
                        <p class="col-ld-9 col-d-9 col-t-12 col-12">We offer a unique production time based on full in-house optimized processes and a delivery worldwide service.</p>
                    </div>
                </div>
                <div class="button-div col-ld-3 col-d-4 col-t-5 col-7">
                    <a href="#" class="button button-white">Ir para Full service</a>
                </div>
            </div>
            <div class="bottom-section-right-div col-ld-6 col-d-6 col-t-12 col-12">
                <div class="slider">
                    <div class="glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/slider-items-01.png" alt="">
                                </li>
                                <li class="glide__slide">
                                    <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/slider-items-02.png" alt="">
                                </li>
                                <li class="glide__slide">
                                    <img src="http://localhost/uniquerugs/wp-content/uploads/2023/12/slider-items-01.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gridrowfull unique-samples-homepage">
        <div class="unique-samples-top-section col-ld-12 col-d-12 col-t-12 col-12"></div>
        <div class="unique-samples-bottom-section col-ld-12 col-d-12 col-t-12 col-12">
            <div class="unique-samples-left-div col-ld-6 col-d-6 col-t-12 col-12">
                <h3 class="col-ld-8 col-d-12 col-t-12 col-12">Unique samples expressing excellence.</h3>
                <p class="col-ld-10 col-d-12 col-t-12 col-12">We love helping turning dream designs into a resistant, high quality reality rug with these carefully selected fibers, colours and quality samples. To enhance your inspiration and ensure precise outcomes, we recommend utilizing our Sales Tools. Explore the vast selection of Unique Rugs through our Pom Pom Box or Sample Box, that exemplify our unparalleled craftsmanship. (request it here and a link to the contact form)</p>
                <div class="button-div col-ld-3 col-d-4 col-t-7 col-7">
                    <a id="button-open-contact-popup" class="button button-black">Ir para Contact us</a>
                </div>
            </div>
            <div class="unique-samples-right-div col-ld-6 col-d-6 col-t-12 col-12">
                <img class="image-group" src="http://localhost/uniquerugs/wp-content/uploads/2023/12/unique-samples-03.png" alt="unique-samples">
                <img class="image-individual" src="http://localhost/uniquerugs/wp-content/uploads/2023/12/unique-samples-02.png" alt="unique-samples-01">
            </div>
        </div>
    </section>

    
    <?php get_footer(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://unpkg.com/@glidejs/glide"></script>
    <script>
        // Slider Animation
        const config = {
            type: 'carousel',
            perView: 2,
            breakpoinst: {
                800: {
                    perView: 1
                }
            }
        };
        new Glide(".glide", config).mount();
    </script>
</body>
</html>
