<?php if( gridlove_post_display( 'ad_below' ) && $ad = gridlove_get_option('ad_below_single') ): ?>
	<div class="gridlove-ad"><?php echo do_shortcode( $ad ); ?></div>
<?php endif; ?>