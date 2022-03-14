  <div class="large_quote">
    	<div class="row justify-content-center text-center">
        <div class="col-12 large_quote-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/block-quote-img.png" alt="">
        </div>
          <div class="display-4 <?php the_field('color'); ?> col-sm-8">
             <?php the_field('text_big'); ?>
          </div>
          <div class="col-sm-8 col-md-6 large_quote-text">
             <?php the_field('text'); ?>
          </div>
      </div>
  </div>
