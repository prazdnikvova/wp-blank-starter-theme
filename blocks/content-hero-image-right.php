<div class="hero">
    <div class="row hero-right">
      <div class="col-md-6 hero-img">
        <div class="hero-img-content">
          <img src="<?php the_field('images'); ?>" alt="">
        </div>
      </div>
      <div class="col-md-6 hero-text">
        <div class="hero-tag">
          <span class="tag label <?php the_field('color'); ?>"><?php the_field('tag'); ?></span>
        </div>
        <h2><?php the_field('name'); ?></h2>
        <?php the_field('text'); ?>
        <?php
        $cta_link = get_field('link');
        if ($cta_link) {?>
            <div class="hero-link">
               <a class="btn" href="<?php echo $cta_link; ?>"><?php the_field('link_text'); ?></a>
            </div>
      <?php }; ?>
      </div>
    </div>
</div>
