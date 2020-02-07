<?php

function getSum(float $x, float $y) {
	return $x + $y;
}

function getSumOfCos(float $x, float $y) {
	$cosX = cos($x);
	$cosY = cos($y);
	return getSum($cosX, $cosY);
}

echo getSumOfCos(1.44, 2);