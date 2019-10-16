<?php

	require __DIR__.'Function.php';

	$db_config = require __DIR__.'config.php';
	$db_config = $db_config['database'];

	try
	{
		return new PDO(
			"mysql: host={$db_config['DB_HOST']}; dbname={$db_config['DB_NAME']}",
			$db_config['DB_USER'],
			$db_config['DB_PASS']
		);
	} 
	catch (PDOException $ex)
	{
		dd($ex);
	}