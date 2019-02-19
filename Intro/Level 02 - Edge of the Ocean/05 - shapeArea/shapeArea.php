<?php 

function shapeArea($n) {

	$n2 = $n--;	
	$x1 = $n ** 2;
	$x2 = $n2 ** 2;

	$area = $x1 + $x2;

	return $area;
    
}

?>