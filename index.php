<?php
  /**
   * Template Name:Home
   */

get_header(); ?>       
       <!-------------------------------------body--------------------------------->
        <main>
          <section id="demo" class="carousel slide video-carousel" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video autoplay muted loop width="100%">
                    <source src="<?php echo get_template_directory_uri();?>/videos/slider1.webm" type="video/webm">
                    <source src="<?php echo get_template_directory_uri();?>/videos/slider1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  <div class="video-carousel-center-line">
                    <div></div>
                    <span class="video-carousel-underline-text">to the fully decentralized word</span>
                  </div>
                  <span class="video-carousel-title-two">
                    <span class="service-odd">D</span>
                    <span class="service-even">e</span>
                    <span class="service-odd">c</span>
                    <span class="service-even">e</span>
                    <span class="service-odd">n</span>
                    <span class="service-even">t</span>
                    <span class="service-odd">r</span>
                    <span class="service-even">a</span>
                    <span class="service-odd">l</span>
                    <span class="service-even">i</span>
                    <span class="service-odd">z</span>
                    <span class="service-even">e</span>
                    <span class="service-odd" style="margin-right: 15px;">d</span>
                    <span class="service-even" style="font-weight: 700;" >w</span>
                    <span class="service-odd" style="font-weight: 700;">o</span>
                    <span class="service-even" style="font-weight: 700;">r</span>
                    <span class="service-odd" style="font-weight: 700;">l</span>
                    <span class="service-even" style="font-weight: 700;">d</span>
                    <div></div>
                  </span>
                </div>
                <div class="carousel-item">
                  <video autoplay muted loop width="100%">
                    <source src="<?php echo get_template_directory_uri();?>/videos/slider2.webm" type="video/webm">
                    <source src="<?php echo get_template_directory_uri();?>/videos/slider2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  <div class="video-carousel-center-line">
                    <div></div>
                    <span class="video-carousel-underline-text">Toward Decentralization, Equity and balance</span>
                  </div>
                  <span class="video-carousel-title-one">
                    <span class="service-odd">O</span>
                    <span class="service-even">u</span>
                    <span class="service-odd" style="margin-right: 15px;" >r</span>
                    <span class="service-even" style="font-weight: 700;" >v</span>
                    <span class="service-odd" style="font-weight: 700;">i</span>
                    <span class="service-even" style="font-weight: 700;">s</span>
                    <span class="service-odd" style="font-weight: 700;">i</span>
                    <span class="service-even" style="font-weight: 700;">o</span>
                    <span class="service-odd" style="font-weight: 700;">n</span>
                    <div></div>
                  </span>
                </div>
                <div class="carousel-item">
                  <video autoplay muted loop width="100%">
                    <source src="<?php echo get_template_directory_uri();?>/videos/slider3.webm" type="video/webm">
                    <source src="<?php echo get_template_directory_uri();?>/videos/slider3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  <div class="video-carousel-center-line">
                    <div></div>
                    <span class="video-carousel-underline-text">no cross border limitation and accessible for anyone anywhere</span>
                  </div>
                  <span class="video-carousel-title-two r-left-extra">
                    <span class="service-odd">L</span>
                    <span class="service-even">i</span>
                    <span class="service-odd">m</span>
                    <span class="service-even">i</span>
                    <span class="service-odd">t</span>
                    <span class="service-even">l</span>
                    <span class="service-odd">e</span>
                    <span class="service-even">s</span>
                    <span class="service-odd" style="margin-right: 15px;">s</span>
                    <span class="service-even" style="font-weight: 700;" >A</span>
                    <span class="service-odd" style="font-weight: 700;">c</span>
                    <span class="service-even" style="font-weight: 700;">c</span>
                    <span class="service-odd" style="font-weight: 700;">e</span>
                    <span class="service-even" style="font-weight: 700;">s</span>
                    <span class="service-odd" style="font-weight: 700;">s</span>
                    <span class="service-even" style="font-weight: 700;">i</span>
                    <span class="service-odd" style="font-weight: 700;">b</span>
                    <span class="service-even" style="font-weight: 700;">i</span>
                    <span class="service-odd" style="font-weight: 700;">l</span>
                    <span class="service-even" style="font-weight: 700;">i</span>
                    <span class="service-odd" style="font-weight: 700;">t</span>
                    <span class="service-even" style="font-weight: 700;">y</span>
                    <div style="width: 300px;height: 300px;" class="r-remove-extra"></div>
                  </span>
                </div>
              </div>
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon">
                  <i class="fa fa-angle-left" style="margin-right: 4px;"></i>
                </span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon">
                  <i class="fa fa-angle-right" style="margin-left: 3px;"></i>
                </span>
              </a>
          </section>
          <section class="youtube-player">
            <span class="youtube-player-title">BERTINITY INTRODUCTION</span>
            <iframe src="https://www.youtube.com/embed/KxideID6ccw" style="width: 80%; height: 480px;min-width: 300px;"></iframe>
            <span class="youtube-player-desc">Toward Decentralization Equity And Balance</span>
          </section>
          <!-- Slider main container -->
          <div class="swiper" style="width: 100%;height: 600px;">
            <div class="swiper-center-line"></div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide swip-one">
                <div class="silde-article-top">
                  <a href="https://www.bertinity.com/foundation/social-impact" class="slide-division-selected">
                    <span style="left: 0;">Security Token Marketplace</span>
                    <div></div>
                    <span class="slide-visit-page">Visit page <i style="font-weight: 900;" class="fa fa-angle-right"></i></span>
                  </a>
                  <div>
                    <span style="left: 20%;">Bertinity Coin</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 28%;">Exchange</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span>Crypto Payment Gateway</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 15%;">Other Services</span>
                    <i class="fa fa-circle"></i>
                  </div>
                </div>
                <div class="silde-article-bottom">
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Sustainability.png" alt="Bertinity icon">
                    </div>
                    <div>Boost-up capital raising superior level of privacy (NP-KYC)</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Fingerprint_Icon.png" alt="Bertinity icon">
                    </div>
                    <div>Fast and simple tradeable security token platform <br> No centralized desicion making as a paradigm</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Citizen.png" alt="Bertinity icon">
                    </div>
                    <div>Facilitate foreign stock investment <br> Facilitating p2p transactions and collabrations</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swip-two">
                <div class="silde-article-top">
                  <div>
                    <span>Security Token Marketplace</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <a href="https://www.bertinity.com/home/services/" class="slide-division-selected">
                    <span>Bertinity Coin</span>
                    <div></div>
                    <span class="slide-visit-page">Visit page <i style="font-weight: 900;" class="fa fa-angle-right"></i></span>
                  </a>
                  <div>
                    <span style="left: 28%;">Exchange</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span>Crypto Payment Gateway</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 15%;">Other Services</span>
                    <i class="fa fa-circle"></i>
                  </div>
                </div>
                <div class="silde-article-bottom">
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/towUSer.svg" alt="Bertinity icon">
                    </div>
                    <div>Earning block rewards due POS algorithm <br> Security token and stock trade <br> commission discount</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Smart_Charging.svg" alt="Bertinity icon">
                    </div>
                    <div>Potential value increases due to project growth <br> High distribution rate</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Usage_Based_Insurance.svg" alt="Bertinity icon">
                    </div>
                    <div>Invest in ICOs that are listed through our exchange by bertinity coin or Potential to participate icos by bertinity coin</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swip-three">
                <div class="silde-article-top">
                  <div>
                    <span>Security Token Marketplace</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 20%;">Bertinity Coin</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <a href="https://www.bertinity.com/home/services/" class="slide-division-selected">
                    <span style="left: 26%;">Exchange</span>
                    <div></div>
                    <span class="slide-visit-page">Visit page <i style="font-weight: 900;" class="fa fa-angle-right"></i></span>
                  </a>
                  <div>
                    <span>Crypto Payment Gateway</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 15%;">Other Services</span>
                    <i class="fa fa-circle"></i>
                  </div>
                </div>
                <div class="silde-article-bottom">
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Urban_Mobility_Management.png" alt="Bertinity icon">
                    </div>
                    <div>Security token trading ability <br> Demo trading</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Open___Transparent_Data.png" alt="Bertinity icon">
                    </div>
                    <div>No withdrawal ceiling <br> Superior level of privacy (NO-KYC)</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Peer_to_Peer_Collaboration.png" alt="Bertinity icon">
                    </div>
                    <div>Providing Premium API <br> Safe and secure trading engine</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swip-four">
                <div class="silde-article-top">
                  <div>
                    <span>Security Token Marketplace</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 20%;">Bertinity Coin</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 28%;">Exchange</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <a href="https://www.bertinity.com/home/services/" class="slide-division-selected">
                    <span style="left: 0%;">Crypto Payment Gateway</span>
                    <div></div>
                    <span class="slide-visit-page">Visit page <i style="font-weight: 900;" class="fa fa-angle-right"></i></span>
                  </a>
                  <div>
                    <span style="left: 15%;">Other Services</span>
                    <i class="fa fa-circle"></i>
                  </div>
                </div>
                <div class="silde-article-bottom">
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Track___Trace.png" alt="Bertinity icon">
                    </div>
                    <div>Easy to install and deploy</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Customs___Border_Management.png" alt="Bertinity icon">
                    </div>
                    <div>No withdrawal ceiling <br> Fully anonymous</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Digital_Twins.png" alt="Bertinity icon">
                    </div>
                    <div>Multiple assets as payment</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swip-five">
                <div class="silde-article-top">
                  <div>
                    <span>Security Token Marketplace</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 20%;">Bertinity Coin</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span style="left: 28%;">Exchange</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <div>
                    <span>Crypto Payment Gateway</span>
                    <i class="fa fa-circle"></i>
                  </div>
                  <a href="https://www.bertinity.com/home/services/" class="slide-division-selected">
                    <span>Other Services</span>
                    <div></div>
                    <span class="slide-visit-page">Visit page <i style="font-weight: 900;" class="fa fa-angle-right"></i></span>
                  </a>
                </div>
                <div class="silde-article-bottom">
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Track___Trace.png" alt="Bertinity icon">
                    </div>
                    <div>Crypto Forex Services</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Customs___Border_Management.png" alt="Bertinity icon">
                    </div>
                    <div>Escrow service for P2P trades</div>
                  </div>
                  <div>
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/images/Digital_Twins.png" alt="Bertinity icon">
                    </div>
                    <div>Public Blockchain Network (MainNet) and Crypto Wallet</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <i class="fa fa-angle-left" style="margin-right: 4px;"></i>
            </div>
            <div class="swiper-button-next">
                <i class="fa fa-angle-right" style="margin-left: 3px;"></i>
            </div>
          </div>
          <section class="home-roadmap">
            <p class="home-roadmap-title">Road Map</p>
            <img src="<?php echo get_template_directory_uri();?>/images/roadmap.png" alt="roadmap">
          </section>
          <section class="home-document">
            <p class="home-document-title">Document</p>
            <div class="home-document-items">
              <a href="https://www.bertinity.com/PDF/whitepaper.pdf" class="home-document-item" style="text-decoration:none;">
                <p>White Paper</p>
                <button>Download (PDF)</button>
              </a>
              <a href="https://www.bertinity.com/PDF/presentation.pdf" class="home-document-item" style="margin: 0 20px;text-decoration:none;">
                <p>Presentation</p>
                <button>Download (PDF)</button>
              </a>
              <a href="https://www.bertinity.com/PDF/one-pager.pdf" class="home-document-item" style="text-decoration:none;">
                <p>One Pager</p>
                <button>Download (PDF)</button>
              </a>
            </div>
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