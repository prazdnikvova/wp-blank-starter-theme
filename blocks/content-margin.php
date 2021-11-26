<?php if( is_admin() ){ 
	echo '<h3>'.get_field('size').'</h3>';
} else { ?>
	<div class="<?php the_field('size'); ?>"></div>
<?php } ?>