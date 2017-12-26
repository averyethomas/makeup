<?php

  get_header();
  
  if (have_posts()) : while (have_posts()) : the_post();

  
  $heroImage = get_field('hero_image');
  
?>
<div class="page single">
  <div class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>);">
    <div class="overlay"></div>
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="section" >
    <div class="container">
      <div class="copy">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php

  endwhile; endif;

  get_footer();
  
?>