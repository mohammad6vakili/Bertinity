<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
        <div id="hamburger-menu">
          <div class="close-ham-wrapper">
            <i class="fa fa-times" id="close-ham"></i>
          </div>
          <div class="ham-links">
            <div>
                <a href="#">About Us</a>
            </div>
            <div>
                <a href="#">Services</a>
            </div>
            <div>
                <a href="#">Bertinity Coin</a>
            </div>
            <div>
                <a href="https://www.bertinity.com/images/roadmap.png">RoadMap</a>
            </div>
            <div>
                <a href="https://www.bertinity.com/PDF/whitepaper.pdf">Whitepaper</a>
            </div>
            <div>
                <a href="#">Contact</a>
            </div>
          </div>
        </div>
        <header class="header">
            <img src="<?php echo get_template_directory_uri();?>/images/headerLogo.png" class="header-logo" alt="logo">
            <div class="header-links">
                <div>
                      <a href="#">About Us</a>
                </div>
                <div>
                      <a href="#">Services</a>
                </div>
                <div>
                      <a href="#">Bertinity Coin</a>
                </div>
                <div>
                  <a href="https://www.bertinity.com/images/roadmap.png">RoadMap</a>
                </div>
                <div>
                    <a href="https://www.bertinity.com/PDF/whitepaper.pdf">Whitepaper</a>
                </div>
                <div>
                      <a href="#">Contact</a>
                </div>
            </div>
            <div id="hamburger-button">
              <i class="fa fa-bars"></i>
            </div>
        </header>