<?php

	session_start();
	require 'Facebook/autoload.php';
	
	$fb = new Facebook\Facebook([
		'app_id' => '502611683766684', //Id do App
		'app_secret' => '4a2894f544e249fcdcc114f8bb502a3e', //App Secret do App
		'default_graph_version' => 'v6.0'	
	]);