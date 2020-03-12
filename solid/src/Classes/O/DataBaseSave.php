<?php


namespace App\O;


class DataBaseSave implements Saver {
	private $mysqli, $host, $user, $pass, $db;

	/**
	 * DataBaseSave constructor.
	 * @param $host
	 * @param $user
	 * @param $pass
	 * @param $db
	 */
	public function __construct($host, $user, $pass, $db)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->db   = $db;
	}

	public function connect() {
		$this->mysqli = new \mysqli($this->host, $this->user, $this->pass, $this->db);
	}

	public function save($data) {
		$this->connect();
		$this->mysqli->query("INSERT INTO `reports` (report) VALUE ('".$data."')");
	}


}