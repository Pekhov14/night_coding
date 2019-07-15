<?php

$arr  = ['h', 'e', 'l', 'l', 'o'];
$arr2 = [];

foreach($arr as $value) {
	$value  = array_pop($arr);
	$arr2[] = $value;
}

var_dump($arr2);
