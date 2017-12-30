<?php

  /* Template Name: Home Page */
  get_header();
  
  $heroImage = get_field('hero_image');

  
?>
<div class="page home">
  <div class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>);">
    <div class="overlay"></div>
    <div class="container">
      
<?php if ( get_theme_mod( 'logo' ) ) :
?>
 
      <img src="<?php echo get_theme_mod( 'logo' ); ?>" />
   
<?php endif;
?>
      <h1><?php bloginfo('description'); ?></h1>
    </div>
  </div>
  <div class="section" id="services">
    <div class="container">
      <h2>Services</h2>

<?php if( have_rows('services') ):
        while ( have_rows('services') ) : the_row();

        $bg = get_sub_field('image');
        $item = get_sub_field('title');
        $showHideItem = strtolower(str_replace(' ', '', $item));
?>
      <a class="service" href="<?php the_sub_field('link'); ?>" data-ng-mouseover="<?php echo $showHideItem; ?> = true"  style="background-image: url(<?php echo $bg['url']; ?>);">
        <h3><?php the_sub_field('title'); ?></h3>
      </a>
      <div class="modal" data-ng-show="<?php echo $showHideItem; ?>" data-ng-mouseleave="<?php echo $showHideItem; ?> = false">
        <h3><?php the_sub_field('title'); ?></h3>
        <?php the_sub_field('copy'); ?>
        <a class="cta" href="<?php the_sub_field('link') ?>">Learn More</a>
      </div>
<?php   endwhile;
      endif;
      $book = get_field( 'inspiration_book' );
      if( $book ): 
?>  
      <a class="cta" href="<?php echo $book; ?>" target="_blank">Wink Inspiration Book</a>
<?php endif;
?>
    </div>
  </div>
  <div class="section" id="about">
    <div class="container">
      <h2>About</h2>
      <div class="copy">
        <?php the_field('about'); ?>
      </div>
    </div>
  </div>
  <div class="section" id="book">
    <div class="container">
      <h2><?php the_field('booking_section_title'); ?></h2>
      <div class="copy">
        <?php the_field('booking_instructions'); ?>
      </div>
      <?php echo do_shortcode('[booking]'); ?>
    </div>
  </div>
  <div class="section" id="founder">
    <div class="container">
      <h2><?php the_field('about_founder_section_title'); ?></h2>
      <div class="copy">
        <?php the_field('about_founder'); ?>
      </div>
    </div>
  </div>
</div>

<?php

  get_footer();
  
  ?>