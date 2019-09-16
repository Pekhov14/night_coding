<?php

// написать функцию которая возвращает
// кол эл в массиве как count

$arr = [3, 4, 5, 1, 0, 7, 12, 22];

function my_count($array) {
	
	$cout_item = 0;
	
	foreach($array as $key) 
		$cout_item++;

	return $cout_item;
}


echo my_count($arr);
