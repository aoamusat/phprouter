<?php 

/**
 * Request class for working with HTTP requests
 * @author Hakim Amza
 * @license MIT License
 * @package PHP Router
 * @version 1.0
 */

class Request
{
	public static function uri()
	{
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}
	
	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}