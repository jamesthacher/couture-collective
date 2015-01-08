
<?php get_header();?>

<?php wc_print_notices(); ?>

<div id="look-book" class="template template-page ">	

	<section id="look-book-introduction" class="page-introduction block m2 hidden">	
	
		<hr class="page-header-rule"/>					

		<div class="container">
				
			<div class="row">
			
				<div class="col-sm-10 col-sm-offset-1">

				
					<h1 class="serif centered m">Welcome to the Fall 2014 Look Book Preview!</h1>

									
				</div>		

			</div>
			
		</div>
	</section>
	
	<section id="look-book-body" class="look-book block">	
	
		<div class="products">
			<div class="container">
				<?php  if ( $uli = is_user_logged_in() ) : ?>
				<div class='row filter hidden'>
					<div class='col-sm-6'></div>
					<div class='col-sm-2'><a href="#">Owned</a></div>
					<div class='col-sm-2'><a href="#">Shares Available</a></div>
					<div class='col-sm-2'><a href="#">Purchase Available</a></div>
				</div>
				<?php endif; ?>
				
				<div class="row">
				<?php
				$args = array(
					'post_type' => 'dress',
					'posts_per_page' => ( $uli ) ? -1 : 6,
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);

				$GLOBALS['LOOP'] = new WP_Query( $args );
				$GLOBALS['USER'] = wp_get_current_user();

				if ( $GLOBALS['LOOP']->have_posts() ) {

					while ( $GLOBALS['LOOP']->have_posts() ) : 
					 	get_template_part( '_partials/dress/dress', 'card' );
					endwhile;

				} else { 
					echo '<h1>There aren\'t any dresses right now!</h1>';
				} 

				?>
				</div>
			</div>
		</div>
											
	</section>	
		
</div>	

<?php get_footer(); ?>
