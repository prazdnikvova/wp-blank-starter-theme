  <div class="cta-block cta-block-img <?php the_field('color'); ?>">
    	<div class="row cta-text">
          <div class="col-sm-1 sm-non"></div>
          <div class="cta-text-name display-4 col-sm-5">
              <div class="cta-content">
                 <?php the_field('name'); ?>
                 <?php
                 $cta_link = get_field('link');
                 if ($cta_link) {?>
                   <div class="text-sm-center">
                      <a class="btn big" href="<?php echo $cta_link; ?>"><span><?php the_field('link_text'); ?></span></a>
                   </div>
               <?php }; ?>
             </div>
          </div>
          <div class="cta-text-img col-sm-6">
             <img src="<?php echo get_template_directory_uri() ?>/img/cta_with_icon.png" alt="">
          </div>
      </div>
  </div>
