<?php
  /**
   * Template Name:Contact
   */

get_header(); ?>
        <!-------------------------------------body--------------------------------->
        <main>
            <section class="contact-header-banner">
                <span>
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
                </span>
            </section>
            <section class="contact-main">
                <div class="contact-main-title">Contact Us</div>
                <div class="contact-main-form">
                    <form class="contact-main-form-form">
                        <input required class="contact-main-form-form-input" type="text" placeholder="Your name">
                        <input required class="contact-main-form-form-input" type="email" placeholder="Your email">
                        <textarea class="contact-main-form-form-input" placeholder="Your message (Optional)"></textarea>
                        <button>Submit</button>
                    </form>
                    <div class="contact-main-form-social">
                        <div>
                            <a href="https://www.instagram.com/bertinity.io">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://t.me/bertinity">
                                <i class="fa fa-telegram"></i>
                            </a>
                            <a href="https://twitter.com/bertinity">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://www.pinterest.de/bertinity/">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCyY_Vf3CYkCTnfBs4_Gs_EQ">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            <a href="https://github.com/Bertinity">
                                <i class="fa fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/bertinity">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="https://www.bertinity.com">
                                <i class="fa fa-reddit-alien"></i>
                            </a>
                        </div>
                    </div>
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