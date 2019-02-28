<?php
 /* 
  *
  *  The front page
  *
  *
  */

// Call to Action sidebar
add_action( 'genesis_before_loop', 'tc_main_cta' );
function tc_main_cta() {
	if ( is_active_sidebar( 'main-cta' ) ) { ?>
		<aside class="main-cta">
			<?php dynamic_sidebar( 'main-cta' ); ?>
		</aside>
	<?php }
}

// Remove main loop -- this loops through latest posts
remove_action( 'genesis_loop', 'genesis_do_loop' );

genesis();

?>



<?