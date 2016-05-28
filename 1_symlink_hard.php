<?php
$a = 10;
$b = &$a;

echo '$b=', $b, PHP_EOL;

$b = 15;

echo '$a=',$a, ' $b=', $b, PHP_EOL;

$c = &$b;

echo '$c=', $c, PHP_EOL;