<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/d742d41545.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title>Bertinity</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
      <!-----------------------------header---------------------------------------->
        <header id="header" class="header">
            <a id="header-logo" href="localhost/wordpress"><img src="<?php echo get_template_directory_uri();?>/images/headerLogo.png" class="header-logo" alt="logo"></a>
                <div id="close-ham-wrapper" class="close-ham-wrapper">
                  <i class="fa fa-times" id="close-ham"></i>
                </div>
                <?php  
                  wp_nav_menu(
                    array(
                      'menu' => 'primary-menu',
                      'container' => '',
                      'items_wrap' => '<div id="header-links" class="header-links">%3$s</div>'
                    )
                  )
                ?>
            <div id="hamburger-button">
              <i class="fa fa-bars"></i>
            </div>
        </header>