<div class="features_list">
    <div class="row">
        <?php
         $color = get_field('color');
         $features_list=get_field('features_list');
         foreach ($features_list as $item_list)  { ?>
          <article class="col-md-5 col-sm-6 features_list-article">
             <h2><?php echo $item_list['name']; ?></h2>
             <?php echo $item_list['text']; ?>
             <?php
             $cta_link = $item_list['link'];
             if ($cta_link) {?>
                  <div class="">
                     <a class="a big <?php echo $color; ?>" href="<?php echo $cta_link; ?>"><span><?php echo $item_list['link_text']; ?></span></a>
                  </div>
            <?php }; ?>
          </article>
          <div class="col-md-1 md-non"></div>
        <?php }?>
  </div>
</div>
