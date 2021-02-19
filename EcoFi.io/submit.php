<?php

if(isset($_POST['url']) && $_POST['url'] == ''){

	$youremail = 'team@ecofi.io';

	$body = "
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Message: $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from ecofi.com', $body, $headers );

}

header('Location: https://ecofi.io/home.php');
exit('Redirecting you to https://ecofi.io/home.php');

?>