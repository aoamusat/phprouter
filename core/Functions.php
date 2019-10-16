<?php 

	/**
	 * Contains useful functions. All class methods are static
	 */
	class Functions
	{
		/**
		 * Dump and die
		 * @param mixed $object
		 * @return null
		*/
		public static function dd($object)
		{
			echo "<pre>";
				print_r($object);
			echo "</pre>";
		}

		/**
		 * @param string $input
		 * @return string
		*/
		public static function clean($input)
		{
			// trim all the trailing whitespaces
			$result = trim($input);

			// strip all the slashes
			$result = stripslashes($result);

			// clean up html characters
			$result = htmlspecialchars($result);

			return $result;
		}

		/**
		 * @param mixed $file
		 * @return mixed
		*/
		public static function uploadFile($file)
		{

		}

		/**
		 * @param array $arr
		 * @return JSON
		*/
		public static function toJson(array $data)
		{
			$output = json_encode($data);
			header("Content-type: application/json");
			echo $output;
		}
	}