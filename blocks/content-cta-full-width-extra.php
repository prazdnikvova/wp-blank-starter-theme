<div class="inner">
  <div class="cta-block cta-block-extra <?php the_field('color'); ?>">
    <div class="container">
    	<div class="row justify-content-center cta-text">
          <div class="cta-text-name display-4 col-sm-8">
             <?php the_field('name'); ?>
          </div>
          <div class="cta-text-content col-sm-8 col-md-6">
             <?php the_field('text'); ?>
          </div>
          <?php
          $cta_link = get_field('link');
          if ($cta_link) {?>
              <div class="col-12">
                 <a class="btn bigsmall" href="<?php echo $cta_link; ?>"><span><?php the_field('link_text'); ?></span></a>
              </div>
        <?php }; ?>
      </div>
    </div>
  </div>
</div>
