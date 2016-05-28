<?php
$a = 10;
$b =& $a;

echo $b, ' ', $a, PHP_EOL;

unset($a);

echo $b, ' ', $a, PHP_EOL;