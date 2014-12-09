<?php 

/*
 * @hooked page-look-book.php
 * This hook redirects the user to the same page with additional get vars on a failed login
 * rather than the default wp-login.php template.
 *
 */
add_action('wp_login_failed', 'login_failure_redirect');
function login_failure_redirect( $username ) {
	$ref = $_SERVER['HTTP_REFERER'];

	if ( !empty($ref) ) {
		$get_vars = '?login=failed';
		wp_redirect( $ref . $get_vars );
		exit;	
	}
}



?>