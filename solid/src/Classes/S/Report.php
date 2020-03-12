<?php


namespace App\S;


class Report {
	public function getDoctor() {
		return 'Doctor';
	}

	public function getPatient() {
		return 'Patient';
	}

	public function getData() {
		return 'Data';
	}

	public function renderReport() {
		// Или формировать массив
		return $this->getDoctor().' '.$this->getPatient().' '.$this->getData();
	}

	// Перенести в класс по сохранению данных (принимает только данные)
//	public function save() {
//		$filename = 'report' . $this->getData() . ' - ' . $this->getPatient() . '.text';
//		file_put_contents($filename, $this->renderReport());
//	}

	public function export() {
		//
	}
}