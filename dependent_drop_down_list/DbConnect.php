<?php
	class DbConnect {
		private $host   = 'localhost';
		private $dbName = 'readers';
		private $user   = 'root';
		private $pass   = '';

		public function connect() {
			try {
				$conn = new PDO('mysql:host='. $this->host .';dbname='. $this->dbName.';charset=utf8',
					$this->user,
					$this->pass,
				);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (PDOException $e) {
				die('Немогу подключиться' . $e->getMessage());
			}
		}
	}
