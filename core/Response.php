<?php 
	
	/**
	 * Response
	 */
	class ClassName extends AnotherClass
	{
		
		public static function setHeader($header, $value)
		{
			return header("{$header}: {$value}");
		}

		public static function json($data)
		{
			self::setHeader('Content-type', 'application/json');
			return json_encode($data);
		}
	}