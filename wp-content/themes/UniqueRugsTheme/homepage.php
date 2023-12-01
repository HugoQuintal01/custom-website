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
    <h1 class="teste123">Teste</h1>
    <h2 class="teste123">Teste</h2>
    <?php wp_footer(); ?> <!-- Add this line to include WordPress footer elements -->
</body>
</html>
