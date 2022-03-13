<?php

class Test
{
public $value;
}

$a = new Test;
$a->value = 1;

$b = $a;
$b->value = 2;

echo $a->value;