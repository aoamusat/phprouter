<?php

	$router->get('', 'app/controllers/index.php');
	$router->get('register', 'app/controllers/getregister.php');
	$router->post('register', 'app/controllers/postregister.php');