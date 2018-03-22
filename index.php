<?php 
	
	require_once("vendor/autoload.php");
	require_once("vendor/hcodebr/phpclasses/src/DB/Sql.php");
	$app = new \Slim\Slim();
	$app->config('debug', true);
	$app->get('/',function(){
		$sql = new Sql();
		$results = $sql->select("select * from tb_persons");
		echo json_encode($results);
		
	});
	$app->run();
 ?>