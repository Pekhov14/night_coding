<?php
/*
 *  Интерфейс для формирования класса шобланизатора
 */


namespace App\S;


interface ITemplate {
	// Метод который будут реализововать все классы
	//   которые юудут его имплементировать
	function render($data);
}