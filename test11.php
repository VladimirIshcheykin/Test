<?php
/*Created by Vladimir (10.03.2022 10:27)*/

function getPath($current_r, $current_c, $maze, &$path) {
	if ($current_r < 0 || $current_c < 0) {
		return false;
	}

	if (in_array([$current_r, $current_c], $maze)) {
		echo 'Forbidden: '.$current_r.' - '.$current_c.'<br>';
		return false;
	}

	$isDestination = ($current_r == 0 && $current_c == 0);

	$r = rand(0, 1);

	echo $current_r.' - '.$current_c.'<br>';

	if (($r == 0) && ($isDestination || getPath($current_r-1, $current_c, $maze, $path) || getPath($current_r, $current_c-1, $maze, $path))) {
		$path[] = [$current_r, $current_c];
		return true;
	}
	elseif (($r == 1) && ($isDestination || getPath($current_r, $current_c-1, $maze, $path) || getPath($current_r-1, $current_c, $maze, $path))) {
		$path[] = [$current_r, $current_c];
		return true;
	}

	return false;
}


$path = [];
getPath(10, 10, [[5, 5], [9, 10], [1, 0]], $path);

var_dump($path);
