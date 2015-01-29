<?php 

	function pass_crypt($pass) {
	$format = "$2a$10$";
	$hash   = "tebakpasswordsayahahaha20";
	$salt   = $format . $hash;
	
	$new_pass = crypt($pass, $salt);
	return $new_pass;
}