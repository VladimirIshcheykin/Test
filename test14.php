<?php
/*Created by Vladimir (10.03.2022 17:03)*/


function getChanges($s) {
	if ($s == '') {
		$w = [];
		$w[] = '';
		return $w;
	}
	$first = $s[0];
	$s1 = substr($s, 1);

	$words = getChanges($s1);
	foreach ($words as $word) {
		for ($i = 0; $i <= strlen($word); $i++) {
			$words[] = insertChar($word, $first, $i);
		}
	}

	return $words;
}



function insertChar($w, $c, $i) {
	$sub1 = substr($w, 0, $i);
	$sub2 = substr($w, $i, strlen($w));
	return $sub1.$c.$sub2;
}


function getFinalChanges($s) {
	$a = [];
	foreach (getChanges($s) as $w) {
		if (strlen($w) == strlen($s)) $a[] = $w;
	}
	return $a;
}

var_dump(getFinalChanges('abgrt'));
echo '<br>';
echo '<br>';
echo '<br>';



function getChanges2($s, &$words) {
	if ($s == '') {
		$words[] = '';
		return;
	}
	$first = $s[0];
	$s1 = substr($s, 1);

	getChanges2($s1, $words);
	foreach ($words as $word) {
		for ($i = 0; $i <= strlen($word); $i++) {
			$words[] = insertChar($word, $first, $i);
		}
	}

	return;
}

$w = [];
getChanges2('abty', $w);

var_dump($w);
echo '<br>';
echo '<br>';
echo '<br>';