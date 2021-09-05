<?php
  /**
   * Template Name:theme
   */

get_header(); ?>       
       <!-------------------------------------body--------------------------------->
				<?php get_template_part( 'content', get_post_format() ); ?>
        <?php the_content(); ?>
<?php get_footer(); ?>