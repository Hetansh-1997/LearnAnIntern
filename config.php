<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient=new Google_Client();
	$gClient->setClientId("1016331410224-jnnhnffh8mgglbcn28qhbk1o468jbp9j.apps.googleusercontent.com");
	$gClient->setClientSecret("QIIHi-g2mgcWDHLKVhfWrIJr");
	$gClient->setApplicationName("LearnAnIntern");
	$gClient->setRedirectUri("http://localhost/learnanintern/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>