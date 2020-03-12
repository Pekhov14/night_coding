<?php


namespace App\O;


class FileSave implements Saver{
	private $filepath;

	/**
	 * FileSave constructor.
	 * @param $filepath
	 */
	public function __construct($filepath)
	{
		$this->filepath = $filepath;
	}

	public function save($data) {
		file_put_contents($this->filepath, $data);
	}

}