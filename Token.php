<?php
  /**
   * Template Name:Token
   */

get_header(); ?>
        <!-------------------------------------body--------------------------------->
        <main>
            <section class="services-header-banner" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header_bertinityCoin.jpg);">
              <div class="services-bg-cover">
                <div class="token-banner-first">
                  <span class="service-odd">B</span>
                  <span class="service-even">e</span>
                  <span class="service-odd" >r</span>
                  <span class="service-even">t</span>
                  <span class="service-odd" >i</span>
                  <span class="service-even">n</span>
                  <span class="service-odd" >i</span>
                  <span class="service-even">t</span>
                  <span class="service-even" style="margin-right: 15px;">y</span>
                  <span class="service-even">C</span>
                  <span class="service-even">o</span>
                  <span class="service-even">i</span>
                  <span class="service-even" style="margin-right: 15px;">n</span>
                  <span class="service-even">F</span>
                  <span class="service-even">e</span>
                  <span class="service-even">a</span>
                  <span class="service-even">t</span>
                  <span class="service-even">u</span>
                  <span class="service-even">r</span>
                  <span class="service-even">e</span>
                  <span class="service-even">s</span>
                </div>
                <div class="services-bg-circle"></div>
                <div class="services-bg-line">
                  <div></div>
                </div>
                <span class="token-underline-text">Bertinity token fee discount and potential value increase</span>
                <span class="services-explore-text">Bertinity Token</span>
                <span class="services-banner-text">Our </span>
              </div>
            </section>
            <section class="token-main">
              <!-- odd  -->
              <div class="token-card-odd">
                <div class="token-card-text-odd">
                  <span>Getting discount on fees and commissions</span>
                </div>
                <div class="token-card-media-odd">
                  <img src="<?php echo get_template_directory_uri();?>/images/bertinity.png" alt="Bertinity">
                </div>
              </div>
              <!-- even  -->
              <div class="token-card-even">
                <div class="token-card-media-even">
                  <lottie-player 
                    class="lottie-animation"
                    src="https://assets3.lottiefiles.com/packages/lf20_ry4gwaej.json" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay
                  >
                  </lottie-player>
                </div>
                <div class="token-card-text-even">
                  <span>Commission discount </span>
                  <div class="token-card-text-even-undertext">Security token and stock trade commission discount</div>
                </div>
              </div>
              <!-- odd  -->
              <div class="token-card-odd">
                <div class="token-card-text-odd">
                  <span>Accessible</span>
                  <div class="token-card-text-even-undertext">Acceptable on BERTINITY payment gateway</div>
                </div>
                <div class="token-card-media-odd">
                  <lottie-player 
                    class="lottie-animation"
                    src="https://assets5.lottiefiles.com/packages/lf20_gg3soevg.json" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay
                  >
                  </lottie-player>
                </div>
              </div>
              <!-- even  -->
              <div class="token-card-even">
                <div class="token-card-media-even">
                  <lottie-player 
                    class="lottie-animation"
                    src="https://assets10.lottiefiles.com/packages/lf20_lfwtz9pc.json" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay
                  >
                  </lottie-player>
                </div>
                <div class="token-card-text-even">
                  <span>Listable</span>
                  <div class="token-card-text-even-undertext">Ability to list on Bertinity and other trusty exchanges</div>
                </div>
              </div>
              <!-- odd  -->
              <div class="token-card-odd">
                <div class="token-card-text-odd">
                  <span>Discount on purchases</span>
                  <div class="token-card-text-even-undertext">Discount on purchases or trades in the ecosystem</div>
                </div>
                <div class="token-card-media-odd">
                  <lottie-player 
                    class="lottie-animation"
                    src="https://assets7.lottiefiles.com/packages/lf20_oniubyqz.json" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay
                  >
                  </lottie-player>
                </div>
              </div>
              <!-- even  -->
              <div class="token-card-even">
                <div class="token-card-media-even">
                  <lottie-player 
                    class="lottie-animation"
                    src="https://assets10.lottiefiles.com/packages/lf20_bvbbosoz.json" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay
                  >
                  </lottie-player>
                </div>
                <div class="token-card-text-even">
                  <span>fee discount</span>
                  <div class="token-card-text-even-undertext">BERTINITY Exchange and CPG transaction fee discount</div>
                </div>
              </div>
              <!-- odd  -->
              <div class="token-card-odd">
                <div class="token-card-text-odd">
                  <span>value increases</span>
                  <div class="token-card-text-even-undertext">Potential value increases due to project growth</div>
                </div>
                <div class="token-card-media-odd">
                  <lottie-player 
                    class="lottie-animation"
                    src="https://assets10.lottiefiles.com/packages/lf20_bvbbosoz.json" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay
                  >
                  </lottie-player>
                </div>
              </div>
            </section>
            <section class="token-supply">
              <span>Token Supply</span>
              <img style="width:100%" src="<?php echo get_template_directory_uri();?>/images/token.png" alt="token">
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