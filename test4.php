<?php

$s1 = 'pale';
//$s1 = 'apple';
$s2 = 'pke';
//$s2 = 'aple';

echo 'String1: ', $s1, '<br><br>';
echo 'String2: ', $s2, '<br><br>';

function compareStr($s1, $s2) {
    if (strlen($s1) == strlen($s2)) {
        return compareChangeStr($s1, $s2);
    }
    elseif (strlen($s1)+1 == strlen($s2)) {
        return compareInsertStr($s2, $s1);
    }
    elseif (strlen($s1) == strlen($s2)+1) {
        return compareInsertStr($s1, $s2);
    }
    return false;
}

function compareChangeStr($s1, $s2) {
    $c = 0;
    while ($i < strlen($s1) && $j < strlen($s2)) {
        if ($s1[$i] != $s2[$j]) {
            $c++;
        }
        $i++;
        $j++;
    }
    echo 'Change - ', $c, '<br>';
    if ($c > 1) return false;
    return true;
}

function compareInsertStr($s1, $s2) {
    echo 'String1: ', $s1, '<br><br>';
    echo 'String2: ', $s2, '<br><br>';
    $c = 0; $i = 0; $j = 0;
    while ($i < strlen($s1) && $j < strlen($s2)) {
        if ($s1[$i] != $s2[$j]) {
            $i++;
            $c++;
        }
        else {
            $i++;
            $j++;
        }
    }
    echo 'Insert - ', $c, '<br>';
    if ($c > 1) return false;
    return true;
}


var_dump(compareStr($s1, $s2));