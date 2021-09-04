<?php
  /**
   * Template Name:Services
   */

get_header(); ?>
        <!-------------------------------------body--------------------------------->
        <main>
            <section class="services-header-banner">
              <div class="services-bg-cover">
                <div class="services-banner-first">
                  <span class="service-odd">O</span>
                  <span class="service-even">u</span>
                  <span class="service-odd" >r</span>
                  <span class="service-even" style="margin-left: 10px;">S</span>
                  <span class="service-odd" >e</span>
                  <span class="service-even">r</span>
                  <span class="service-odd" >v</span>
                  <span class="service-even">i</span>
                  <span class="service-even">c</span>
                  <span class="service-even">e</span>
                  <span class="service-even">s</span>
                </div>
                <div class="services-bg-circle"></div>
                <div class="services-bg-line">
                  <div></div>
                </div>
                <span class="services-explore-text">Explore</span>
                <span class="services-banner-text">Our </span>
              </div>
            </section>
            <section class="services-services">
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service1.jpg" alt="services">
                <span>Decentralized World-wide Security Token Stock Market</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service2.jpg" alt="services">
                <span>Decentralized Crypto Exchange (DEX)</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service3.jpg" alt="services">
                <span>Crypto payment gateway(No KYC CPG)</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service4.jpg" alt="services">
                <span>Centralized Crypto Exchange (No KYC CX)</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service5.jpg" alt="services">
                <span>Crypto Forex Services</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service6.jpg" alt="services">
                <span>Public Blockchain Network (MainNet)</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service7.jpg" alt="services">
                <span>Crypto Wallet</span>
                <div></div>
              </a>
              <a href="#" class="services-service">
                <img src="<?php echo get_template_directory_uri();?>/images/service8.jpg" alt="services">
                <span>Escrow service for P2P trades</span>
                <div></div>
              </a>
            </section>

            <section class="posts">   
            <?php
              if(have_posts()){
                while(have_posts()){
                  the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="posts-item">
                <div class="post-hover-bg"></div>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post">
                <p><?php the_title(); ?></p>
              </a>
            <?php
                }
              }
            ?>
          </section>


        </main>
<?php get_footer(); ?>