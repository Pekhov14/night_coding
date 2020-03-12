<?php


namespace App\O;


class ReportRepository {
	private $report, $server;

	function __construct(Report $report, Saver $server) 	{
		$this->report = $report;
		$this->report = $server;
	}

	public function save() {
		$this->server->save($this->report->renderReport());
	}

}