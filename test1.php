<?php
ini_set('max_execution_time', 3600);

$a = [];
for ($i = 1; $i <= 100; $i++) {
    for ($j = 1; $j <= 100; $j++) {
        for ($k = 1; $k <= 100; $k++) {
            for ($n = 1; $n <= 100; $n++) {
                if (pow($i, 3) + pow($j, 3) == pow($k, 3) + pow($n, 3)) {
                    $a[] = [$i, $j, $k, $n];
                }
            }
        }
    }
}

foreach ($a as $v) {
    var_dump($v);
    echo '<br>';
}
