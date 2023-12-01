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
    <title>Homepage</title>
</head>
<body <?php body_class(); ?>> <!-- Add this line to include body classes -->
    
    <section class="gridrowfull banner-homepage">
        <div class="gridrowfull titles-banner-homepage col-12 col-ld-7 col-d-10 col-t-12">
            <h1 class="col-12 col-t-12 col-d-7 col-ld-8">Step into a world full of creativity</h1>
            <span class="col-12 col-ld-12 col-d-12 col-t-12">We roll out the tailored rugs to your specific needs!</span>
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
        <div class="unique-rugs-homepage-content col-ld-6 col-d-6 col-t-12 col-12">
            <h2 class="col-ld-8 col-d-8 col-t-12 col-12">Creating unique rugs at every stage.</h2>
            <p class="col-ld-10 col-d-10 col-t-12 col-12">Our production facilities in Portugal offer you the tailor-made rugs in the best raw materials, combining technology with expert craftsmanship. With a team of talented Designers and an Innovation & Development Department we ensure that every brand and project is fulfilled according to its needs.</p>
            <a class="button button-black" href="#work-with-us">Ir para Why work with us</a>
        </div>
    </section>

    <?php wp_footer(); ?> <!-- Add this line to include WordPress footer elements -->
</body>
</html>
