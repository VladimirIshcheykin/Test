<?php
$s1 = 'sshkrtu';

$s2 = 'tsukrhs';

echo 'String1: ', $s1, '<br><br>';
echo 'String2: ', $s2, '<br><br>';

function LettersInStr($s) {

    $a = [];
    for ($i = 0; $i < strlen($s); $i++) {
        if (isset($a[$s[$i]])) continue;
        for ($j = $i; $j < strlen($s); $j++) {
            if ($s[$i] == $s[$j]) {
                if (!isset($a[$s[$i]])) $a[$s[$i]] = 1;
                else $a[$s[$i]] = $a[$s[$i]] + 1;
            }

        }
    }
    return $a;
}

$a1 = LettersInStr($s1);

$a2 = LettersInStr($s2);


if (empty(array_diff_assoc($a1, $a2))) {
    echo 'Yes';
}
else {
    echo 'No';
}
