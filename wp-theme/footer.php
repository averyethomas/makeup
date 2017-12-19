<footer>
  <div class="container">
    <div class="footerSection">
<?php if ( get_theme_mod( 'phone' ) ) :
?>
      <a href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><?php echo get_theme_mod( 'phone' ); ?></a>
      
<?php endif;
      if ( get_theme_mod( 'email' ) ) :
?>
      <a href="mailto:<?php echo get_theme_mod( 'email' ); ?>"><?php echo get_theme_mod( 'email' ); ?></a>
   
<?php endif;
?>
    </div>
    <div class="footerSection">
      <small>&copy; Copyright <?php echo date("Y"); ?>, <?php bloginfo('name'); ?></small>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>