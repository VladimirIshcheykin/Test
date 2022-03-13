<?php

echo 1 >> 2;
echo '<br>';

function getValues() {
    yield 'value1';
    return 'value2';
}

$a = getValues();
var_dump($a);
echo '<br>';
echo '<br>';

$values = getValues();
foreach ($values as $value) {
    echo $value;
    echo '<br>';
}
echo '<br>';


function getValues1() {
    $valuesArray = [];
    // get the initial memory usage
    echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;
    for ($i = 1; $i < 800000; $i++) {
        $valuesArray[] = $i;

        // let us do profiling, so we measure the memory usage
        if (($i % 200000) == 0) {
            // get memory usage in megabytes
            echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB'. PHP_EOL;
        }
    }
    return $valuesArray;
}

$myValues = getValues1(); // building the array here once we call the function
foreach ($myValues as $value) {}

echo '<br>';

function getValues2() {
    // get the initial memory usage
    echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;
    $j = 1;
    for ($i = 1; $i < 800000; $i++) {

        // let us do profiling, so we measure the memory usage
        if (($i % 200000) == 0) {
            // get memory usage in megabytes
            echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB'. PHP_EOL;
            echo '<br>';
            yield $j => $i;
            $j++;
        }
    }

}

$myValues = getValues2(); // no action taken until we loop over the values
foreach ($myValues as $key => $value) {
    echo $key, ' - ', $value, '<br>';
} // start generating values here

echo '<br>';
