<?php
/*Created by Vladimir (10.03.2022 16:34)*/



function multiply($small, $big) {
	if ($small == 0) return 0;
	if ($small == 1) return $big;

	$s = $small >> 1;
	echo 's - '.$s.'<br>';
	$s1 = multiply($s, $big);
	echo 's1 - '.$s1.'<br>';
	$s2 = $s1;

	if ($small % 2 == 1) {
		echo 'yes<br>';
		$s2 = $s2 + $big;
	}

	echo 's2 - '.$s2.'<br>';

	echo '<br>';

	return $s1 + $s2;
}


$m = multiply(6, 10);

echo $m;
echo '<br>';
echo '<br>';
echo '<br>';


$m = multiply(7, 10);

echo $m;
echo '<br>';
echo '<br>';
echo '<br>';