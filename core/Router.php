<?php
	
	/**
	 * Request class for working with HTTP requests
	 * @author Hakim Amza
	 * @license MIT License
	 * @package PHP Router
	 * @version 1.0
	 */

	class Router 
	{
		/**
		 * @var $route associative array of URI
		 * Your can also add other request methods
		 * like PUT, PATCH, DELETE, OPTIONS etc
		 */
		public $routes = [
			'GET' => [],
			'POST' => []
		];

		/**
		 * Load the route file
		 * @param string $file
		 * @return Router | self
		 */ 
		public static function load(string $file)
		{
			$router = new self;
			require $file;
			return $router;
		}

		/**
		 * Forward the URI traffic to a specific controller based on the request method
		 * @param string $uri
		 * @param string $requestMethod
		 * @return mixed
		 */ 
		public function direct(string $uri, string $requestMethod)
		{
			if (array_key_exists($uri, $this->routes[$requestMethod]))
			{
				return $this->routes[$requestMethod][$uri];
			}
			else
			{
				header('Content-type: text/html');
				http_response_code(404);
				die("Error 404. Page Not Found!");
			}
		}

		/**
		 * Handles GET requests
		 * @param string $uri
		 * @param string $handler
		 */
		public function get($uri, $handler)
		{
			$this->routes['GET'][$uri] = $handler;
		}

		/**
		 * Handles POST requests
		 * @param string $uri
		 * @param string $handler
		 */
		public function post($uri, $handler)
		{
			$this->routes['POST'][$uri] = $handler;
		}
	}