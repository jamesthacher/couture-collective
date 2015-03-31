<?php get_template_part('_partials/dress/dress', 'setup-postdata'); ?>

<div class="col-sm-5 col-sm-offset-1 dress-gallery">
	<?php get_template_part('_partials/dress/dress', 'gallery'); ?>
</div>

<div class="col-sm-5 col-sm-offset-1 dress-meta">
<?php	
	if ( is_user_logged_in() ) {

		get_template_part('_partials/dress/dress', 'logic');

	}

	get_template_part('_partials/dress/dress', 'meta');
?>
</div>

<?php get_template_part('_partials/dress/dress', 'teardown-postdata'); ?>