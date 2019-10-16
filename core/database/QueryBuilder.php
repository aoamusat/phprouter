<?php
	
	class Query
	{
		protected $db;

		public function __constructor($db)
		{
			$this->db = $db;
		}

		public function all(string $table)
		{
			$sql = "SELECT * FROM {$table}";
			$statement = $db->prepare($sql);

			$result = $statement->execute();

			return $result->fetchAll(PDO::FETCH_OBJ);
		}
	}