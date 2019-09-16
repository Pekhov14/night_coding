<?php

$a = 'line';
$arr = [3, 4, 5, 1, 'loh' => 43434];

function my_array_keys($array) {
	if(is_array($array)) {
		$keys_item = [];
	
		foreach($array as $key => $value)
			$keys_item[] = $key;
	
		return $keys_item;
	} else
		return 'Это не масив';
}

var_dump(my_array_keys($a));
