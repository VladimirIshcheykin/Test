<?php

$paths = [
    ["A", "B"],
    ["A", "C"],
    ["B", "K"],
    ["C", "K"],
    ["E", "L"],
    ["F", "G"],
    ["J", "M"],
    ["E", "F"],
    ["G", "H"],
    ["G", "I"],
    ["C", "G"]
];


function findRoots($paths) {
    $roots = [];
    foreach ($paths as $branch_source) {
        if (in_array($branch_source[0], $roots)) continue;
        $c = true;
        foreach ($paths as $branch_destination) {
            if ($branch_destination[1] == $branch_source[0]) {
                $c = false;
            }
        }
        if ($c) $roots[] = $branch_source[0];
    }
    return $roots;
}

function findWays($root, $paths, $way, &$ways) {
    $way[] = $root;

    echo $root;
    echo '<br>';

    $c = true;
    foreach ($paths as $branch) {
        if ($branch[0] == $root) {
            echo $branch[1];
            echo '<br>';
            echo '<br>';
            $c = false;
            findWays($branch[1], $paths, $way, $ways);
        }
    }
    var_dump($way);
    echo '<br>';
    echo '<br>';
    if ($c) {
        $ways[] = $way;
    }
    var_dump($ways);
    echo '<br>';
    echo '<br>';
}


function findDestinations($paths) {
    $ways = [];
    foreach (findRoots($paths) as $root) {
        findWays($root, $paths, [], $ways);
    }
    var_dump($ways);
    echo '<br>';
    echo '<br>';
    $destinations = [];
    foreach ($ways as $way) {
        if (!isset($destinations[$way[0]])) {
            $destinations[$way[0]][] = $way[count($way)-1];
        }
        elseif (!in_array($way[count($way)-1], $destinations[$way[0]])) {
            $destinations[$way[0]][] = $way[count($way)-1];
        }
    }
    return $destinations;
}

$a = findDestinations($paths);

var_dump($a);
echo '<br>';