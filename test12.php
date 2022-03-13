<?php
/*Created by Vladimir (10.03.2022 11:22)*/


function subSeq($a, &$sub) {

	if (empty($sub)) {
		$sub[] = [];
	}

	for ($i = 0; $i < count($a); $i++) {

		$sub1 = $sub;

		foreach ($sub as $k => $v) {
			$sub[$k] = array_merge($sub[$k], [$a[$i]]);
		}
		$sub = array_merge($sub, $sub1);

	}

}


$d = [4, 6, 8, 11, 33, 125];
$sub = [];

subSeq($d, $sub);

echo count($sub).' - SUB - ';
var_dump($sub);
echo '<br><br>';