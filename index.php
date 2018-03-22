<?php 
	
	require_once("vendor/autoload.php");
	require 'vendor/hcodebr/phpclasses/src/Page.php';
	use \Slim\Slim;
	

	$app = new Slim();
	$app->config('debug', true);
	$app->get('/',function(){
		$page = new Page();
		$page->setTpl("index");
		
	});
	$app->run();
 ?>