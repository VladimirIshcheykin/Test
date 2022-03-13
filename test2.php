<?php

$s = 'csggergbervvesrsesrgser';

echo 'String: ', $s, '<br><br>';

for ($i = 0; $i < strlen($s); $i++) {
    //echo $s[$i], '<br>';
    //echo '---<br>';
    if (isset($a[$s[$i]])) continue;
    for ($j = $i; $j < strlen($s); $j++) {
        if ($s[$i] == $s[$j]) {
            if (!isset($a[$s[$i]])) $a[$s[$i]] = 1;
            else $a[$s[$i]] = $a[$s[$i]] + 1;
        }
        //echo $s[$j], '<br>';
        //echo '<br>';
    }
}

foreach ($a as $k => $v) {
    echo 'Letter: ', $k, ', counts: ', $v, '<br>';
}


?>